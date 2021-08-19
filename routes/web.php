<?php

use App\Review;
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



Route::get('/', function () {
    return redirect()->route('home');
})->name('/');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('activate/', 'Auth\VerificationController@signupActivate')->name('sms.activation');
Route::get('activate/{token}', 'Auth\VerificationController@signupActivate')->name('user.activation');
Route::get('/category-offers/{id}', 'OffersController@category_offers')->name('category-offers');
Route::get('/mention-legale','HomeController@mentionLegal')->name('ml');
Route::get('/cgu','HomeController@cgu')->name('cgu');
Route::get('/faq','HomeController@faq')->name('faq');
Route::resource('coachs',CoachController::class);
Route::post('coachs-search','CoachController@search')->name('coachs.search');
Route::get('/events/{id}', 'AgendaController@getCoachEvents')->name('coach-events');

Route::get('/les-avis',function(){
    return view("pages.Front.reviews")
                ->with('reviews', Review::paginate(40));
})->name('les-avis.index');

Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function () {
    Route::get('/admin', 'HomeController@index')->name('admin.home');
    Route::resource('/sliders', SliderController::class);
    Route::post('les-avis','ReviewController@store')->name('les-avis.store');
    Route::resource('/offers', OffersController::class);
    Route::resource('/offer-categories', OfferCategoriesController::class);
    Route::resource('/services', ServicesController::class);
    Route::resource('/agenda', AgendaController::class);
    Route::get('/events', 'AgendaController@getEvents')->name('events');
    Route::get('/remove-event/{id}', 'AgendaController@removeEvent')->name('remove-event');
    Route::resource('/cours', CourController::class);
    Route::post('/book-coach', 'CoachController@bookCoach')->name('book-coach');

    Route::resource('/account', AccountController::class);
    Route::post('/profile', 'AccountController@profile')->name('account.profile');
    Route::resource('/account', AccountController::class);
    Route::resource('/abonnements', AbonnementsController::class);


    Route::resource('/users', UsersController::class);
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/clear-config', function () {
    Artisan::call('cache:clear');
    return "Config is cleared";
});


Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return "storage linked";
});
