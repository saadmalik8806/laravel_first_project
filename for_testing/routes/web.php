<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
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
Route::get('/home' , [BaseController::class, 'home']);
Route::get('/contact' , [BaseController::class, 'contact']);
Route::get('/about' , [BaseController::class, 'about']);
Route::get('/blog' , [BaseController::class, 'blog']);
Route::get('/singlePost' , [BaseController::class, 'singlePost']);
Route::get('/singleProject' , [BaseController::class, 'singleProject']);