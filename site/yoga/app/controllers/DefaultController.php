<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('info_En');
    }
    public function login()
    {
        $this->render('login');
    }
    public function info_En()
    {
        $this->render('info_En');
    }
    public function info_Ru()
    {
        $this->render('info_Ru');
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