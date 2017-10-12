<?php
use Phalcon\Loader;

$loader = new Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */

$loader->registerDirs(array('../app/services'));
$loader->register();
