<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showWelcome(){
        return view('testviews.blog');

    }
    public function showHome(string $id){
        if($id)
        {
        return view('testviews.my-first-controller-view',['id' => $id]);
    }
    else {
        echo "no paramenter paased";
    }

    }

    public function showBlog(){

        return view('testviews.blog');
    }

    public function showNextBlog(){

        return view('testviews.next_blog');
    }

    
}
