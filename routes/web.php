<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ChaletController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\UserController;

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
Route::get('/', [UserController::class, 'index'])->name('home');


Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // route house
    Route::get('', [HomeController::class, 'showAll'])->name('admin');
    Route::get('/houses', [HomeController::class, 'index'])->name('admin.houses');
    Route::get('/house/create', [HomeController::class, 'create'])->name('admin.house.create');
    Route::post('/house/store', [HomeController::class, 'store'])->name('admin.house.store');
    Route::get('/house/show/{id}', [HomeController::class, 'show'])->name('admin.house.show');
    Route::get('/house/edit/{id}', [HomeController::class, 'edit'])->name('admin.house.edit');
    Route::match(['get', 'post'], '/house/update/{id}', [HomeController::class, 'update'])->name('admin.house.update');
    Route::get('/house/delete/{id}', [HomeController::class, 'destroy'])->name('admin.house.destroy');
    // route store
    Route::get('/stores', [StoreController::class, 'index'])->name('admin.stores');
    Route::get('/store/create', [StoreController::class, 'create'])->name('admin.store.create');
    Route::post('/store/store', [StoreController::class, 'store'])->name('admin.store.store');
    Route::get('/store/show/{id}', [StoreController::class, 'show'])->name('admin.store.show');
    Route::get('/store/edit/{id}', [StoreController::class, 'edit'])->name('admin.store.edit');
    Route::match(['get', 'post'], '/store/update/{id}', [StoreController::class, 'apdate'])->name('admin.store.update');
    Route::get('/store/delete/{id}', [StoreController::class, 'destroy'])->name('admin.store.destroy');
    // route chalet
    Route::get('/chalets', [ChaletController::class, 'index'])->name('admin.chalets');
    Route::get('/chalet/create', [ChaletController::class, 'create'])->name('admin.chalet.create');
    Route::post('/chalet/store', [ChaletController::class, 'store'])->name('admin.chalet.store');
    Route::post('/chalet/show/{id}', [ChaletController::class, 'show'])->name('admin.chalet.show');
    Route::get('/chalet/edit/{id}', [ChaletController::class, 'edit'])->name('admin.chalet.edit');
    Route::match(['get', 'post'], '/chalet/update/{id}', [ChaletController::class, 'apdate'])->name('admin.chalet.update');
    Route::get('/chalet/delete/{id}', [ChaletController::class, 'destroy'])->name('admin.chalet.destroy');
    // route user
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/user/create', [UsersController::class, 'create'])->name('admin.users.create');
    Route::post('/user/store', [UsersController::class, 'store'])->name('admin.users.store');
    Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::match(['get', 'post'], '/user/update/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::get('/user/delete/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');



    Route::get('/trached', [HomeController::class, 'trached'])->name('admin.trached');
});


Route::get('/home', [UserController::class, 'index'])->name('home');
