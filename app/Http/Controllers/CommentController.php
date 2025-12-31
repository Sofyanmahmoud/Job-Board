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
        return view('comment/index',['comments'=>$data ,"pageTitle"=>"comments"]);
    }

    function create(){
        Comment::create([
            "author"=>"ali",
            "content"=>"test 33 comment",
            "post_id"=> 3
        ]);
        return redirect('/comments');
    }
}
