<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

   
    class PostsController extends Controller
{
        
        public function index()
        {
            # code...
            $posts = \App\Post::all();
            return view('posts.index',compact('posts'));
        }
   

    public function show($id)
        {
            $post = \App\Post::find($id);
            return view('posts.show')->with('post',$post);
        }




 }