<?php

use App\Classes\Route;
use App\Controllers\QuoteController;

$routes = new Route;

$routes->get('/', function() {
    return 'Hello';
});

$routes->get('dog', function() {
    return 'Woof!';
});

$routes->get('cat', function() {
    return 'Meow';
});

$routes->get('quote', [QuoteController::class, 'index']);