<?php

namespace PrimeKit\LaravelCountryDatasetImporter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PrimeKit\LaravelCountryDatasetImporter\LaravelCountryDatasetImporter
 */
class LaravelCountryDatasetImporter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PrimeKit\LaravelCountryDatasetImporter\LaravelCountryDatasetImporter::class;
    }
}
