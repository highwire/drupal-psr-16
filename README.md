# drupal-psr-16
Convert Drupal 8 Cache objects to PSR-16 compliant cache objects

[![Build Status](https://scrutinizer-ci.com/g/highwire/drupal-psr-16/badges/build.png?b=master)](https://scrutinizer-ci.com/g/highwire/drupal-psr-16/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/highwire/drupal-psr-16/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/highwire/drupal-psr-16/?branch=master)


# Example

```bash
composer require highwire\drupal-psr-16
```

```php
<?php

$drupalcache = \Drupal::cache('mybin');

$psr16cache = new \HighWire\DrupalPSR16\Cache($drupalcache);

// Now do something with the PSR-16 compliant cache
```

