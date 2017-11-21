<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
        
    public function store(Post $post)
        {
            $this->validate(request(), ['body' => 'required|min:2']);

            $user_id = auth()->user()->id;
            // Add a comments to a post
            $post->addComment(request('body'), $user_id);

            return back();
            
        }

           //  public function store(Request $request)
        // {
        //     return $this->belongsTo(User::class);
        // }



        // TO DO CAnt make the comments to work
        //Beetween the Comments controller and Post.php
        // something is missing?????
 //        	public function store(Post $post)
 //        	{
	// 		$post->addComment(request('body'));
		
	// 		return back();
	// }
}
