<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('posts.welcome');
    }

    public function about(){
    	$data  = 
    	[
    		'title'=>'About'
    	];
    	return view('Pages.about')->with($data);
    }

    public function services(){
    	$data  = 
    	[
    		'title'=>'Services',
    		'services' => ['PHP','Web','Android']
    	];
    	return view('Pages.services')->with($data);
    }
}
