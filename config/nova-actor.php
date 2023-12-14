<?php

return [
    // auth user model
    'model' => \App\Models\User::class,

    // username column of user table
    'username_column' => 'email',

    // allowed environments
    'environments' => ['local'],

];
