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

    Route::group(['namespace' => 'App\Http\Livewire'], function () {
        Route::group(['prefix' => 'roles'], function () {
            Route::get('/', Role\Index::class)->name('roles.index');
            Route::get('/create', Role\Create::class)->name('roles.create');
            Route::get('/edit/{id}', Role\Edit::class)->name('roles.edit');
        });
    });




    

    Route::group(['prefix' => 'roles'], function () {
        Route::get('/datas', [RoleController::class, 'datas']);
        Route::post('/create', [RoleController::class, 'store'])->name('roles.store');
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
});

Auth::routes();
