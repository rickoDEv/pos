<?php

namespace Rickodev\Pos;

use Livewire\Livewire;
use Rickodev\Pos\Commands\PosCommand;
use Rickodev\Pos\Livewire\Cart;
use Rickodev\Pos\Livewire\ProductGrid;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
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
//            ->hasAssets()
            ->hasViews(namespace: 'rickodev')
            ->hasMigration('create_pos_carts_table')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishAssets()
                    ->publishMigrations()
                    ->copyAndRegisterServiceProviderInApp();
            })
            ->hasCommand(PosCommand::class);
    }

    public function boot(): void
    {
        parent::boot();

        $this->configurePublishableFiles();
        $this->configureLivewireComponents();
    }

    protected function configurePublishableFiles(): void
    {
        if ($this->app->runningInConsole() === false) {
            return;
        }

        $this->publishes(paths: [
            __DIR__.'/../public/' => public_path('/'),
        ], groups: 'pos-assets');
    }

    private function configureLivewireComponents()
    {
        Livewire::component('rickodev::product-grid', ProductGrid::class);
        Livewire::component('rickodev::cart', Cart::class);
    }
}
