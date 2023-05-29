<?php

use App\Http\Controllers\Admin\IndexControllerAdmin;
use App\Http\Controllers\User\AppController;
use App\Http\Controllers\User\DreamBooks\DreamBooksAllController;
use App\Http\Controllers\User\DreamBooks\DreamBooksController;
use App\Http\Controllers\User\DreamBooks\DreamBooksMyAllController;
use App\Http\Controllers\User\DreamBooks\DreamBooksMyController;
use App\Http\Controllers\User\DreamBooks\DreamBooksWordsController;
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

Route::get('/dashboard', [AppController::class, 'index'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[IndexController::class,'index'])->name('homeUser');


// Route::any('/',[IndexControllerAdmin::class,'index'])->name('admin');
// просмотр сонников
Route::get('/infodream',[DreamBooksController::class,'show'])->name('infoDreamBook');
Route::get('/infodreamAll',[DreamBooksAllController::class,'showAll'])->name('infoDreamBooksAll');
// все сны пользователей
Route::get('/dreamUserAll',[DreamBooksMyAllController::class,'index'])->name('dreamBooksUserAll');
Route::post('/dreamUserAll',[DreamBooksMyAllController::class,'coment'])->name('dreamBooksUserAllComent');

// сны пользователя
Route::get('/dreamUser', [DreamBooksMyController::class,'index'])->name('dreamBooksUser');
// поиск по слову
Route::get('/words',[DreamBooksWordsController::class, 'index'])->name('infoDreamBooksWord');



// Route::get('/infodream/{words}',[InfoDreamBookWordsController::class,'index'])->name('infoDreamBookWords');
// Route::get('/words',[WordsController::class,'index'])->name('words');
Route::get('/words/{description}',[WordsDescriptController::class,'index'])->name('wordsDescript');

Route::get('/infohoroscope',[HoroscopeInfoController::class,'index'])->name('horoscopeInfo');
Route::get('/infohoroscope/{description}',[HoroscopeDescriptController::class,'index'])->name('horoscopeDescript');


Route::view('/connection', 'welcome');

// ---МАГАЗИН----
// Route::get('/shop',[ShopController::class,'index'])->name('shop');

