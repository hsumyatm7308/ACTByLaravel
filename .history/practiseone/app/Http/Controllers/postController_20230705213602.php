<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    function postone(){
        return view('aungchantharhotel/blog/singlelayout/fstpost');
    }

    function posttwo(){
        return view('aungchantharhotel/blog/singlelayout/secpost');
    }
}
