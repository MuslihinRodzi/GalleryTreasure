<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get(); //get the first record from database

        return view('welcome', ['posts'=>$posts]);
    }
    public function about(Post $post){
    // Route model binding

        return view('about', ['post'=>$post]); 
    }
    public function quote(Post $post){
        // Route model binding
    
            return view('quote', ['post'=>$post]); 
        }
}
