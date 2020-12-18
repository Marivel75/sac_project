<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController:: class, 'show']);

Route::get('/sports', [SportController::class, 'index']);
Route::get('/sports/{id}', [SportController::class, 'show']);

Route::get('/about-us', AboutUsController::class);
Route::get('/children', ChildrenController::class);
Route::get('/Food_And_Drink', BarController::class);
Route::get('/members', MembersController::class);

Route::get('contact', function() {
  return view('staticViews.contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/marble', function() {
  return view('layouts.app');
});


Route::get('/resize-image', [ImageController::class, 'resizeImage']);
Route::post('/resize-image', [ImageController::class, 'resizeImageSubmit'])->name('image.resize');
