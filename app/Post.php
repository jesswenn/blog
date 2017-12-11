<?php
namespace App;
// use Illuminate\Database\Eloquent\Model;
use Carbon;

class Post extends Model
{
   
    public function comments()
    {
        // One post can have many commnets here we specify and returns this
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        // $this->comments()->create();
        $this->comments()->create(compact('body'));
    }


    public function scopeFilter($query, $filters)
    {
        // If we have requests month
        // created_at are instanses of carbon
        // then we can use the built in whereMonth helper function in laravels builder class
        // if thats not null filter it down
        if($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        // same request for the year
        if($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
        // $posts = $posts->get();

    }
        
   //A comment also belongs to a user
   public function user()
   {
        // $comment->post->user 
        //comment give me the post, that belongs to the user
       return $this->belongsTo(User::class);
       
   }

    // Static Archives method?
    // thats returns our query
    public static function archives()
    {
    return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at)desc')
        ->get()
        ->toArray();
    }
    
    // Table name
    protected $table = 'posts';
    // Primary key field
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}