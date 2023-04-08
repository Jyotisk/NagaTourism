<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accomodation\AccomodationController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\DesignatedOfficial\DesignatedOfficialController;
use App\Http\Controllers\Destination\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Accomodation\PublicAccomocationController;
use App\Http\Controllers\Contactus\ContactController;
use App\Http\Controllers\Blog\PublicBlogController;
use App\Http\Controllers\Destination\PublicDestinationController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Event\PublicEventController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
require __DIR__ . '/auth.php';
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/hotels', [PublicAccomocationController::class, 'Hotels'])->name('Hotels');
Route::get('/Hotellists', [PublicAccomocationController::class, 'Hotellists'])->name('Hotellists');
Route::get('/homestay', [PublicAccomocationController::class, 'Homestay'])->name('Homestay');
Route::get('/HomestayLists', [PublicAccomocationController::class, 'HomestayLists'])->name('HomestayLists');
Route::get('/travel-operators', [PublicAccomocationController::class, 'TravelOperators'])->name('TravelOperators');
Route::get('/TravelOperatorLists', [PublicAccomocationController::class, 'TravelOperatorLists'])->name('TravelOperatorLists');
Route::get('/registered-guide', [PublicAccomocationController::class, 'RegisteredGuide'])->name('RegisteredGuide');
Route::get('/RegisteredGuideLists', [PublicAccomocationController::class, 'RegisteredGuideLists'])->name('RegisteredGuideLists');

// Blog Page Routes
Route::get('/blog', [PublicBlogController::class, 'blog'])->name('blog');
Route::get('/search-blogs', [PublicBlogController::class, 'SearchBlogs'])->name('SearchBlogs');
Route::get('/blog-details/{id}', [PublicBlogController::class, 'blog_details'])->name('blog_details');

// Destination Routes
Route::get('/destination', [PublicDestinationController::class, 'destination'])->name('destination');
Route::get('/search-destination', [PublicDestinationController::class, 'SearchDestination'])->name('SearchDestination');
Route::get('/destination-details/{id}', [PublicDestinationController::class, 'destination_details'])->name('destination-details');

// About Page Routes
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/about-nagaland', [HomeController::class, 'about_nagaland'])->name('about-nagaland');
Route::get('/about-districts', [HomeController::class, 'about_districts'])->name('about-districts');
Route::get('/offroad', [HomeController::class, 'offroad'])->name('offroad');
Route::get('/PublicOfficialList', [HomeController::class, 'PublicOfficialList'])->name('PublicOfficialList');

//event page
Route::get('/events', [PublicEventController::class, 'events'])->name('events');
Route::get('/search-events', [PublicEventController::class, 'SearchEvents'])->name('SearchEvents');
Route::get('/event-details/{id}', [PublicEventController::class, 'event_details'])->name('event_details');

Route::get('/welcome2', [HomeController::class, 'welcome2'])->name('welcome2');



