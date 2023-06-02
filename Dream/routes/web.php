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

Route::get('/',[IndexController::class,'index'])->name('homeUser');


// Route::any('/',[IndexControllerAdmin::class,'index'])->name('admin');
// просмотр сонников
Route::get('/infodream',[DreamBooksController::class,'show'])->name('infoDreamBook');
Route::get('/infodreamAll',[DreamBooksAllController::class,'showAll'])->name('infoDreamBooksAll');
// все сны пользователей
Route::get('/dreamUserAll',[DreamBooksMyAllController::class,'index'])->name('dreamBooksUserAll');
Route::post('/dreamUserAll',[DreamBooksMyAllController::class,'coment'])->name('dreamBooksUserAllComent');
// Route::match(['get', 'post'],'/dreamUserAll',[DreamBooksMyAllController::class,'index'])->name('dreamBooksUserAll');
Route::post('/dreamUserPublished', [DreamBooksMyAllController::class,'showDreamUser'])->name('dreamBooksUserAllPublished');
// сны пользователя
// групировка по контроллеру
Route::controller(DreamBooksMyController::class)->group( function(){
    Route::get('/dreamUser', 'index')->name('dreamBooksUser');
    Route::post('/dreamUserAddDream','addDream')->name('dreamBooksUserAddDream');
    Route::post('/dreamUserUpdateName', 'updateName')->name('dreamBooksUserUpdateName');
});
// поиск по слову
Route::get('/words',[DreamBooksWordsController::class, 'index'])->name('infoDreamBooksWord');

// Администратирование

    Route::get('/admin',[IndexControllerAdmin::class,'index'])->middleware('verified')->name('index');

// ->middleware('verified');
// Route::middleware(['web'])->group(function () {
//     //
// });


// Route::prefix('admin')->group(function () {
//     Route::get('/infodream', function () {
//         // Соответствует URL-адресу `/admin/users` ...
//     });
// });
// Route::name('admin.')->group(function () {
//     Route::get('/infodream', function () {
//         // Маршруту присвоено имя `admin.infodream` ...
//     })->name('infodream');
// });

// Route::get('/infodream/{words}',[InfoDreamBookWordsController::class,'index'])->name('infoDreamBookWords');
// Route::get('/words',[WordsController::class,'index'])->name('words');
// Route::get('/words/{description}',[WordsDescriptController::class,'index'])->name('wordsDescript');

// для гороскопа
// Route::get('/infohoroscope',[HoroscopeInfoController::class,'index'])->name('horoscopeInfo');
// Route::get('/infohoroscope/{description}',[HoroscopeDescriptController::class,'index'])->name('horoscopeDescript');


Route::view('/connection', 'welcome');

// ---МАГАЗИН----
// Route::get('/shop',[ShopController::class,'index'])->name('shop');

