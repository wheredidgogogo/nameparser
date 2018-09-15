# Laravel Name Parser Package

This is a laravel version of PHP Name Parser by Josh Fraser

https://github.com/joshfraser/PHP-Name-Parser

Split a single string into the following array:

array: [
  salutation,
  fname,
  initials,
  lname,
  lname_base,
  lname_compound,
  suffix
]

This package allows you to use a single input field for a user or customer name and then split the single string into its individual name components.

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

