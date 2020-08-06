<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('user', function () {  
  return view('test');
 
 });
Route::get('user/{id}', function ($id) {  
 // return view('test');
 return "user id is=".$id;
});

Route::get('hello', function () {
  return redirect('user');
});

  





// Route::get('test/{id?}', function ($id=121) {
//   //  return view('test');
//   return "id is:".$id;
 
// });