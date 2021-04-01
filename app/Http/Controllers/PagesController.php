<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel!';
        //return view('pages.index')->with('title', $title);
        //This is an alternative way
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'Welcome To Laravel About Page!';
        //return view('pages.about')->with('title', $title);
        //This is an alternative way
        return view('pages.about', compact('title'));
    }
    public function services(){
        $data = array(
            'title' => 'Welcome To Services Page',
            'services' => ['Web design', 'Programming', 'SEO']
        );

        return view('pages.services')->with($data);

    }
}
