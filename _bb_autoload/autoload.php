<?php


// a good place for those lines would be the init script of your application
use BumbleBee\Autoload\ButineurAutoloader;

require_once __DIR__ . '/BeeAutoloader.php';
require_once __DIR__ . '/ButineurAutoloader.php';

ButineurAutoloader::getInst()
    ->addLocation(__DIR__ . "/../modules") 
    ->start();