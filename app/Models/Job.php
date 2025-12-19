<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job
{
    public static function all(){
        return[
            ['title'=>'software engineer','salary'=> 2000],
            ['title'=>'civil engineer','salary'=> 1800]
        ];
    }
}
