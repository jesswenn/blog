<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
        
         public function store(Request $request)
        {
            return $this->belongsTo(User::class);
        }
}
