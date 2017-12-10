<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use Session;
use Auth;

// Image for shorthand 
//in intervention package
use Image;
// use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // TO DO! Make the pagination not so Botstrap fix CSS
        $users = User::orderBy('id', 'desc')->paginate(4);
        return view('manage.users.index')->withUsers($users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.users.create');
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
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users'
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        //  THIS HAS::make dosent work?????????????????
        // $user->password =  Hash::make($password);
        $user->save();
        
       if ($user->save()) {
           return redirect()->route('users.show', $user->id);
       }else{
        
        Session::flash('danger', 'Sorrry a problem has occured whille creating a new user');
        return redirect()->route('users.create');
       }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.show')->withUser($user);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.edit')->withUser($user);
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
        $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();
    
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        //
    }
    
    //////////////////////////////////////////////////////////

          // User profile Avatar image

    //////////////////////////////////////////////////////////
      public function profile()
    {
        return view ('profile', array('user' =>Auth::user()));
    }

       public function update_avatar(Request $request)
    {

        $this->validate($request, [
            'avatar'  => 'image|nullable|max:1999'   
        ]);

    // HAndle the user upload of image avatar
    if($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();

        Image::make($avatar)->resize(300, 300)->save(public_path('/upload_image/avatars/' . $filename));

        $user = Auth::user();
        $user->avatar = $filename;
        // $user ->save();
      }

      return view ('profile', array('user' =>Auth::user()));
      // return redirect('profile');
    }
}