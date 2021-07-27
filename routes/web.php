<?php

use App\Http\Controllers\DaySiteController;
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

Route::prefix('day')->name('day.')->group(function(){
    Route::get('/',[DaySiteController::class,'home'])->name('home');
    Route::get('about',[DaySiteController::class,'about'])->name('about');
    Route::get('services',[DaySiteController::class,'services'])->name('services');
    Route::prefix('portfolio')->name('portfolio.')->group(function(){
    Route::get('/',[DaySiteController::class,'portfolio'])->name('portfolio');
    Route::get('portfolioDetails',[DaySiteController::class,'portfolioDetails'])->name('portfolioDetails');
    });
    Route::get('pricing',[DaySiteController::class,'pricing'])->name('pricing');
    Route::get('team',[DaySiteController::class,'team'])->name('team');
    Route::get('contact',[DaySiteController::class,'contact'])->name('contact');
    Route::post('contact',[DaySiteController::class,'contactForm'])->name('contactForm');
});

Route::get('/', function () {
    return view('welcome');
});
