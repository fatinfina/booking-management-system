<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\venue\venueController;
use App\Http\Controllers\booking\bookingController;


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
    return view('dashboard');
});

Route::group(['prefix'=>'/dashboard', 'as'=> 'dashboard.'], function (){
    Route::get('/', [dashboardController::class, 'index'])->name('index');
    Route::get('/about', [dashboardController::class,'about'])->name('about');
});

Route::group(['prefix'=>'/venue', 'as'=> 'venue.'], function (){
    Route::get('/', [venueController::class, 'index'])->name('index');
    Route::get('/add', [venueController::class,'add'])->name('add');
    Route::any('/store', [venueController::class,'store'])->name('store');
    Route::any('/delete/{id}', [venueController::class,'delete'])->name('delete');

});

Route::group(['prefix'=>'/booking', 'as'=> 'booking.'], function (){
    Route::get('/', [bookingController::class, 'index'])->name('index');
    Route::get('/add', [bookingController::class,'add'])->name('add');
    Route::any('/store', [bookingController::class,'store'])->name('store');
    Route::any('/edit/{id}', [bookingController::class,'edit'])->name('edit');
    Route::any('/update/{id}', [bookingController::class,'update'])->name('update');
    Route::any('/delete/{id}', [bookingController::class,'delete'])->name('delete');
    Route::any('/pdfdownload/{id}', [bookingController::class,'pdfdownload'])->name('pdfdownload');

});