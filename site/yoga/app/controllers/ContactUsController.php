<?php

require_once 'AppController.php';

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

        $arrayKey = ['head', 'text',  'name', 'email', 'button', 'info'];

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
}