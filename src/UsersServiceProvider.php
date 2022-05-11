<?php

namespace MoWebSo\Users;

use MoWebSo\Users\Models\User;
use MoWebSo\Users\Policies\UserPolicy;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MoWebSo\Users\Commands\UsersCommand;

class UsersServiceProvider extends PackageServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
    ];

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
            ->hasRoute('web')
            ->hasMigration('modify_users_table')
            ->hasCommand(UsersCommand::class);
    }
}
