<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\aungchantharController;
use App\Http\Controllers\blogController;

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
    return view('students');
});


Route::get('about/employee/{employee}/{city}',function($employee,$city){
    return view('emplyeeblade',['name'=>$employee,'ct'=>$city]);
});

Route::redirect('contact','about/student');



Route::get('students',[App\Http\Controllers\studentController::class,'index'])->name('students.index');


Route::get('aungchantharhotel', [App\Http\Controllers\aungchantharController::class, 'index'])->name('index');
Route::get('aungchantharhotel/blog',[App\Http\Controllers\blogController::class,'index'])->name('blog');
Route::get('aungchantharhotel/blog',[App\Http\Controllers\singlepageController::class,'index'])->name('singlepage');