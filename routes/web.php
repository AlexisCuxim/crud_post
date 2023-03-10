<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;

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


Route::resource('post', PostController::class);

//Todas estas lineas de codigo de simplifican en una ruta tipo "resource"
// Route::get('post',[PostController::class, 'index']);
// Route::get('post/create', [PostController::class, 'create']);
// Route::get('post/{post}', [PostController::class, 'show']);
// Route::get('post/{post}/edit', [PostController::class, 'edit']);

// Route::post('post', [PostController::class, 'store']);
// Route::put('post/{post}', [PostController::class, 'update']);
// Route::delete('post/{post}', [PostController::class, 'destroy']);





