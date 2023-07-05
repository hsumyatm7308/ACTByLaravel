<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    function post(){
        return view('aungchantharhotel/blog/singlelayout/post/fstpost');
    }
}
