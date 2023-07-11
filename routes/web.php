<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\SingleController;
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

// Route::get('/',function(){
//     return view('index');
// });

// Route::get('/product',function(){
//     return view('product');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });

// Basic Controller 
Route::get('/',[BasicController::class, 'index']);
Route::get('/product',[BasicController::class, 'product']);
Route::get('/contact',[BasicController::class, 'contact']);
// insert 
Route::post('/contact',[BasicController::class, 'register']);
// fetch 
Route::get('/users', [BasicController::class, 'users']);
// delete 
Route::get('/delete/{id}', [BasicController::class, 'delete']);

// Single Action Controller 
// Route::get('/product', SingleController::class);

// Route::resource('/photos', PhotoController::class);