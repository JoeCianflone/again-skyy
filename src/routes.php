<?php

const CONTROLLER = "Cianflone\\Again\\Controllers\\";

Route::get('/', CONTROLLER . "HomeController@index");

Route::group(['prefix' => 'admin'], function () {
    Route::resource('dashboard', CONTROLLER . "Admin\\DashboardController");
});
