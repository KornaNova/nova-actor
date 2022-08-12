<?php

Route::get('vendor/laravel-auth-switch/login-as/{key}', \Visanduma\LaravelAuthSwitch\SwitchController::class)
    ->middleware('web')
    ->name('login-as');
