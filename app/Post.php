<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
	protected $table = 'posts';

	// Primary key field
	public $primaryKey = 'id';

	// Timestamps
	public $timestamps = true;

	// Add relaton betwenn blogpost and the user
	// so we see the current users post in dashboard
	// a single post belongs to a user
	public function user(){
		return $this->belongsTo('App\User');
	}

	public function comments(){
		return $this->hasMany(Comment::class);
	}
}
