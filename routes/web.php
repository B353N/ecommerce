<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\LangController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/** Pages */
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('about', [AboutController::class, 'index'])->name('about');

/** Shop Controllers */
Route::get('store/subCat/{slug}', [ShopController::class, 'bySubCat'])->name('shop.bySubCat');
Route::get('store/{slug}', [ShopController::class, 'byCat'])->name('shop.byCat');
Route::get('store', [ShopController::class, 'index'])->name('shop');
/** Product Controllers */
Route::get('product-detail/{slug}', [ProductController::class, 'showProduct'])->name('product-detail');


Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function() {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserProfileController::class, 'index'])->name('profile');
    Route::put('profile', [UserProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('profile', [UserProfileController::class, 'updatePassword'])->name('profile.update.password');
});