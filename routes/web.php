<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use \App\Http\Controllers\BlogController;
=======

>>>>>>> 33195fe ('Initial')
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

<<<<<<< HEAD
Route::get('/', [BlogController::class, 'index']);
Route::get('/category/{slug}', [BlogController::class, 'getPostsByCategory'])->name('getPostsByCategory');
Route::get('/category/{slug_category}/{slug_post}', [BlogController::class, 'getPost'])->name('getPost');
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 33195fe ('Initial')
