<?php
/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.11
 * Time: 18.01
 */

include('Router.php');

$route = isset($_GET['route']) ? $_GET['route'] : 'index.html';

$router = new Router();
$router->setFile($route);

$router->render();