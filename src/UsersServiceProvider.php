<?php

namespace MoWebSo\Users;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MoWebSo\Users\Commands\UsersCommand;

class UsersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('users')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('modify_users_table')
            ->hasCommand(UsersCommand::class);
    }
}
