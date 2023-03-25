<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
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

Route::get('/index', function () {
    return view('index');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/acercade', function () {
    return view('acercade');
});
Route::get('/category', [categoryController::class, 'show']);

Route::get('/category/{category_id}', [categoryController::class, 'showService'])->name('show.service');

//AdminCRUD
Route::get('/tasks',[categoryController::class,'categoryAdmin']);
Route::post('/tasks',[categoryController::class,'storeCategory']);

//ADMIN




