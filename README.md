# Laravel Auth Switch

[![Latest Version on Packagist](https://img.shields.io/packagist/v/visanduma/laravel-auth-switch.svg?style=flat-square)](https://packagist.org/packages/visanduma/laravel-auth-switch)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/visanduma/laravel-auth-switch/run-tests?label=tests)](https://github.com/visanduma/laravel-auth-switch/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/visanduma/laravel-auth-switch/Check%20&%20fix%20styling?label=code%20style)](https://github.com/visanduma/laravel-auth-switch/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/visanduma/laravel-auth-switch.svg?style=flat-square)](https://packagist.org/packages/visanduma/laravel-auth-switch)

Simple User switch for development environment

## Installation

You can install the package via composer:

```bash
composer require visanduma/laravel-auth-switch
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="auth-switch-config"
```

This is the contents of the published config file:

```php
return [

    // username column of user table
    'username_column' => 'email',

    // auth able user model
    'model' => \App\Models\User::class,


    // switch able user accounts according to your user table
    'accounts' => [
        [
            'name' => 'Affiliate',
            'username' => 'alexie.runolfsson@example.org',
            'redirect_to' => 'affiliate/dashboard' // redirect to this url after login
        ],
        [
            'name' => 'Broker',
            'username' => 'dojyxisero@mailinator.com',
            'redirect_to' => 'brokers/dashboard'
        ],
];
```

## Usage

Include into any view where you need Auth Switching

```php
@include('auth-switch::button');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Visanduma](https://github.com/Visanduma)
- [LaHiRu](https://github.com/lahirulhr)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
