<?php

namespace Ashok\Authorize;

use Ashok\Authorize\Commands\AuthorizeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AuthorizeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-authorize-attribute')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_authorize_attribute_table')
            ->hasCommand(AuthorizeCommand::class);
    }
}
