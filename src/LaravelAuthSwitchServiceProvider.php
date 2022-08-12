<?php

namespace Visanduma\LaravelAuthSwitch;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAuthSwitchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-auth-switch')
            ->hasConfigFile()
            ->hasRoute('web')
            ->hasViews('auth-switch');
    }
}
