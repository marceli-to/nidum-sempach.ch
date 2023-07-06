<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// General routes
Route::get('/', 'PageController@index')->name('page_index');
Route::get('/projekt', 'PageController@project')->name('page_project');
Route::get('/ausbau', 'PageController@extension')->name('page_extension');
Route::get('/impressionen', 'PageController@impressions')->name('page_impressions');
Route::get('/angebot', 'ApartementController@index')->name('page_apartements');
Route::get('/kontakt', 'ContactController@index')->name('page_contact');
Route::get('/kontakt/danke', 'ContactController@subscribed')->name('page_contact_subscribed');
Route::post('/subscribe', 'SubscriberController@store')->name('page_contact_subscribe');
Route::get('/datenschutz', 'PageController@privacy')->name('page_privacy');
Route::get('/impressum', 'PageController@imprint')->name('page_imprint');


/**
 * Admin routes
 */

// Route::view('admin', 'backend.app');
// Route::get('admin/{any}', function () {
// 	return view('backend.app');
// })->where('any', '.*');


// Route::get('/iso', 'ApartementController@iso');



