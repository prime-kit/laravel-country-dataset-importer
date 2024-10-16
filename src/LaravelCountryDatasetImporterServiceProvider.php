<?php

namespace PrimeKit\LaravelCountryDatasetImporter;

use PrimeKit\LaravelCountryDatasetImporter\Commands\LaravelCountryDatasetImporterCommand;
use PrimeKit\LaravelCountryDatasetImporter\Console\Command\GeographyDatasetImportCommand;
use PrimeKit\LaravelCountryDatasetImporter\Console\Command\ImportGeographyDatasetCommand;
use PrimeKit\LaravelCountryDatasetImporter\Console\Command\ImportLanguageDatasetCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCountryDatasetImporterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-country-dataset-importer')
            ->hasMigrations([
                '2024_01_17_130920_create_regions_table',
                '2024_01_17_130921_create_sub_regions_table',
                '2024_01_17_130933_create_countries_table',
                '2024_01_24_134240_create_states_table',
                '2024_01_24_134251_create_cities_table'
            ])
            ->runsMigrations()
            ->hasCommand(ImportGeographyDatasetCommand::class);
    }
}
