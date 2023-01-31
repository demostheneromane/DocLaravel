<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$title = 'Mon super titre avec with';
       // $title2 = 'Mon super titre 2';
       $posts = [
         'mon super premier titre', 
         'mon super second titre'

       ];

       // return view('articles',compact('title'));
       /*return view('articles', [
        'title' => $title, 
        'title2' => $title2
       ]);*/ 

       return view('articles',compact('posts'));
    }
}
