<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('user_id');
            $table->string('email');
            $table->string('name');
            $table->text('comment');
            $table->integer('post_id')->unsigned();
            $table->timestamps();
            $table->boolean('approve');

            Shema::table('comments', function ($table){
                $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            });

            //A link between the post and comment
           
            // $table->string('body');

            // Add this line to make the comments work, 
            // but didnt know how to update in terminal
            // $table->tinyInteger('role')->default(1);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['post_id']);
        Schema::dropIfExists('comments');

    }
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  Comments controller
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
// use Illuminate\Support\Facades\Auth;
class CommentsController extends Controller
{
    // TO DO:
    // This metod store in DB 
    // You can just make comments on your own post
    // Not one others post ??
    public function store(Post $post)
        {
            // Required is how many signs when typing title comment?
            $this->validate(request(), [
                'body' => 'required|min:2'
            ]);

            // $user_id = auth()->user()->id;
            
            // Add a comments to a post
            $post->addComment(request('body'), $user_id);
            $post->comments()->save($comment);       

            return back ();
      
            // return response('Hello Comment');  
            // return view($post->body);
        }
}




        // Whit this ill get the rout to comments
        //   /comments
        // in the url
 //     public function store(Post $post)
 //     {
    //  $post->addComment(request('body'));
        
    //      return back();
    // }
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