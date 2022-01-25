<?php


return [

    // username column of user table
    'username_column' => 'email',

    // auth able user model
    'model' => \App\Models\User::class,

    // switch able user accounts according to your user table
    // use redirect_to field to redirect user after successfully logged in
    'accounts' => [
        [
            'name' => 'Affiliate',
            'username' => 'alexie.runolfsson@example.org',
            'redirect_to' => 'affiliate/dashboard'
        ],
        [
            'name' => 'Broker',
            'username' => 'dojyxisero@mailinator.com',
            'redirect_to' => 'brokers/dashboard'
        ]

    ]
];
