<?php
const CONTROLLER = "Cianflone\\Again\\Controllers\\";

// General routes .............................................................
Route::get('/', CONTROLLER . "HomeController@index");

// Admin panel stuff here .....................................................
Route::group(['prefix' => 'admin/v1/panel'], function () {
    Route::resource('dashboard', CONTROLLER . "Admin\\DashboardController");
});
