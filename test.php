<?php

require 'vendor/autoload.php';
require 'proxy.php';

$proxy = Generatedba53babf640f4381356547ca31930c97::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
    debug_print_backtrace();

    throw new \Exception();
});

var_dump(extension_loaded('xdebug'));
var_dump(ini_get('xdebug.mode'));

var_dump($proxy);
var_dump($proxy->getConfiguration());
