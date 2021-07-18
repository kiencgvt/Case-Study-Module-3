<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('front-end.home');
});

Route::prefix('/collab')->group(function (){
//    return view('collaborators.layouts.master');
    Route::get('/',[FoodController::class,'index'])->name('collab.index');
    Route::get('/create',[FoodController::class,'create'])->name('collab.create');
    Route::post('/create',[FoodController::class,'store'])->name('collab.store');
    Route::get('/{id}/edit',[FoodController::class,'edit'])->name('collab.edit');
    Route::post('/{id}/edit',[FoodController::class,'update'])->name('collab.update');
    Route::get('/{id}/delete',[FoodController::class,'delete'])->name('collab.delete');
    Route::get('/search',[FoodController::class,'search'])->name('collab.search');
});

Route::prefix('user')->group(function (){
    Route::get('/',[UserController::class,'getAllUser'])->name('user.index');
    Route::get('/search',[UserController::class,'searchUser'])->name('user.search');
    Route::get('/{id}/delete',[UserController::class,'deleteUser'])->name('user.delete');
});
Route::prefix('category')->group(function (){

    Route::get('/list',[CategoryController::class,'getAllCategory'])->name('category.list');
    Route::get('/add',[CategoryController::class,'addCategory'])->name('category.add');
    Route::post('/add',[CategoryController::class,'store'])->name('category.store');
    Route::get('/{id}/edit',[CategoryController::class,'editCategory'])->name('category.edit');
    Route::post('/{id}/edit',[CategoryController::class,'updateCategory'])->name('category.update');
    Route::get('/{id}/delete',[CategoryController::class,'deleteCategory'])->name('category.delete');
    Route::get('/search',[CategoryController::class,'searchCategory'])->name('category.search');

    Route::get('list',[CategoryController::class,'getAllCategory'])->name('category.list');

});
