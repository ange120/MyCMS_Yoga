<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Localization.php';

class newsController extends AppController
{
    public function news ()
    {
        $localFields = new Localization();

        return $this->render('news', ['localController' => $localFields->checkFieldsLocalization($_SESSION['loc']) ]);
    }
}