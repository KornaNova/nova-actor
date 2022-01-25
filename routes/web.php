<?php

Route::get('laravel-auth-switch/login-as/{key}', \Visanduma\LaravelAuthSwitch\SwitchController::class)
    ->middleware('web')
    ->name('login-as');
