<?php

Route::get('vendor/nova-actor/login-as/{key}', \Visanduma\NovaActor\SwitchController::class)
    ->middleware('web')
    ->name('login-as');
