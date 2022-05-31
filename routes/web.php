<?php

use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'homepage']);
Route::get('/booklist/{idx}', [BookController::class, 'booklist']);
// Route::get('/bookdetail/{idx}', [BookController::class, 'bookdetail']);
Route::get('/bookdetail/{idx}', [BookController::class, 'bookdetail'])->name('detailss');
Route::get('/contact', function () { return view('contact'); });