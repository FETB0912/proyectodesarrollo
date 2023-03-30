<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

//login-register
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TarjetaController;
//



//use App\Http\Controllers\pruebaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index']);


Route::get('/service', function () {
    return view('service');
});

//tarjeta
//Route::get('/', [TarjetaController::class, 'index']);

Route::get('/acercade', function () {
    return view('acercade');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/fundadores', function () {
    return view('fundadores');
});

Route::get('/category', [categoryController::class, 'show']);

Route::get('/services/{category_id}', [categoryController::class,'servicesByCategory']);

Route::get('/category/{category_id}', [categoryController::class, 'showService'])->name('show.service');


//login-register
//register
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);


//login
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);


//home
Route::get('/home', [HomeController::class, 'index']);


//logout
Route::get('/logout', [LogoutController::class, 'logout']);


//FERNANDO ENRIQUE TORRES CRUD
//TODO HACERCA DE CATEGORIES

Route::get('/add-category', [categoryController::class, 'addCategory']);

Route::post('/add-category',[categoryController::class, 'storeCategory'])->name('category.store');

Route::get('/all-categories', [categoryController::class, 'categories']);

Route::get('/edit-category/{category_id}', [categoryController::class, 'editCategory']);

Route::post('/edit-category',[categoryController::class, 'updateCategory'])->name('category.update');

Route::get('/delete-category/{category_id}', [categoryController::class, 'deleteCategory']);
