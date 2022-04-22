<?php

require_once 'AppController.php';
require_once 'DefaultController.php';
require_once __DIR__.'/../models/Localization.php';
require_once __DIR__.'/../repository/LocalRepository.php';

class LocalizationController extends AppController
{
    public function localRu()
    {
        $_SESSION['loc'] = 'ru';
        $data = $this->PostDataJson();
        $local = new LocalRepository();

        $text = $local->getPageRuByURL($data['page']);
        $header = $local->getPageHeaderRu();
        $footer = $local->getPageFooterRu();
        $this->returnInfo(["page" => $text[0], 'header' => $header[0], "footer" => $footer[0]]);
    }

    public function localEn()
    {
        $_SESSION['loc'] = 'en';

        $data = $this->PostDataJson();
        $local = new LocalRepository();

        $text = $local->getPageEnByURL($data['page']);
        $header = $local->getPageHeaderEn();
        $footer = $local->getPageFooterEn();
        $this->returnInfo(["page" => $text[0], 'header' => $header[0], "footer" => $footer[0]]);
    }

    public function localOnload ()
    {
        if($_SESSION['loc'] == 'en'){
            $this->localEn();
        }
        if($_SESSION['loc'] == 'ru'){
            $this->localRu();
        }
    }
}