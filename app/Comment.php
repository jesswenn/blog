<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment'];

    //A comment belongs to a post
    public function post()
    {
        // protected $fillable = ['body', 'post_id'];
        //Conected linked in to the Model comment
        return $this->belongsTo(Post::class);
    }

        //A comment also belongs to a user
        public function user()
        {
            return $this->belongsTo(User::class);
        }
        
}
