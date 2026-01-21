<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
//Index Method linking to index page
{
    public function index(){
        //passing in $title to pages/index.blade.php
        $title = 'Welcome to Laravel!';
        return view('pages.index', compact('title'));
        //alternative method to pass in $title in the line below
        //return view('pages.index')->with('title, $title')
    }
//About Method linking to about page
    public function about(){
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }
//Services Method
    public function services(){
        //creating $data array to pass 'title' and 'services'
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services', $data);
    }
}