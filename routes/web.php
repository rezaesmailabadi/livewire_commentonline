<?php

use App\Http\Middleware\CheckTime;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\LivewireController;




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

// Auth::routes();
// Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('check_time')->name('home');
// 
// Route::get('/not-available-now', [App\Http\Controllers\HomeController::class, 'index'])->name('not-avaliable-now');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/product', [ProductController::class, 'index']);



Route::get('/', [LivewireController::class, 'index']);


// Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');



// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


// Route::get('login', function () {
//     return response()->json(['message' => 'Unauthorized.'], 401);
// });

// Route::post('login', ['as' => 'login']);


// Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);