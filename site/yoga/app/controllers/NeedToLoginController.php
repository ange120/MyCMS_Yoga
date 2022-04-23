<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Localization.php';
require_once __DIR__ . '/../repository/LocalizationRepository.php';

class NeedToLoginController extends AppController
{
    public function needToLogin ()
    {
        $LocalizationRepository = new LocalizationRepository();
        $Localization = new Localization();

        $local = $LocalizationRepository->getLocalization();

        return $this->render('needToLogin');
    }
}