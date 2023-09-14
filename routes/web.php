<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
    return view('main');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/blog/blog', [MyController::class, 'index']);
Route::get('/blog/profile/{id}', [MyController::class, 'show']);

Route::get('/post', [postController::class, 'index']);

//  
Route::get('/createPost', [postController::class, 'createPost']);
Route::post('/post', [postController::class, 'store']);

//read
Route::get('/post/{id}', [postController::class, 'show']);

//edit or update
Route::get('/post/{id}/editPost', [postController::class, 'edit']);
Route::put('/post/{id}', [postController::class, 'update']);

//delete
Route::delete('/post/{id}', [postController::class, 'delete']);
