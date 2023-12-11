<?php

return [
    // auth user model
    'model' => \App\Models\User::class,

    // username column of user table
    'username_column' => 'email',

    // allowed environments
    'environments' => ['local'],

    // switch able user accounts
    'accounts' => [
        /*
        [
            'name' => 'Super Admin',
            'username' => 'super@visanduma.com',
            'redirect_to' => '/nova/dashboards/main',  <--- Optional - redirect to this url after successfully login
            'guard' => 'admin', <--- Optional - Auth guard
        ],
        */
    ],
];
