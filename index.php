<?php
/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.11
 * Time: 18.01
 */

include('Router.php');

$router = new Router();
$router->setFile('index.html');

echo $router->render();