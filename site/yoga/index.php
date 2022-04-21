<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

/**
 * Get
 */
Router::get('', 'DefaultController');
Router::get('registration', 'DefaultController');
Router::get('info_En', 'DefaultController');
Router::get('info_Ru', 'DefaultController');
Router::get('profile', 'ProfileController');
Router::get('errorPage', 'DefaultController');
Router::get('adminIndex', 'DefaultController');
Router::get('articlesIndex', 'DefaultController');

Router::get('localRu', 'LocalizationController');
Router::get('localEn', 'LocalizationController');

Router::get('logOut', 'SecurityController');


/**
 * Post
 */
Router::post('login', 'SecurityController');
Router::post('registrationUser', 'SecurityController');


Router::run($path);
