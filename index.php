<?php
require dirname(__DIR__) . '/forma-loc/autoload.php';
use app\rule\Application;
$app = new Application();
$app->router->get('/', 'app\controller\Controller'.'::index');
$app->router->post('/add-user', 'app\controller\Controller'.'::add_user');
$app->run();