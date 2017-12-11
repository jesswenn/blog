<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Laravel library (in documantation)
use Illuminate\Support\Facades\Storage;
// Bringing linking the Model here
use App\Post;
// use DB;
class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // This function you can block everything 
    // if the user isent authentical (is alowed)
    public function __construct()
    {
        // Here we make excepts for witch page we want to display for the user
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Here we Load the posts
        // We want to fetch our posts bringing the model
        //Using eloquent
        
        //call ->get
        // $posts = Post::orderBy('title', 'desc')->get();
        // The pagination kicks in when reach 11 posts
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
            return view('posts.index')->with('posts', $posts);

        $posts = Post::latest()->get();

        $archives= Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->get()->toArray();

            return $archives;

            return view('posts.index', compact('posts', 'archives'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'        =>'required',
            'body'         =>'required',
            'cover_image'  => 'image|nullable|max:1999'   
        ]);


        // HAndle file uppload
        // If request click choose file
        // if the user didnt use the default image
        if ($request->hasFile('cover_image')) {
            
            // Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            // IImage store to storage/app/public image
            // MAke a simlink so it can store in the public folder
            // run: php artisan storage:link
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        
        //If user dont upload image the default image take place 
        }else{ 
            $fileNameToStore = 'noimage.jpg';
        }

        //Create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        // Post::create(request(['title', 'body']));

        //Auth current login user will get their id and save it in user_id DB
        $post->user_id =auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();
     
        return redirect('/posts')->with('success', 'Post Created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    $post = Post::find($id);
        return view ('posts.show')->with('post', $post);
     // Fetch the post to show on page from DB as an json with the return (se below)
        // return Post::find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $post = Post::find($id);
        // Check for correct user
        // When in the controller we can access the users id with auth user id
        // and when its not ecual to post user id that we niewing then 
        // we want to redirect with an error message
        if (auth()->user()->id !==$post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        return view ('posts.edit')->with('post', $post);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
      
        $this->validate($request, [
            'title'=>'required',
            'body' =>'required'
        ]);

        //HAndle file uppload
        // If request clickchoose file
        // if they didnt use the default image
        if ($request->hasFile('cover_image')) {
            
            // Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            // IImage store to storage/app/publicber image
            // MAke a simlink so it can store in the public folder
            // run: php artisan storage:link
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            
        }
        //Create and update post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        if ($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }
        // Saves it to the DB
        $post->save();
        return redirect('/posts')->with('success', 'Post Updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $post = Post::find($id);
        // Check for the correct user for deleting 
        // the same comment as in edit function
        if (auth()->user()->id !==$post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        // We dont want the no image to dissapear when deleting an image with post
        // If someone uploads an post without a image
        //
        if ($post->cover_image != 'noimage.jpg') {
            //Delete image
            Storage::delete('/public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }
}