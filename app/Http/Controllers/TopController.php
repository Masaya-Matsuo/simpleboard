<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TopController extends Controller
{
    
    public function top(){
        $posts = Post::get();
        return view('components.top',['posts'=>$posts]);
    }
    
    
    
    
}

