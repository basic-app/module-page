<?php

$routes->add('page/(:any)', 'BasicApp\Page\Controllers\Page::view/$1');

$routes->add('admin/page', 'BasicApp\Page\Controllers\Admin\Page::index');
$routes->add('admin/page/(:segment)', 'BasicApp\Page\Controllers\Admin\Page::$1');