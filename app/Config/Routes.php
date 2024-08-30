<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/product', 'Product::index');
$routes->get('/product/create', 'Product::create');
$routes->post('/product/store', 'Product::store');
$routes->get('/order', 'Order::index');
$routes->get('/order/create', 'Order::create');
$routes->post('/order/store', 'Order::store');


$routes->get('/', 'HomeController::index');
$routes->get('/purchase', 'PurchaseController::index');
$routes->get('/checkout', 'CheckoutController::index');
$routes->get('/myorder', 'MyorderController::index');
$routes->delete('/delete-product/(:num)', 'Product::deleteProduct/$1');
