<?php

namespace PrimeKit\LaravelCountryDatasetImporter\Commands;

use Illuminate\Console\Command;

class LaravelCountryDatasetImporterCommand extends Command
{
    public $signature = 'laravel-country-dataset-importer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
