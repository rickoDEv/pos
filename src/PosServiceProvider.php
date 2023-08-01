<?php

namespace Rickodev\Pos;

use Rickodev\Pos\Commands\PosCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViews(namespace: 'rickodev')
            ->hasMigration('create_pos_table')
            ->hasCommand(PosCommand::class);
    }
}
