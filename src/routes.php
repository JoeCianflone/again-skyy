<?php
const CONTROLLER = "Cianflone\\Again\\Controllers\\";

// General routes .............................................................
Route::any('/', CONTROLLER . "HomeController@index");
Route::any('/mobile', CONTROLLER . "HomeController@mobile");

// Admin panel stuff here .....................................................
Route::group(['prefix' => 'admin/v1/panel'], function () {
    Route::get('login',  ["as" => 'login',         "uses"  => CONTROLLER . "Admin\\SessionController@index"]);
    Route::post('login', ["as" => 'login.attempt', "uses"  => CONTROLLER . "Admin\\SessionController@store", "before" => "csrf"]);
    Route::get('logout', ["as" => 'logout',        "uses"  => CONTROLLER . "Admin\\SessionController@destroy"]);

    Route::group(["before" => "auth"], function () {
        Route::get('dashboard', ["as" => 'dashboard', "uses" => CONTROLLER . "Admin\\DashboardController@index"]);
        Route::post('dashboard', ["as" => 'dashboard.store', "uses" => CONTROLLER . "Admin\\DashboardController@store", "before" => "csrf"]);

        Route::get('dashboard/create', ["as" => 'dashboard.create', "uses" => CONTROLLER . "Admin\\DashboardController@create"]);
        Route::delete('dashboard/{showId}', ["as" => 'dashboard.delete', "uses" => CONTROLLER . "Admin\\DashboardController@destroy"]);
        Route::get('dashboard/{showId}/edit', ["as" => 'dashboard.edit', "uses" => CONTROLLER . "Admin\\DashboardController@edit"]);
        Route::put('dashboard/{showId}/edit', ["as" => 'dashboard.update', "uses" => CONTROLLER . "Admin\\DashboardController@update"]);

    });
});
