<?php
// config for Visanduma/LaravelAuthswitch
return [

    'username_column' => 'email',

    'model' => \App\Models\User::class,

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
        ],
        [
            'name' => 'Seller',
            'username' => 'alexie.runolqqwqwfsson@example.org',
            'redirect_to' => 'affiliate/dashboard'
        ],
        [
            'name' => 'Owner',
            'username' => 'alexie.ruertertnolfsson@example.org',
            'redirect_to' => 'affiliate/dashboard'
        ],

    ]
];
