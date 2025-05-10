<?php

namespace Bastiaigner\DynamicResource;

use Bastiaigner\DynamicResource\Commands\DynamicResourceCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DynamicResourceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dynamic-resource')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dynamic_resource_table')
            ->hasCommand(DynamicResourceCommand::class);
    }
}
