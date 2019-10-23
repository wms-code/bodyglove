<?php

Route::group(['namespace' => 'Account'], function() {
    Route::get('/', 'HomeController@index')->name('account.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('account.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('account.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('account.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('account.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('account.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('account.password.reset');

});