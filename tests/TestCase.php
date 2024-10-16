<?php

namespace PrimeKit\LaravelCountryDatasetImporter\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use PrimeKit\LaravelCountryDatasetImporter\LaravelCountryDatasetImporterServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'PrimeKit\\LaravelCountryDatasetImporter\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelCountryDatasetImporterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-country-dataset-importer_table.php.stub';
        $migration->up();
        */
    }
}
