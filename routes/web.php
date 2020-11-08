<?php
use App\Http\Controllers\Fontend\IndexController;
use App\Http\Controllers\User\UserController;
Use App\Http\Controllers\Admin\AdminController;
Use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class,'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ====================================== Admin Routes =====================================
Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'Admin'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    //profile
    Route::get('profile',[AdminController::class,'profile'])->name('profile');
    Route::post('update/info',[AdminController::class,'updateInfo'])->name('update-data');
    Route::get('update/image-page',[AdminController::class,'updateImgPage'])->name('admin-image');
    Route::post('image/store',[AdminController::class,'imgStore'])->name('store-image');
    Route::get('change-password',[AdminController::class,'changePass'])->name('change-password');
    Route::post('change-password-store',[AdminController::class,'changePassStore'])->name('change-password-store');
    Route::get('all-brands',[BrandController::class,'index'])->name('brands');
});

// ====================================== User Routes =====================================
Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'User'], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::post('update/data',[UserController::class,'updateData'])->name('update-profile');
    Route::get('image',[UserController::class,'imagePage'])->name('user-image');
    Route::post('update/image',[UserController::class,'updateImage'])->name('update-image');
    Route::get('update/password',[UserController::class,'updatePassPage'])->name('update-password');
    Route::post('store/password',[UserController::class,'storePassword'])->name('password-store');
});

// ====================================== Fontend Routes =====================================

