<p align="center">

<img src="https://github.com/Visanduma/nova-two-factor/blob/c26d41cb38c5850e7ee3863e34e5fd3b0c3f18a5/resources/img/nova-two-factor-banner.png?raw=true" />

</p>

# Nova Actor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/visanduma/nova-actor.svg?style=flat-square)](https://packagist.org/packages/visanduma/nova-actor)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/visanduma/nova-actor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/visanduma/nova-actor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/visanduma/nova-actor.svg?style=flat-square)](https://packagist.org/packages/visanduma/nova-actor)

The Simple User switch for Laravel Nova dashboard

![screenshot](/images/photo-1.png)

![screenshot](/images/photo-2.png)

## Installation

You can install the package via composer:

```bash
composer require visanduma/nova-actor
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="nova-actor-config"
```

This is the contents of the published config file:

```php
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
```

## Setup

-   Update the `nova-actor.php` config file with your USER Model & column details
-   Add any number of users to `accounts` array
-   Register the nova-actor middleware in `nova` config file

```php
// config/nova.php

'middleware' => [
        'web',
        HandleInertiaRequests::class,
        DispatchServingNovaEvent::class,
        BootTools::class,
        ...
        \Visanduma\NovaActor\Http\Middlewares\NovaActorTheatre::class, // <-- Add this line
    ],
```

## Customizing the view

if you want to customize the Actor dialog content, you can publish the view file and update it.

Publish the view file with:

```bash
php artisan vendor:publish --tag="nova-actor-views"
```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Visanduma](https://github.com/Visanduma)
-   [LaHiRu](https://github.com/lahirulhr)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
