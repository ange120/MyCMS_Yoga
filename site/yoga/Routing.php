<?php

require_once 'app/controllers/DefaultController.php';
require_once 'app/controllers/SecurityController.php';
require_once 'app/controllers/LocalizationController.php';
require_once 'app/controllers/NewsController.php';
require_once 'app/controllers/NeedToLoginController.php';
require_once 'app/controllers/ContactUsController.php';
require_once 'app/controllers/CategoriesController.php';
require_once 'app/controllers/AdminController.php';

//Test
class Router {

  public static $routes;

  public static function get($url, $view) {
    self::$routes[$url] = $view;
  }

  public static function post($url, $view)
  {
      self::$routes[$url] = $view;
  }

  public static function run ($url) {
    $action = explode("/", $url)[0];
    if (!array_key_exists($action, self::$routes)) {
        $action = 'errorPage';
    }

    $controller = self::$routes[$action];
    $object = new $controller;
    $action = $action ?: 'index';

    $object->$action();
  }
}