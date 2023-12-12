<?php

namespace Visanduma\NovaActor;

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NovaActorServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->app->booted(function () {
            Route::middleware(['nova'])
                ->group(__DIR__.'/../routes/web.php');
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('nova-actor')
            ->hasConfigFile()
            ->hasViews('nova-actor');
    }
}
