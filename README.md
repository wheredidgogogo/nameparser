# Laravel Name Parser Package

This is a laravel version of PHP Name Parser by Josh Fraser

https://github.com/joshfraser/PHP-Name-Parser

## Installation

### Composer

```shell
composer require wheredidgogogo/nameparser
```

## Laravel

### Add Provider
In your `config/app.php` add the following:

```php
'providers' => [
    ...
    Wheredidgogogo\Nameparser\NameparserServiceProvider::class,
    ...
],

'alias' => [
    ...
    'Nameparser' => Wheredidgogogo\Nameparser\NameparserFacade::class,
    ...
],
```

## Use

```shell

$results = \Nameparser::parse_name('Anthony Gherghetta')

```

