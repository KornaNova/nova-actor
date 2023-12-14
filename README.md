<p align="center">

<img src="https://github.com/Visanduma/nova-actor/blob/077352d7925a5bd4ebbc7690b649985ddd075ccc/images/nova-actor.png" />

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

];
```

## Setup

-   Update the `nova-actor.php` config file with your USER Model & column details
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

### Adding actors/users

Create json file called `actors.json` in root level of the project. then add any user details as following structure.

**Remember to add the `actors.json` file to `.gitignore`**

```json
[
    {
        "name": "Mallory Olsen",
        "username": "nenojis@mailinator.com"
    },
    {
        "name": "Super  Admin",
        "username": "info@visanduma.com",
        "redirect_to": "/nova/dashboards/main", // optional
        "guard" : "admin" // optional
    }
]
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
