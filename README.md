# A Laravel package to import geographical datasets.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/prime-kit/laravel-country-dataset-importer.svg?style=flat-square)](https://packagist.org/packages/prime-kit/laravel-country-dataset-importer)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/prime-kit/laravel-country-dataset-importer/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/prime-kit/laravel-country-dataset-importer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/prime-kit/laravel-country-dataset-importer/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/prime-kit/laravel-country-dataset-importer/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/prime-kit/laravel-country-dataset-importer.svg?style=flat-square)](https://packagist.org/packages/prime-kit/laravel-country-dataset-importer)

The Laravel Country Dataset Importer package provides console commands to seamlessly import and manage country-related datasets within your Laravel application. It leverages the data from the widely-used [dr5hn/countries-states-cities-database](https://github.com/dr5hn/countries-states-cities-database) GitHub repository.

## Installation

You can install the package via composer:

```bash
composer require prime-kit/laravel-country-dataset-importer
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-country-dataset-importer-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-country-dataset-importer-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-country-dataset-importer-views"
```

## Usage

```php
$laravelCountryDatasetImporter = new PrimeKit\LaravelCountryDatasetImporter();
echo $laravelCountryDatasetImporter->echoPhrase('Hello, PrimeKit!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [shubham chugh](https://github.com/shubhamchugh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
