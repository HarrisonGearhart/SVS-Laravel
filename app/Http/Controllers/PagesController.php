<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
//Index Method linking to index page
{
    public function index(){
        return view('pages.index');
    }
//About Method linking to about page
    public function about(){
        return view('pages.about');
    }
//Services Method
    public function services(){
        return view('pages.services');
    }
}