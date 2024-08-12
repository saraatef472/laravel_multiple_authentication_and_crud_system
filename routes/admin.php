<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminRegisterController;
use App\Http\Controllers\admin\DasboardController;
use App\Http\Controllers\admin\AdminHomController2;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\searchController;
use App\Http\Controllers\admin\usersController;


use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

/*
 admin Routes
*/

Route::prefix('admin/')->name('admin.')->group(function(){
  // another Route to abstract login controller 
  Route::controller(AdminLoginController::class)->group(function(){
    Route::get('login','login')->name("login");
    Route::post('check','check')->name("check");
    Route::post('logout','logout')->name("logout");
    Route::get('mails', [MailController::class, 'index'])->name('mails');

  });

  // another Route to abstract register controller 
   Route::controller(AdminRegisterController::class)->group(function(){
    Route::get('register','register')->name("register");
    Route::post('store','store')->name("store");

  });

    // another Route to abstract middleware 
  Route::middleware('auth:admin')->group(function(){
    Route::get('home',[AdminHomeController::class,'index'])->name("home");
    // Route::get('dashboard',[DasboardController::class,'index'])->name("dashboard");
    Route::get('dashboard',[ProductController::class,'index'])->name("dashboard");

  });
  Route::get('index', [ProductController::class, 'index'])->name('index');
  Route::get('/show/{products}', [ProductController::class, 'show'])->name('show');
  Route::get('create', [ProductController::class, 'create'])->name('create');
  Route::post('store', [ProductController::class, 'store'])->name('store');
  Route::get('/edit/{products}', [ProductController::class, 'edit'])->name('edit');
  Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
  Route::delete('/products/{products}', [ProductController::class, 'destroy'])->name('destroy');
  Route::delete('/deleteMail/{products}', [MailController::class, 'destroy'])->name('deleteMail');

  Route::get('users', [usersController::class, 'index'])->name('users');
  Route::get('search', [searchController::class, 'index'])->name('search');

  
});


