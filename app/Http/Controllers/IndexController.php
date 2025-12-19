<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
     function index(){
        return view("Index");
    }

     function about(){
        return view("about", ["pageTitle"=>'about']);
    }

     function contact(){
        return view("contact", ["pageTitle"=>'contact']);
    }

}
