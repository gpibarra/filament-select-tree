<?php

namespace CodeWithDennis\FilamentSelectTree;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentSelectTreeServiceProvider extends PackageServiceProvider
{
    public static string $name = 'select-tree';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews();
    }

    public function packageBooted(): void
    {
        //
    }
}
