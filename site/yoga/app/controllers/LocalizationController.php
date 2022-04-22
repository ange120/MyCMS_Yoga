<?php

require_once 'AppController.php';
require_once 'DefaultController.php';
require_once __DIR__.'/../repository/LocalRepository.php';

class LocalizationController extends AppController
{
    public function localRu()
    {
        $data = $this->PostDataJson();
        $local = new LocalRepository();

        $text = $local->getPageRuByURL($data['page']);

        $this->returnInfo(["page" => $text]);
    }

    public function localEn()
    {
        $data = $this->PostDataJson();
        $local = new LocalRepository();

        $text = $local->getPageEnByURL($data['page']);

        $this->returnInfo(["page" => $text]);
    }
}