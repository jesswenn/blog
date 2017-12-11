<?php
namespace App;
// use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //A comment belongs to a post
    // protected $fillable = ['body', 'post_id'];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
        
    }
        //A comment also belongs to a user
        public function user()
        {
            return $this->belongsTo(User::class);
        }
        
}