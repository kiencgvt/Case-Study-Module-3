<?php

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
});

Route::get('/collab', function () {
    return view('collaborators.layouts.master');
});
Route::prefix('user')->group(function (){
    Route::get('list',[\App\Http\Controllers\UserController::class,'getAllUser'])->name('user.list');
    Route::get('search',[\App\Http\Controllers\UserController::class,'searchUser'])->name('user.search');
    Route::get('{id}/delete',[\App\Http\Controllers\UserController::class,'searchUser'])->name('user.delete');
});
