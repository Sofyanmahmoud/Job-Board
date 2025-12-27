<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    function index (){
        //gets all data
        $data=Post::all();
        //pass data to view
        return view('post/index',['posts'=>$data ,"pageTitle"=>"blog"]);
    }

    function show($id){
        $post= Post::findOrFail($id);
        return view('post/show' ,['post'=>$post , "pageTitle"=>$post->title]);
    }

    function create(){
        $post=Post::create([
        "title"=>"test2",
        "body"=>"suiii123",
        "published"=>true,
        "author"=>"ali"
        ]);
        return redirect('/blog');
    }
}
