<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'Shop::index');
#
$routes->get('/shop/products', 'Shop::products');
$routes->get('/shop/product/(:any)', 'Shop::product/$1');
#
$routes->get('/admin/shop', 'Admin\Shop::index');
$routes->get('/admin/shop/(:any)', 'Admin\Shop::page/$1');
