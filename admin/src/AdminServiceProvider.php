<?php

namespace Admin\Admin;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Admin\Admin\Commands\AdminCommand;

class AdminServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin_table')
            ->hasCommand(AdminCommand::class);
    }
}
