<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotificationController;


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

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login_data', [UserController::class, 'login_data'])->name('login_data');
Route::get('/send-email', [MailController::class, 'sendEmail']);

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('home', [GalleryController::class, 'index']);
    Route::get('logout', [UserController::class, 'logout']);
});

Route::group(['middleware' => ['auth', 'user']], function () {
    
    Route::get('home', [GalleryController::class, 'index']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('list', [GalleryController::class, 'show']);
    Route::get('main', [WebController::class, 'webpage']);
    Route::post('register', [GalleryController::class, 'insert']);
    Route::get('form', [GalleryController::class, 'view']);
    Route::get('edit/{id}', [GalleryController::class, 'edit']);
    Route::get('delete/{id}', [GalleryController::class, 'delete']);
    Route::post('update', [GalleryController::class, 'update']);
    Route::get('image/{id}', [GalleryController::class, 'relation']);
    Route::get('download/{id}', [GalleryController::class, 'download']);
    // Route::get('image/{id}',[WebController::class,'relation']);
    Route::get('add/{id}', [BlogController::class, 'create']);
    Route::post('reg', [BlogController::class, 'store']);
    Route::get('edit1/{id}', [BlogController::class, 'show']);
    Route::get('edit2/{id}', [BlogController::class, 'edit2']);
    Route::post('update1', [BlogController::class, 'update']);
    Route::get('delete1/{id}', [BlogController::class, 'destroy']);
    Route::get('notify', [NotificationController::class, 'store'])->name('notify');
});
// Route::get('image/{id}',[GalleryController::class,'relation']);
// Route::get('blog',[WebController::class,'webpage']);