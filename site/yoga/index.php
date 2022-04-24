<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

/**
 * Get
 */
Router::get('', 'DefaultController');
Router::get('registration', 'DefaultController');
Router::get('info', 'DefaultController');
Router::get('news', 'NewsController');
Router::get('pageNewsContent', 'NewsController');
Router::get('profile', 'ProfileController');
Router::get('errorPage', 'DefaultController');
Router::get('adminIndex', 'DefaultController');
Router::get('articlesIndex', 'DefaultController');
Router::get('needToLogin', 'NeedToLoginController');
Router::get('textByNeedToLogin', 'NeedToLoginController');
Router::get('contact', 'ContactUsController');
Router::get('textByContactUs', 'ContactUsController');




Router::get('logOut', 'SecurityController');


/**
 * Post
 */
Router::post('login', 'SecurityController');
Router::post('registrationUser', 'SecurityController');
Router::post('localEn', 'LocalizationController');
Router::post('localRu', 'LocalizationController');
Router::post('localOnload', 'LocalizationController');


Router::run($path);

