<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = "Welcome to Laravel";
    	return view('pages.index');
    }

    public function about(){
    	$title = "About";
    	return view('pages.about')->with('title_alt', $title);
     	//Alt:
    	//return view('pages.services', compact('title'));
    }

    public function services(){   
    	$data = array(
    		'title' => 'Services',
    		'services' => ['Web Design', 'Programming', 'SEO']
    	); 	
    	return view('pages.services')->with($data);
    }
}
