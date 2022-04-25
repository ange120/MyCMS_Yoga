<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Localization.php';
require_once __DIR__.'/../repository/LocalizationRepository.php';

class ContactUsController extends AppController
{
    public function contact()
    {
        $LocalizationRepository = new LocalizationRepository();
        $Localization = new Localization();

        $local = $LocalizationRepository->getLocalization();
        $this->render('contact', ['localController' => $Localization->checkFieldsLocalization($local) ]);
    }

    public function textByContactUs()
    {

        $arrayKey = ['title','name', 'email','info' ,'button'];

        $LocalizationRepository = new LocalizationRepository();
        $LocalRepository = new LocalRepository();
        $local = $LocalizationRepository->getLocalization();

        if($local == 'ru'){
            $pageLocal = $LocalRepository ->getPageRuByURL('textToContactUs');
        }else{
            $pageLocal = $LocalRepository ->getPageEnByURL('textToContactUs');
        }
        $result = array_combine($arrayKey, explode("%", $pageLocal[0])) ;

        return $this->returnInfo(['pageText'=>$result]);

    }
    public function contactUsForm ()
    {
        $data = $this->PostDataJson();

        $LocalizationRepository = new LocalizationRepository();
        $LocalRepository = new LocalRepository();

        $local = $LocalizationRepository->getLocalization();

        if($local == 'ru'){
            $pageLocal = $LocalRepository ->getPageRuByURL('textByContactUs');
        }else{
            $pageLocal = $LocalRepository ->getPageEnByURL('textByContactUs');
        }
        return $this->returnInfo(['text'=> $pageLocal]);
    }
}