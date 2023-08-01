<?php

namespace Rickodev\Pos;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rickodev\Pos\Commands\PosCommand;

class PosServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pos')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_pos_table')
            ->hasCommand(PosCommand::class);
    }
}