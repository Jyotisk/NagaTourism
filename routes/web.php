<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accomodation\AccomodationController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\DesignatedOfficial\DesignatedOfficialController;
use App\Http\Controllers\Destination\DestinationController;
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

require __DIR__ . '/auth.php';
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


    Route::group(['prefix' => 'designated-official'], function () {
        Route::get('add-official', [DesignatedOfficialController::class, 'GetAddOfficial'])->name('GetAddOfficial');
        Route::post('AddOfficial', [DesignatedOfficialController::class, 'AddOfficial'])->name('AddOfficial');
        Route::get('official-list', [DesignatedOfficialController::class, 'OfficialList'])->name('OfficialList');
        Route::get('DatatableOfficialList', [DesignatedOfficialController::class, 'DatatableOfficialList'])->name('DatatableOfficialList');
        Route::post('EditOfficialData', [DesignatedOfficialController::class, 'EditOfficialData'])->name('EditOfficialData');
        Route::post('GetEditOfficialData', [DesignatedOfficialController::class, 'GetEditOfficialData'])->name('GetEditOfficialData');
        Route::post('DeleteOfficialData', [DesignatedOfficialController::class, 'DeleteOfficialData'])->name('DeleteOfficialData');
    });

    Route::group(['prefix' => 'destination'], function () {
        Route::get('add-destination', [DestinationController::class, 'GetAddDestination'])->name('GetAddDestination');
        Route::post('AddDestination', [DestinationController::class, 'AddDestination'])->name('AddDestination');
        Route::get('destination-list', [DestinationController::class, 'DestinationList'])->name('DestinationList');
        Route::get('DatatableDestinatioList', [DestinationController::class, 'DatatableDestinatioList'])->name('DatatableDestinatioList');
        Route::post('ViewDestinationData', [DestinationController::class, 'ViewDestinationData'])->name('ViewDestinationData');
        Route::post('EditDestinationData', [DestinationController::class, 'EditDestinationData'])->name('EditDestinationData');
        Route::post('GetEditDestinationData', [DestinationController::class, 'GetEditDestinationData'])->name('GetEditDestinationData');
        Route::post('DeleteDestinationData', [DestinationController::class, 'DeleteDestinationData'])->name('DeleteDestinationData');
    });
