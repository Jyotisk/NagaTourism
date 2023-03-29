<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accomodation\AccomodationController;
use App\Http\Controllers\Event\EventController;
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

require __DIR__.'/auth.php';

//accomodation
Route::group(['prefix' => 'accomodation'], function () {
    Route::get('add-hotel', [AccomodationController::class, 'GetAddHotel'])->name('GetAddHotel');
    Route::post('addhotel', [AccomodationController::class, 'AddHotel'])->name('AddHotel');
    Route::get('hotel-list', [AccomodationController::class, 'HotelList'])->name('HotelList');
    Route::get('datatable-hotel-list', [AccomodationController::class, 'DatatableHotelList'])->name('DatatableHotelList');
    Route::post('GetEditHotelData', [AccomodationController::class, 'GetEditHotelData'])->name('GetEditHotelData');
    Route::post('EditHotelData', [AccomodationController::class, 'EditHotelData'])->name('EditHotelData');
    Route::post('DeleteHotelData', [AccomodationController::class, 'DeleteHotelData'])->name('DeleteHotelData');


});

//event
Route::group(['prefix' => 'event'], function () {
    Route::get('add-event', [EventController::class, 'GetAddEvent'])->name('GetAddEvent');
    Route::post('addevent', [EventController::class, 'AddEvent'])->name('AddEvent');
    Route::get('event-list', [EventController::class, 'eventList'])->name('eventlList');
    Route::get('datatable-event-list', [EventController::class, 'DatatableEventList'])->name('DatatableEventList');
    Route::post('GetEditEventData', [EventController::class, 'GetEditEventData'])->name('GetEditEventData');
    Route::post('EditEventData', [EventController::class, 'EditEventData'])->name('EditEventData');
    Route::post('DeleteEventData', [EventController::class, 'DeleteEventData'])->name('DeleteEventData');
});
