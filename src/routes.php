<?php
const CONTROLLER = "Cianflone\\Again\\Controllers\\";

// General routes .............................................................
Route::get('/', CONTROLLER . "HomeController@index");

// Admin panel stuff here .....................................................
Route::group(['prefix' => 'admin/v1/panel'], function () {
    Route::get('login',  ["as" => 'login',         "uses"  => CONTROLLER . "Admin\\SessionController@index"]);
    Route::post('login', ["as" => 'login.attempt', "uses"  => CONTROLLER . "Admin\\SessionController@store", "before" => "csrf"]);
    Route::get('logout', ["as" => 'logout',        "uses"  => CONTROLLER . "Admin\\SessionController@destroy"]);

    Route::group(["before" => "auth"], function () {
        Route::get('dashboard', ["as" => 'dashboard', "uses" => CONTROLLER . "Admin\\DashboardController@index"]);
        Route::post('dashboard', ["as" => 'dashboard.store', "uses" => CONTROLLER . "Admin\\DashboardController@store", "before" => "csrf"]);

        Route::get('dashboard/create', ["as" => 'dashboard.create', "uses" => CONTROLLER . "Admin\\DashboardController@create"]);

    });
});
