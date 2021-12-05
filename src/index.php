<?php
session_start();

require 'Vendor/Core/SplClassLoader.php';
require_once 'config/autoload.php';

$router = new \Vendor\Core\Router();
$router->getController();


//Creation class
class Router 
{
  public function getController()
  {
    // Attributs
    $xml = new \DOMDocument();
    $xml->load('./config/routes.xml');
    $routes = $xml->getElementsByTagName('route');

    isset($_GET['p']) ? $path = $_GET['p'] : $path = null;

    foreach($routes as $route){
      if ($path === $route->getAttribute('p')){
        $controllerClass = 'controllers\\' . $route->getAttribute('controller');
        $action = $route->getAttribute('action');
        $params = [];
        if ($route->hasAttribute('params')){
          $keys = explode(',', $route->getAttribute('params'));
          foreach ($keys as $key){
            $params[$keys] = $_GET[$key];
          }
        }
        return new $controllerClass($action,$params);
      }
    }
    return new ErrorController('noRoute');
  }
};
?>