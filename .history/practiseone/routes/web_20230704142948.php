<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/stuffs', function () {
    return 'Hey,Sayar Nay Kaung Lar??';
});

Route::get('aungaung',function(){
    return view('students');
});

Route::get('sayhi', function () {
    return 'Hi Mingalarpar';
});


Route::get('/about/student', function () {
    return redirect('emplyeeblade');
});


Route::get('about/employee/{employee}',function($employee){
    return view('emplyeeblade',['name'=>$employee]);
});