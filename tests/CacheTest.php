<?php
 
use HighWire\DrupalPSR16\Cache;

class CacheTest extends PHPUnit_Framework_TestCase {
  public function testCache() {

    $memoryCache = \Drupal\Core\Cache\MemoryBackend('test');

    $cache = new Cache($memoryCache);

    $emptyItem = $cache->get('emptyitem');

    print var_dump($emptyItem);

  }
}