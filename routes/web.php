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



// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/index',function(){
//     return view('home');
// });

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/post/{page?}/{name?}',function($page = null, $name = null){
//     if($page AND $name){
//         return "<h1>$name Page: $page</h1> ";
//     }else{
//         return "<h1>Page Not Found</h1> ";
//     }
// });

// Route::get('/product/{id}', function($id){
//     return "<h1>ID Number: $id</h1>";
// })->whereAlphaNumeric('id');

Route::get('/',function(){
    return view('index');
});

Route::get('/product',function(){
    return view('product');
});

Route::get('/contact',function(){
    return view('contact');
});

