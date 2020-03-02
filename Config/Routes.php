<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
$routes->add('page/(:any)', '\BasicApp\Page\Controllers\Page::view/$1');
$routes->add('{locale}/page/(:any)', '\BasicApp\Page\Controllers\Page::view/$1');

$routes->add('{locale}/page/(:any)', '\BasicApp\Page\Controllers\Page::view/$1');

$routes->add('admin/page', '\BasicApp\Page\Controllers\Admin\Page::index');
$routes->add('admin/page/(:segment)', '\BasicApp\Page\Controllers\Admin\Page::$1');

$routes->add('{locale}/admin/page', '\BasicApp\Page\Controllers\Admin\Page::index');
$routes->add('{locale}/admin/page/(:segment)', '\BasicApp\Page\Controllers\Admin\Page::$1');