Route::middleware(['admin'])->middleware(['super_admin'])->group(function () {
    //accomodation
    Route::group(['prefix' => 'accomodation'], function () {
        Route::get('/add-hotel', [AccomodationController::class, 'GetAddHotel'])->name('GetAddHotel');
        Route::post('/addhotel', [AccomodationController::class, 'AddHotel'])->name('AddHotel');
        Route::get('/hotel-list', [AccomodationController::class, 'HotelList'])->name('HotelList');
        Route::get('/datatable-hotel-list', [AccomodationController::class, 'DatatableHotelList'])->name('DatatableHotelList');
        Route::post('/GetEditHotelData', [AccomodationController::class, 'GetEditHotelData'])->name('GetEditHotelData');
        Route::post('/EditHotelData', [AccomodationController::class, 'EditHotelData'])->name('EditHotelData');
        Route::post('/DeleteHotelData', [AccomodationController::class, 'DeleteHotelData'])->name('DeleteHotelData');

        Route::get('/add-pg-homestay', [AccomodationController::class, 'GetAddhomestay'])->name('GetAddhomestay');
        Route::post('/AddHomestay', [AccomodationController::class, 'AddHomestay'])->name('AddHomestay');
        Route::get('/homestay-list', [AccomodationController::class, 'HomestayList'])->name('HomestayList');
        Route::get('/DatatableHomestayList', [AccomodationController::class, 'DatatableHomestayList'])->name('DatatableHomestayList');
        Route::post('/EditHomestayData', [AccomodationController::class, 'EditHomestayData'])->name('EditHomestayData');
        Route::post('/GetEditHomestayData', [AccomodationController::class, 'GetEditHomestayData'])->name('GetEditHomestayData');
        Route::post('/DeleteHomestayData', [AccomodationController::class, 'DeleteHomestayData'])->name('DeleteHomestayData');

        Route::get('/add-travel-operator', [AccomodationController::class, 'GetAddTravelOperator'])->name('GetAddTravelOperator');
        Route::post('/AddTravelOperator', [AccomodationController::class, 'AddTravelOperator'])->name('AddTravelOperator');
        Route::get('/travel-operator-list', [AccomodationController::class, 'TravelOperatorList'])->name('TravelOperatorList');
        Route::get('/DatatableTravelOperatorList', [AccomodationController::class, 'DatatableTravelOperatorList'])->name('DatatableTravelOperatorList');
        Route::post('/EditTravelOperatorData', [AccomodationController::class, 'EditTravelOperatorData'])->name('EditTravelOperatorData');
        Route::post('/GetEditTravelOperatorData', [AccomodationController::class, 'GetEditTravelOperatorData'])->name('GetEditTravelOperatorData');
        Route::post('/DeleteTravelOperatorData', [AccomodationController::class, 'DeleteTravelOperatorData'])->name('DeleteTravelOperatorData');

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

        Route::get('/add-registered-guide', [AccomodationController::class, 'GetAddRegisteredGuide'])->name('GetAddRegisteredGuide');
        Route::post('/AddRegisteredGuide', [AccomodationController::class, 'AddRegisteredGuide'])->name('AddRegisteredGuide');
        Route::get('/registered-guide-list', [AccomodationController::class, 'RegisteredGuideList'])->name('RegisteredGuideList');
        Route::get('/DatatableRegisteredGuideList', [AccomodationController::class, 'DatatableRegisteredGuideList'])->name('DatatableRegisteredGuideList');
        Route::post('/EditRegisteredGuideData', [AccomodationController::class, 'EditRegisteredGuideData'])->name('EditRegisteredGuideData');
        Route::post('/GetEditRegisteredGuideData', [AccomodationController::class, 'GetEditRegisteredGuideData'])->name('GetEditRegisteredGuideData');
        Route::post('/DeleteRegisteredGuideData', [AccomodationController::class, 'DeleteRegisteredGuideData'])->name('DeleteRegisteredGuideData');
    });

    Route::group(['prefix' => 'designated-official'], function () {
        Route::get('/add-official', [DesignatedOfficialController::class, 'GetAddOfficial'])->name('GetAddOfficial');
        Route::post('/AddOfficial', [DesignatedOfficialController::class, 'AddOfficial'])->name('AddOfficial');
        Route::get('/official-list', [DesignatedOfficialController::class, 'OfficialList'])->name('OfficialList');
        Route::get('/DatatableOfficialList', [DesignatedOfficialController::class, 'DatatableOfficialList'])->name('DatatableOfficialList');
        Route::post('/EditOfficialData', [DesignatedOfficialController::class, 'EditOfficialData'])->name('EditOfficialData');
        Route::post('/GetEditOfficialData', [DesignatedOfficialController::class, 'GetEditOfficialData'])->name('GetEditOfficialData');
        Route::post('/DeleteOfficialData', [DesignatedOfficialController::class, 'DeleteOfficialData'])->name('DeleteOfficialData');
    });

    Route::group(['prefix' => 'destination'], function () {
        Route::get('/add-destination', [DestinationController::class, 'GetAddDestination'])->name('GetAddDestination');
        Route::post('/AddDestination', [DestinationController::class, 'AddDestination'])->name('AddDestination');
        Route::get('/destination-list', [DestinationController::class, 'DestinationList'])->name('DestinationList');
        Route::get('/DatatableDestinatioList', [DestinationController::class, 'DatatableDestinatioList'])->name('DatatableDestinatioList');
        Route::post('/ViewDestinationData', [DestinationController::class, 'ViewDestinationData'])->name('ViewDestinationData');
        Route::post('/EditDestinationData', [DestinationController::class, 'EditDestinationData'])->name('EditDestinationData');
        Route::post('/DeleteDestinationData', [DestinationController::class, 'DeleteDestinationData'])->name('DeleteDestinationData');
    });

    //contactus
        Route::get('contact-us', [ContactController::class, 'GetContactus'])->name('GetContactus');
        Route::post('AddQuery', [ContactController::class, 'AddQuery'])->name('AddQuery');

    //Blogs
    Route::group(['prefix' => 'blog'], function () {
        Route::get('add-blog', [BlogController::class, 'GetAddBlog'])->name('AddBlog');
        Route::post('post-new-blog', [BlogController::class, 'PostNewBlog'])->name('PostNewBlog');
        Route::get('blog-list', [BlogController::class, 'GetBlogList'])->name('BlogList');
        Route::get('datatable-blog-list', [BlogController::class, 'DatatableBlogList'])->name('DatatableBlogList');
        Route::post('/DeleteBlogData', [BlogController::class, 'DeleteBlogData'])->name('DeleteBlogData');

    });


Route::middleware(['public_user'])->group(function () {
Route::group(['prefix' => 'user'], function () {
    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('UserDashboard');
});
});

