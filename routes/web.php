<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\ShopDetailController;
use App\Http\Controllers\user\ShopListingController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
})->name('welcome');
Route::get('/shop-list', function () {
  return view('shop-listing');
});
Route::get('/shop_detail', function () {
  return view('shop-detail');
});

Route::get('/show', function () {
  return view('show');
});  
Route::get('create', [MailController::class, 'create'])->name('create');
Route::post('mail', [MailController::class, 'store'])->name('mail.store');
Route::get('show', [ShowController::class, 'index'])->name('show');

Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function(){
  Route::get('user/profile',[ProfileController::class,'index'])->name('user.profile');
  Route::get('user/shop-listing',[ShopDetailController::class,'index'])->name('user.shop-listing');
  Route::get('user/shop-detail',[ShopListingController::class,'index'])->name('user.shop-detail');
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});