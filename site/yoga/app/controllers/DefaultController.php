<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Localization.php';
require_once __DIR__.'/../repository/LocalizationRepository.php';

class DefaultController extends AppController {

    public function index()
    {
        $LocalizationRepository = new LocalizationRepository();
        $Localization = new Localization();

        $local = $LocalizationRepository->getLocalization();
        $this->render('info', ['localController' => $Localization->checkFieldsLocalization($local) ]);
    }
    public function login()
    {
        $this->render('login');
    }
    public function info()
    {
        $LocalizationRepository = new LocalizationRepository();
        $Localization = new Localization();
        $local = $LocalizationRepository->getLocalization();
        $this->render('info', ['localController' => $Localization->checkFieldsLocalization($local) ]);
    }
    public function registration()
    {
        $this->render('registration');
    }

    public function articlesIndex()
    {
        $LocalizationRepository = new LocalizationRepository();
        $Localization = new Localization();
        $local = $LocalizationRepository->getLocalization();
        $this->render('articlesIndex', ['localController' => $Localization->checkFieldsLocalization($local) ]);
    }
    public function errorPage()
    {
        $this->render('404');
    }

}