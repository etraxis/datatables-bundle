[![PHP](https://img.shields.io/badge/PHP-7.1%2B-blue.svg)](https://secure.php.net/migration71)
[![Latest Stable Version](https://poser.pugx.org/webinarium/datatables-bundle/v/stable)](https://packagist.org/packages/webinarium/datatables-bundle)
[![Build Status](https://travis-ci.com/webinarium/DataTablesBundle.svg?branch=master)](https://travis-ci.com/github/webinarium/DataTablesBundle)
[![Code Coverage](https://scrutinizer-ci.com/g/webinarium/DataTablesBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/webinarium/DataTablesBundle/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/webinarium/DataTablesBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/webinarium/DataTablesBundle/?branch=master)

# DataTables Symfony bundle

This bundle helps to implement data source actions for [DataTables](http://www.datatables.net/) JavaScript plugin when it's used in [server-side processing](http://www.datatables.net/manual/server-side) mode.

## Requirements

PHP needs to be a minimum version of PHP 7.1.

Symfony must be of 2.7 or above.

## Installation

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

```console
composer require webinarium/datatables-bundle
```

This command requires you to have Composer installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

### Step 2: Enable the Bundle

If you are using Symfony 3 or below, enable the bundle by adding it to the list of registered bundles in the `app/AppKernel.php` file of your project:

```php
public function registerBundles()
{
    $bundles = [
        // ...
        new DataTables\DataTablesBundle(),
    ];
}
```

## Development

```console
./vendor/bin/php-cs-fixer fix
XDEBUG_MODE=coverage ./vendor/bin/phpunit --coverage-html=vendor/coverage
```

## Usage

Please see the complete usage example [here](../../wiki).
