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
Route::get('',[IndexController::class,'index'])->name('homeUser');
// Route::get('/',[IndexController::class,'index'])->middleware('auth');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);



// Route::any('/',[IndexControllerAdmin::class,'index'])->name('admin');

// Route::get('');

Route::get('/infodream',[InfoDreamBookController::class,'index'])->name('infoDreamBook');
Route::get('/infodream/{words}',[InfoDreamBookWordsController::class,'index'])->name('infoDreamBookWords');
Route::get('/words',[WordsController::class,'index'])->name('words');
Route::get('/words/{description}',[WordsDescriptController::class,'index'])->name('wordsDescript');

Route::get('/infohoroscope',[HoroscopeInfoController::class,'index'])->name('horoscopeInfo');
Route::get('/infohoroscope/{description}',[HoroscopeDescriptController::class,'index'])->name('horoscopeDescript');


Route::view('/connection', 'welcome');

// ---МАГАЗИН----
// Route::get('/shop',[ShopController::class,'index'])->name('shop');




