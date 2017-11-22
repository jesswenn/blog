<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
// use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{

    // This metod store in DB but the 
    // comments dosent show in show.blade.php ?????
    public function store(Post $post)
        {
            $this->validate(request(), ['body' => 'required|min:2']);

            $user_id = auth()->user()->id;
            
            // Add a comments to a post
            $post->addComment(request('body'), $user_id);

            return back();
            // return response('Hello Comment');  
            // return view($post->body);
        }


        // Whit this ill get the rout to comments
        //   /comments
        // in the url
 //    	public function store(Post $post)
 //    	{
	// 	$post->addComment(request('body'));
		
	// 		return back();
	// }
}






  //     public function store(Request $request)
        // {
        //     return $this->belongsTo(User::class);
        // }




        // public function store(Post $post)
        // {
        //     Comment::create([
        //         'body' => request('body'),
        //         'post_id' => $post->id
        //     ]);

        //     return back();
        // }