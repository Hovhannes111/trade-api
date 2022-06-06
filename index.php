<?php 

require_once "system/Router.php";
// ini_set('display_errors', 'On');
// error_reporting(E_ALL);

$allMethods = array();
$methodNames = array();
$fileNames = ["Orders", "Info", "Account"]; // ADD FILE NAMES WHICH YOU MUST GET FOR YOUR METHODS 

foreach ($fileNames as $method){
    require_once "methods/". $method . ".php";
    $allMethods['ClassNames'][] = $method;
    $allMethods['Paths'][] = strtolower($method);
    if(count(get_class_methods($method)) > 2)
    {
        $methodNames[] = get_class_methods($method);
    }
}

$router = new Router();
$path = strtolower(trim($_SERVER["PATH_INFO"], '/'));

$method = null;
foreach($methodNames[0] as $elem)
{
    if(strtolower($elem) === $path)
    {
        $method = $elem;
    }
}

if(in_array($path, $allMethods['Paths']) || $method)
{

    $index = array_search($path, $allMethods['Paths']);
    $className = $allMethods['ClassNames'][$index];
    
    $router->addRoute('/' . $path, $className. '.php');
    $router->route('/' . $path);

    $param = $_GET;

    $class = new $className();
    if($path === strtolower($className)){
        $result = $class->index($param ?? null);
    } else {
        $result = $class->$method($param ?? null);
    }
    echo "<pre>";
    var_dump($result);
}
