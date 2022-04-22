<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Localization.php';

class DefaultController extends AppController {

    public function index()
    {
        $localFields = new Localization();
        $this->render('info', ['localController' => $localFields->checkFieldsLocalization($_SESSION['loc']) ]);
    }
    public function login()
    {
        $this->render('login');
    }
    public function info()
    {
        $localFields = new Localization();
        $this->render('info', ['localController' => $localFields->checkFieldsLocalization($_SESSION['loc']) ]);
    }
    public function registration()
    {
        $this->render('registration');
    }

    public function adminIndex()
    {
        $this->render('adminIndex');
    }
    public function articlesIndex()
    {
        $this->render('articlesIndex');
    }
    public function errorPage()
    {
        $this->render('404');
    }

}