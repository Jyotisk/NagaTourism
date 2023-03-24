<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accomodation\AccomodationController;

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
    return view('welcome');
});

require __DIR__.'/auth.php';
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//accomodation
Route::group(['prefix' => 'accomodation'], function () {
    Route::get('add-hotel', [AccomodationController::class, 'GetAddHotel'])->name('GetAddHotel');
    Route::post('addhotel', [AccomodationController::class, 'AddHotel'])->name('AddHotel');
    Route::get('hotel-list', [AccomodationController::class, 'HotelList'])->name('HotelList');


});
