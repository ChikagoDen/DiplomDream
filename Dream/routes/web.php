<?php

use App\Http\Controllers\Admin\IndexControllerAdmin;
use App\Http\Controllers\User\IndexController;
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

Route::get('/',[IndexController::class,'index'])->name('index');
// Route::get('/',[IndexController::class,'index'])->middleware('auth');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);



// Route::any('/',[IndexControllerAdmin::class,'index'])->name('admin');