<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FundCategoryController;
use App\Http\Controllers\FundSubCategoryController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFundController;
use App\Http\Controllers\ExportController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['guest'])->group(function () {
    Route::get('/fund', [FundController::class, 'index'])->name('fund.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/fund_category', [FundCategoryController::class, 'index'])->name('fund_category.index'); //prikaz svih podataka
    Route::get('/fund_sub_category', [FundSubCategoryController::class, 'index'])->name('fund_sub_category.index');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user_fund', [UserFundController::class, 'index'])->name('user_fund.index');
    Route::get('/fund', [FundController::class, 'index'])->name('fund.index');
    Route::get('/fund/search', [FundController::class, 'search'])->name('fund.search');
    Route::get('/fund/filter', [FundController::class, 'filter'])->name('fund.filter');
    Route::get('/export/pdf', [ExportController::class, 'exportToPDF'])->name('fund.export.pdf');
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');

});

require __DIR__.'/auth.php';

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
