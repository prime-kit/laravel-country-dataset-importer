<?php

namespace PrimeKit\LaravelCountryDatasetImporter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use PrimeKit\LaravelCountryDatasetImporter\Commands\LaravelCountryDatasetImporterCommand;

class LaravelCountryDatasetImporterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-country-dataset-importer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_country_dataset_importer_table')
            ->hasCommand(LaravelCountryDatasetImporterCommand::class);
    }
}
