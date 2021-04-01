<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/',[PagesController::class, 'index']);

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/hello', function () {
    //return view('welcome');
    return "<h1>Hello Victor!!!!🤩🤩🤩🤩</h1>";
});

Route::get('/about',[PagesController::class, 'about']);

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/services',[PagesController::class, 'services']);

// Route::get('/services', function () {
//     return view('pages.services');
// });

Route::get('/users/{id}', function ($id) {
    return "This is ". $id;
});


Route::resource('posts', PostsController::class);




Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);


