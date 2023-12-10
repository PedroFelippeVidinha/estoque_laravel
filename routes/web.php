<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\CategoriesController;

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

    /* Route::get('/categories', [CategoriesController::class, 'indexcategoria'])->name('categorias');
    Route::get('/novacategoria', [CategoriesController::class, 'createcategoria'])->name('novocategoria');
    Route::post('/novacategoria-store', [CategoriesController::class, 'storecategoria'])->name('storecategoria');
    Route::get('/categoria-show/{id}', [CategoriesController::class, 'showCcategoria])->name('showcategoria');
    Route::get('/categoria-edit/{id}', [CategoriesController::class, 'editcategoria'])->name('editcategoria');
    Route::put('/categoria-update/{id}', [CategoriesController::class, 'updatecategoria'])->name('updatecategoria');
    Route::delete('/categoria-delete/{id}', [CategoriesController::class, 'deletecategoria'])->name('deletecategoria'); */


