<?php

namespace ManojHortulanus\ShortFilamentHelpers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ShortFilamentHelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('short-filament-helpers');
    }
}
