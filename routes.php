<?php
/**
 * All routes here
 */

$router->get('', 'app/views/landingpage');
$router->post('', 'app/views/landingpage');
$router->get('Auth', 'app/views/auth');
$router->post('Auth', 'app/views/auth');

$router->get('Admin', 'app/views/Admin');
$router->post('Admin', 'app/views/Admin');

$router->get('homepage', 'app/views/homepage');
$router->post('homepage', 'app/views/homepage');

$router->get('insert', 'app/views/insert');
$router->post('insert', 'app/views/insert');
$router->get('edit', 'app/views/edit');
$router->post('edit', 'app/views/edit');
$router->get('delete', 'app/views/delete');