<?php

use App\Http\Controllers\Admin\IndexControllerAdmin;
use App\Http\Controllers\Admin\Library\BibliotecaTablController;
use App\Http\Controllers\Admin\Library\DreambookController;
use App\Http\Controllers\Admin\User\CommentTableController;
use App\Http\Controllers\Admin\User\DreamUser\DreamUserTableController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\User\AppController;
use App\Http\Controllers\User\DreamBooks\DreamBooksAllController;
use App\Http\Controllers\User\DreamBooks\DreamBooksController;
use App\Http\Controllers\User\DreamBooks\DreamBooksMyAllController;
use App\Http\Controllers\User\DreamBooks\DreamBooksMyController;
use App\Http\Controllers\User\DreamBooks\DreamBooksWordsController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\Shop\ShopController;
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
Route::post('/dreamUserAll',[DreamBooksMyAllController::class,'coment'])->middleware(['auth'])->name('dreamBooksUserAllComent');
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
    Route::get('/adminCreateDreamBook',[BibliotecaTablController::class,'createDreamBook'])->middleware('checkIsAdmin')->name('addDreamBook');
    // добавление файла   
    Route::post('/adminCreateDreamBook',[BibliotecaTablController::class,'addFile'])->middleware('checkIsAdmin')->name('addFile'); 
    //добавление в бд  
    Route::post('/adminAddBD',[BibliotecaTablController::class,'addBD'])->middleware('checkIsAdmin')->name('addBD');
 // падает сюда - редактирование сонника
    Route::get('admin/InfoDreamBook',[DreambookController::class,'infoDreamModeration'])->middleware('checkIsAdmin')->name('infoDreamModeration');
    // редакт сонников
    Route::post('admin/InfoDreamBook',[DreambookController::class,'editDreamBook'])->middleware('checkIsAdmin')->name('editDreamBook');
 // редактирование слов и значений
    Route::post('admin/adminWordEdit',[DreambookController::class,'editWordDreamBook'])->middleware('checkIsAdmin')->name('editWordDreamBook');
 // редакт юзера
    Route::get('admin/editUser',[UserController::class,'infoUserAdmin'])->middleware('checkIsAdmin')->name('infoUserAdmin');
    Route::post('admin/editUser',[UserController::class,'editUserAdmin'])->middleware('checkIsAdmin')->name('editUserAdmin');
 // редакт снов пользователей 
    Route::get('admin/editDreamUser',[DreamUserTableController::class,'infoDreamUser'])->middleware('checkIsAdmin')->name('infoDreamUser');
    Route::post('admin/editDreamUser',[DreamUserTableController::class,'editDreamUser'])->middleware('checkIsAdmin')->name('editDreamUser'); 
    // модерация коментов
    Route::get('admin/editCommentUser',[CommentTableController::class,'infoCommentUser'])->middleware('checkIsAdmin')->name('infoCommentUser');
    Route::post('admin/editCommentUser',[CommentTableController::class,'editCommentUser'])->middleware('checkIsAdmin')->name('editCommentUser');     

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


// Route::view('/connection', 'welcome');

// ---МАГАЗИН----
Route::get('/shop',[ShopController::class,'index'])->name('shop');

