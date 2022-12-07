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

Route::get('/', ['App\Http\Controllers\HomeController', 'getAllBooks']);
Route::get('/Contact', ['App\Http\Controllers\HomeController', 'Contact']);
Route::get('/category/{category}', ['App\Http\Controllers\CategoryController', 'getBooksByCategory']);
Route::get('/detail/{book}', ['App\Http\Controllers\BookController', 'getDetail']);
Route::get('/Publisher', ['App\Http\Controllers\PublisherController', 'getAllPublisher']);
Route::get('/enter/{publish}', ['App\Http\Controllers\PublisherController', 'getDetail']);
