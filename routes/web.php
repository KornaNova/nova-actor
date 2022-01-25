<?php

Route::get('laravel-auth-switch/login-as/{key}', \Visanduma\LaravelAuthswitch\SwitchController::class)
    ->withoutMiddleware([])
    ->name('login-as');
