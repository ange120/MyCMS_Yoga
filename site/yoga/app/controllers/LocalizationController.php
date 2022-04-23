<?php

require_once 'AppController.php';
require_once 'DefaultController.php';
require_once __DIR__.'/../models/Localization.php';
require_once __DIR__.'/../repository/LocalRepository.php';
require_once __DIR__.'/../repository/LocalizationRepository.php';

class LocalizationController extends AppController
{
    public function localRu()
    {
        $LocalizationRepository = new LocalizationRepository();
        $LocalizationRepository->updateLocalization('ru');
        $data = $this->PostDataJson();
        $local = new LocalRepository();

        $text = $local->getPageRuByURL($data['page']);
        $header = $local->getPageHeaderRu();
        $footer = $local->getPageFooterRu();
        $this->returnInfo(["page" => $text[0], 'header' => $header[0], "footer" => $footer[0]]);
    }

    public function localEn()
    {
        $LocalizationRepository = new LocalizationRepository();
        $LocalizationRepository->updateLocalization('en');

        $data = $this->PostDataJson();
        $local = new LocalRepository();

        $text = $local->getPageEnByURL($data['page']);
        $header = $local->getPageHeaderEn();
        $footer = $local->getPageFooterEn();
        $this->returnInfo(["page" => $text[0], 'header' => $header[0], "footer" => $footer[0]]);
    }

    public function localOnload ()
    {

        $LocalizationRepository = new LocalizationRepository();

        $local = $LocalizationRepository->getLocalization();

        if($local == 'en'){
            $this->localEn();
        }
        if($local == 'ru'){
            $this->localRu();
        }
    }
}