<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

// use App\Http\Controllers\SpaceController;

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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/usuarios', [UserController::class, 'indexuser'])->name('user.index');
Route::get('/usuario-show/{id}', [UserController::class, 'showuser'])->name('user.show');
Route::get('/usuario-edit/{id}', [UserController::class, 'edituser'])->name('user.edit');
Route::put('/usuario-update/{id}', [UserController::class, 'updateuser'])->name('user.update');
Route::delete('/usuario-delete/{id}', [UserController::class, 'deleteuser'])->name('user.delete');

Route::get('/categorias', [CategoryController::class, 'indexcategory'])->name('category.index');
Route::get('/novacategoria', [CategoryController::class, 'create'])->name('category.create');
Route::post('/novacategoria-store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categoria-show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/categoria-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categoria-update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categoria-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

/* Route::get('/espacos', [SpaceController::class, 'indexspace'])->name('space.index');
Route::get('/novoespaco', [SpaceController::class, 'create'])->name('space.create');
Route::post('/novoespaco-store', [SpaceController::class, 'store'])->name('space.store');
Route::get('/espaco-show/{id}', [SpaceController::class, 'show'])->name('space.show');
Route::get('/espaco-edit/{id}', [SpaceController::class, 'edit'])->name('space.edit');
Route::put('/espaco-update/{id}', [SpaceController::class, 'update'])->name('space.update');
Route::delete('/espaco-delete/{id}', [SpaceController::class, 'delete'])->name('space.delete'); */


// Rotas temporarias
Route::get("/create-user", function () {
    $registerUrl = "store-user";
    return view('auth.register', compact('registerUrl'));
});

Route::post('/store', [UserController::class, 'store'])->name('store-user');
