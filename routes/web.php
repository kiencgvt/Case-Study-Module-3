<?php

use App\Http\Controllers\FoodController;
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


Route::prefix('/admin')->group(function (){
    Route::get('/home', function (){
        return view('admin.home');
    });
    Route::get('/list', function (){
        return view('admin.users.list');
    });
});

Route::prefix('/collab')->group(function (){
//    return view('collaborators.layouts.master');
    Route::get('/',[FoodController::class,'index'])->name('collab.index');
    Route::get('/create',[FoodController::class,'create'])->name('collab.create');
    Route::post('/create',[FoodController::class,'store'])->name('collab.store');
    Route::get('/{id}/edit',[FoodController::class,'edit'])->name('collab.edit');
    Route::post('/{id}/edit',[FoodController::class,'update'])->name('collab.update');
    Route::get('/{id}/delete',[FoodController::class,'delete'])->name('collab.delete');
});

