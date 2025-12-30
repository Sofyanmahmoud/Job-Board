<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    function index (){
        //gets all data
        $data=Comment::all();
        //pass data to view
        return view('comment/index',['Comments'=>$data ,"pageTitle"=>"blog"]);
    }

    function show($id){
        $Comment= Comment::findOrFail($id);
        return view('comment/show' ,['Comment'=>$Comment , "pageTitle"=>$Comment->title]);
    }

    function create(){
        $Comment=Comment::create([
        "title"=>"test2",
        "body"=>"suiii123",
        "published"=>true,
        "author"=>"ali"
        ]);
        return redirect('/blog');
    }
}
