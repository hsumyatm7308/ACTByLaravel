<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singlepageController extends Controller
{
    public function index(){
        return view('aungchantharhotel/blog/single');
    }
}
