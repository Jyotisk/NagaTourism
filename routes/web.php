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
    Route::get('datatable-hotel-list', [AccomodationController::class, 'DatatableHotelList'])->name('DatatableHotelList');
    Route::post('GetEditHotelData', [AccomodationController::class, 'GetEditHotelData'])->name('GetEditHotelData');
    Route::post('EditHotelData', [AccomodationController::class, 'EditHotelData'])->name('EditHotelData');
    Route::post('DeleteHotelData', [AccomodationController::class, 'DeleteHotelData'])->name('DeleteHotelData');
   
    Route::get('add-pg-homestay', [AccomodationController::class, 'GetAddhomestay'])->name('GetAddhomestay');
    Route::post('AddHomestay', [AccomodationController::class, 'AddHomestay'])->name('AddHomestay');
    Route::get('homestay-list', [AccomodationController::class, 'HomestayList'])->name('HomestayList');
    Route::get('DatatableHomestayList', [AccomodationController::class, 'DatatableHomestayList'])->name('DatatableHomestayList');
    Route::post('EditHomestayData', [AccomodationController::class, 'EditHomestayData'])->name('EditHomestayData');
    Route::post('GetEditHomestayData', [AccomodationController::class, 'GetEditHomestayData'])->name('GetEditHomestayData');
    Route::post('DeleteHomestayData', [AccomodationController::class, 'DeleteHomestayData'])->name('DeleteHomestayData');
    
    Route::get('add-travel-operator', [AccomodationController::class, 'GetAddTravelOperator'])->name('GetAddTravelOperator');
    Route::post('AddTravelOperator', [AccomodationController::class, 'AddTravelOperator'])->name('AddTravelOperator');
    Route::get('travel-operator-list', [AccomodationController::class, 'TravelOperatorList'])->name('TravelOperatorList');
    Route::get('DatatableTravelOperatorList', [AccomodationController::class, 'DatatableTravelOperatorList'])->name('DatatableTravelOperatorList');
    Route::post('EditTravelOperatorData', [AccomodationController::class, 'EditTravelOperatorData'])->name('EditTravelOperatorData');
    Route::post('GetEditTravelOperatorData', [AccomodationController::class, 'GetEditTravelOperatorData'])->name('GetEditTravelOperatorData');
    Route::post('DeleteTravelOperatorData', [AccomodationController::class, 'DeleteTravelOperatorData'])->name('DeleteTravelOperatorData');




    Route::get('add-registered-guide', [AccomodationController::class, 'GetAddRegisteredGuide'])->name('GetAddRegisteredGuide');
    Route::post('AddRegisteredGuide', [AccomodationController::class, 'AddRegisteredGuide'])->name('AddRegisteredGuide');
    Route::get('registered-guide-list', [AccomodationController::class, 'RegisteredGuideList'])->name('RegisteredGuideList');
    Route::get('DatatableRegisteredGuideList', [AccomodationController::class, 'DatatableRegisteredGuideList'])->name('DatatableRegisteredGuideList');
    Route::post('EditRegisteredGuideData', [AccomodationController::class, 'EditRegisteredGuideData'])->name('EditRegisteredGuideData');
    Route::post('GetEditRegisteredGuideData', [AccomodationController::class, 'GetEditRegisteredGuideData'])->name('GetEditRegisteredGuideData');
    Route::post('DeleteRegisteredGuideData', [AccomodationController::class, 'DeleteRegisteredGuideData'])->name('DeleteRegisteredGuideData');
    
});
