<?php

use App\Controllers\Pages;
use App\Controllers\News;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Blog;

// Pour l'auto-routage, mais il faut supprimer les routes définies
// $routes->setAutoRoute(true);

// Controlleur par défaut 
// $routes->setDefaultController('Helloworld');
// $routes->get('/', 'Home::index');

/**
 * @var RouteCollection $routes
 */
/* $routes->get('/', 'Home::index');

$routes->get('news', [News::class, 'index']);
/*$routes->get('news/new', [News::class, 'new']); */
/* $routes->get('news/create', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']); 
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

// $routes->get('blog', '\Acme\Blog\Controllers\Blog::index');

$routes->group('blog', ['namespace' => 'Acme\Blog\Controllers'], static function ($routes) {
    $routes->get('/', 'Blog::index');
});*/

// Il faut masquer les autres configuration de routes pour que cela fonctionne
$routes->get('blog', [Blog::class, 'index']);
