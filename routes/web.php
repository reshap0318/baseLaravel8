<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{
    HomeController,
    Management\RoleController,
    Management\UserController,
    Management\categoryApplicationController
};

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.dashboard');

    Route::group(['prefix' => 'role'], function () {
        Route::get('', [RoleController::class, 'index'])->name('roles.index');
        Route::get('/datas', [RoleController::class, 'datas']);
        Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('/create', [RoleController::class, 'store'])->name('roles.store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
        Route::patch('/edit/{id}', [RoleController::class, 'update'])->name('roles.update');
        Route::delete('/delete/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('', [UserController::class, 'index'])->name('users.index');
        Route::get('/datas', [UserController::class, 'datas']);
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/create', [UserController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::patch('/edit/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    Route::group(['prefix' => 'category-application'], function () {
        Route::get('', [categoryApplicationController::class, 'index'])->name('category-application.index');
        Route::get('/datas', [categoryApplicationController::class, 'datas']);
        Route::get('/create', [categoryApplicationController::class, 'create'])->name('category-application.create');
        Route::post('/create', [categoryApplicationController::class, 'store'])->name('category-application.store');
        Route::get('/edit/{id}', [categoryApplicationController::class, 'edit'])->name('category-application.edit');
        Route::patch('/edit/{id}', [categoryApplicationController::class, 'update'])->name('category-application.update');
        Route::delete('/delete/{id}', [categoryApplicationController::class, 'destroy'])->name('category-application.destroy');
    });
});
