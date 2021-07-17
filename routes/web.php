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
    Route::get('/list', function (){
        return view('admin.users.list');
    });
});

Route::get('/collab', function () {
    return view('collaborators.layouts.master');
});
