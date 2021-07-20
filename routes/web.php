<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantController;

use App\Http\Controllers\SearchController;

use App\Http\Controllers\ShopController;
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
Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('login', [AuthController::class, 'showFormLogin'])->name('auth.showFormLogin');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('register', [AuthController::class, 'showFormRegister'])->name('auth.showFormRegister');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');

Route::middleware(['auth', 'checkAdmin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('admin.dashboard');

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'getAllUser'])->name('user.index');
        Route::get('/search', [UserController::class, 'searchUser'])->name('user.search');
        Route::get('/{id}/delete', [UserController::class, 'deleteUser'])->name('user.delete');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'getAllCategory'])->name('category.list');
        Route::get('/add', [CategoryController::class, 'addCategory'])->name('category.add');
        Route::post('/add', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/{id}/edit', [CategoryController::class, 'editCategory'])->name('category.edit');
        Route::post('/{id}/edit', [CategoryController::class, 'updateCategory'])->name('category.update');
        Route::get('/{id}/delete', [CategoryController::class, 'deleteCategory'])->name('category.delete');
        Route::get('/search', [CategoryController::class, 'searchCategory'])->name('category.search');
    });
});


Route::middleware(['auth', 'checkCollab'])->prefix('collab')->group(function () {
    Route::get('/', [FoodController::class, 'index'])->name('collab.index');
    Route::get('/create', [FoodController::class, 'create'])->name('collab.create');
    Route::post('/create', [FoodController::class, 'store'])->name('collab.store');
    Route::get('/{id}/edit', [FoodController::class, 'edit'])->name('collab.edit');
    Route::post('/{id}/edit', [FoodController::class, 'update'])->name('collab.update');
    Route::get('/{id}/delete', [FoodController::class, 'delete'])->name('collab.delete');
    Route::get('/search', [FoodController::class, 'search'])->name('collab.search');

    Route::prefix('/shop')->group(function (){
        Route::get('/',[ShopController::class,'index'])->name('shop.index');

        Route::get('/create',[ShopController::class,'create'])->name('shop.create');
        Route::post('/create',[ShopController::class,'store'])->name('shop.store');

        Route::get('/{id}/edit',[ShopController::class,'edit'])->name('shop.edit');
        Route::post('/{id}/edit',[ShopController::class,'update'])->name('shop.update');
        Route::get('/{id}/delete',[ShopController::class,'delete'])->name('shop.delete');

    });
});

Route::middleware(['auth', 'checkCustomer'])->prefix('customer')->group(function () {
    Route::get('/cart', function () {
        return view('front-end.cart');
    });
});

Route::get('/restaurants/{id}/detail', [RestaurantController::class,'detail'])->name('restau.detail');

Route::get('/search', [SearchController::class, 'showDetail'])->name('search');
