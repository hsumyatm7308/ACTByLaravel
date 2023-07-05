<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singlepageController extends Controller
{
    public function single(){
        return view('aungchantharhotel/blog/singlelayout');
    }
}
