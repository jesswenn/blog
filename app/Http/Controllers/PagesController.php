<?php

namespace App\Http\Controllers;

//Request library to make a request
use Illuminate\Http\Request;

//Function inside of a class its call methodans
// Public means that we can accses 
// from outside the class
class PagesController extends Controller
{
	
	// Links the index page
    public function index(){
        $title = '#my Album';
         return view ('pages.index')->with('title', $title);
    	// return view ('pages.index', compact('title'));

    }

    // Links the about page
    public function about(){
         $title = 'About my album!';
         return view ('pages.about')->with('title', $title);
    	
    }

     // Links the contactpage
    public function contact(){
        // $data = array(
        //     'title' => 'services',
        //     'services' => ['Webdesign', 'Frontend', 'SEO']
        // );
    	$title = 'Contact us';
        return view ('pages.contact')->with('title', $title);
    }
}
