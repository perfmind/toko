<?php

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('homepage', new Route('/', ['controller' => HomeController::class, 'method' => 'index']));
$routes->add('login', new Route('/login', ['controller' => AuthController::class, 'method' => 'login']));
