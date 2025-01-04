<?php

namespace ManojHortulanus\ShortFilamentHelpers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ManojHortulanus\ShortFilamentHelpers\Commands\ShortFilamentHelpersCommand;

class ShortFilamentHelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('short-filament-helpers');
    }
}
