<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ServiceController;
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

// Route::get('/', function () {
//     return view('admin.index');
// });
Route::get('/',[IndexController::class,'index']);

Route::get('users', [UserController::class, 'index']);
Route::get('editUser/{id}', [UserController::class, 'edit']);
Route::put('updateUser/{id}', [UserController::class, 'update']);
Route::get('/admin/users/add', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/add', [UserController::class, 'store'])->name('admin.users.store');
Route::get('deleteUser/{id}', [UserController::class, 'destroy']);
Route::get('categories',[CategoryController::class,'index']);
Route::get('editcategory/{id}',[CategoryController::class,'edit']);
Route::put('updatecategory/{id}',[CategoryController::class,'update']);
Route::get('/admin/categories/add', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories/add', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('deletecategory/{id}', [CategoryController::class, 'destroy']);

Route::get('services',[ServiceController::class,'index']);
Route::get('editservice/{id}',[ServiceController::class,'edit']);
Route::put('updateservice/{id}',[ServiceController::class,'update']);
Route::get('/admin/services/add', [ServiceController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/add', [ServiceController::class, 'store'])->name('admin.services.store');
Route::get('deleteservice/{id}', [ServiceController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
