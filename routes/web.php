<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Services_UserController;

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
ROUTE::get('user-profile',[ProfileController::class,'index']);
Route::post('/user-profile-update', [ProfileController::class, 'update'])->name('users.edit');

Route::get('services',[ServiceController::class,'index']);
Route::get('editservice/{id}',[ServiceController::class,'edit']);
Route::put('updateservice/{id}',[ServiceController::class,'update']);
Route::get('/admin/services/add', [ServiceController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/add', [ServiceController::class, 'store'])->name('admin.services.store');
Route::get('deleteservice/{id}', [ServiceController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('layouts.index');
});


Route::get('/about-us', function () {
    return view('layouts.about-us');
});

Route::get('/services', function () {
    return view('layouts.services');
});

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
Route::post('/contact-store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact-store');
Route::get('/details',[ServiceController::class, 'index']);
Route::get('/homeclean', function () {
    return view('layouts.homeclean');
});
Route::get('/car', function () {
    return view('layouts.car');
});

Route::get('/maintenance', function () {
    return view('layouts.maintenance');
});

Route::get('/baby', function () {
    return view('layouts.baby');
});
Route::get('/lessons', function () {
    return view('layouts.lessons');
});

Route::get('/book', [App\Http\Controllers\Services_UserController::class, 'index']);
Route::post('/book', [App\Http\Controllers\Services_UserController::class, 'store'])->name('book.store');
Route::get('/profile', function () {
    return view('layouts.profile');
});

Route::get('/single', function () {
    return view('layouts.single');
});
