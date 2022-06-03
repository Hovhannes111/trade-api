<?php 

require "system/Router.php";

$allMethods = array();
$methods = array_diff(scandir('methods'), array('.', '..'));

foreach ($methods as $method){
    $data = substr($method, 0, -4);
    $allMethods['ClassNames'][] = $data;
    $allMethods['Methods'][] = strtolower($data);
}

$router = new Router();
$path = strtolower(trim($_SERVER["PATH_INFO"], '/'));

if(in_array($path, $allMethods['Methods']))
{

    $index = array_search($path, $allMethods['Methods']);
    $className = $allMethods['ClassNames'][$index];

    $router->addRoute('/' . $path, $className. '.php');
    $router->route('/' . $path);

    $class = new $className();
    $result = $class->index();
    
    echo "<pre>";
    var_dump($result);
}
