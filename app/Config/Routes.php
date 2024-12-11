<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Accueil::index', ['as' => 'accueil']);
$routes->get('/fantasy', 'Fantasy::index', ['as' => 'fantasy']);
$routes->get('/forum', 'Forum::index', ['as' => 'forum']);
$routes->get('/isekai', 'Isekai::index', ['as' => 'isekai']);
$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->get('/memberlist', 'Memberlist:index', ['as' => 'memberlist']);
$routes->get('/settings', 'Settings::index', ['as' => 'settings']);
$routes->get('/register', 'Register::index', ['as' => 'register']);
$routes->get('/romance', 'Romance::index', ['as' => 'romance']);
$routes->get('/seinen', 'Seinen::index', ['as' => 'seinen']);
$routes->get('/shojo', 'Shojo::index', ['as' => 'shojo']);
$routes->get('/shonen', 'Shonen::index', ['as' => 'shonen']);
$routes->get('/shop', 'Shop::index', ['as' => 'user_shop']);


