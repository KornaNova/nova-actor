<?php

Route::get('laravel-auth-switch/login-as/{key}', \Visanduma\LaravelAuthSwitch\SwitchController::class)
    ->withoutMiddleware([])
    ->name('login-as');
