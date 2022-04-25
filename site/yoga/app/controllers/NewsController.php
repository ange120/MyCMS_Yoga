<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Localization.php';
require_once __DIR__ . '/../repository/LocalizationRepository.php';
require_once __DIR__ . '/../repository/NewsArticleRepository.php';

class newsController extends AppController
{
    public function news()
    {
        $LocalizationRepository = new LocalizationRepository();
        $Localization = new Localization();

        $local = $LocalizationRepository->getLocalization();

        return $this->render('news', ['localController' => $Localization->checkFieldsLocalization($local)]);
    }

    public function pageNewsContent ()
    {
        $LocalizationRepository = new LocalizationRepository();
        $local = $LocalizationRepository->getLocalization();
        $articleNews = new NewsArticleRepository();

        $this->returnInfo($articleNews->getAllNews($local));


    }
}