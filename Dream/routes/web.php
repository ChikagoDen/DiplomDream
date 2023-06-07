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

    Route::get('/admin',[IndexControllerAdmin::class,'index'])->middleware('checkIsAdmin')->name('indexAdmin');
  // добавление сонника в бд    
    // добавление файла
    Route::get('/adminAddDreamBook',[IndexControllerAdmin::class,'addDreamBook'])->name('addDreamBook');
    Route::post('/adminAddDreamBook',[IndexControllerAdmin::class,'addFile'])->name('addFile');
    // добавление сонника в бд
    Route::post('/adminAddBD',[IndexControllerAdmin::class,'addBD'])->name('addBD');
 // падает сюда - редактирование сонника
    Route::get('admin/InfoDreamBook',[IndexControllerAdmin::class,'infoDreamModeration'])->name('infoDreamModeration');
    // редакт сонников
    Route::post('admin/InfoDreamBook',[IndexControllerAdmin::class,'editDreamBook'])->name('editDreamBook');
 // редактирование слов и значений
    Route::post('admin/adminWordEdit',[IndexControllerAdmin::class,'editWordDreamBook'])->name('editWordDreamBook');
 // редакт юзера
    Route::get('admin/editUser',[IndexControllerAdmin::class,'infoUserAdmin'])->name('infoUserAdmin');
    Route::post('admin/editUser',[IndexControllerAdmin::class,'editUserAdmin'])->name('editUserAdmin');
 // редакт снов пользователей 
    Route::get('admin/editDreamUser',[IndexControllerAdmin::class,'infoDreamUser'])->name('infoDreamUser');
    Route::post('admin/editDreamUser',[IndexControllerAdmin::class,'editDreamUser'])->name('editDreamUser'); 
    // модерация коментов
    Route::get('admin/editCommentUser',[IndexControllerAdmin::class,'infoCommentUser'])->name('infoCommentUser');
    Route::post('admin/editCommentUser',[IndexControllerAdmin::class,'editCommentUser'])->name('editCommentUser');     

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

