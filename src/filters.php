<?php
Route::filter('auth', function () {
    if (Auth::guest()) {
        Flash::message("Sorry, you're not logged currently, please sign in first");

        // TODO: Laravel needs a Redirect::guest_to('named-route') but since
        // that doesn't exist I have to use the full URL...I'll build that
        // at some point and issue a PR
        return Redirect::guest('/admin/v1/panel/login');
    }
});

Route::filter('csrf', function () {
    if (Session::token() != Input::get('_token')) {
        throw new Illuminate\Session\TokenMismatchException;
    }
});
