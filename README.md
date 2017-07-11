# drupal-psr-16
Convert Drupal 8 Cache objects to PSR-16 compliant cache objects

[![Build Status](https://scrutinizer-ci.com/g/highwire/drupal-psr-16/badges/build.png?b=master)](https://scrutinizer-ci.com/g/highwire/drupal-psr-16/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/highwire/drupal-psr-16/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/highwire/drupal-psr-16/?branch=master)

## Installation
```bash
composer require highwire\drupal-psr-16
```


## Using PHP
```php
<?php

$drupalcache = \Drupal::cache('mybin');

$psr16cache = new \HighWire\DrupalPSR16\Cache($drupalcache);

// Now do something with the PSR-16 compliant cache
```

## Using Drupal services
```yml
services:
  cache.mybin: # Custom cache bin called 'mybin'
    class: Drupal\Core\Cache\CacheBackendInterface
    tags:
      - { name: cache.bin }
    factory: cache_factory:get
    arguments: [mybin]
  psr16.mybin: # PSR 16 service that returns a bin as a PSR-16 compliant object
    class: HighWire\DrupalPSR16\Cache
    arguments: ['@cache.mybin']
  psr16.default: # PSR 16 service that returns the default bin as a PSR-16 compliant object
    class: HighWire\DrupalPSR16\Cache
    arguments: ['@cache.default']
  3rdparty.library: # 3rd Party Library that takes a PSR-16 compliant cache controller
    class: Some\Third\Party\Library
    arguments: ['@some.other.service']
    calls:
      - [setCache, ['@psr16.mybin']]
```
