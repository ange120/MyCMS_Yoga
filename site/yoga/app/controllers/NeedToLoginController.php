<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/LocalizationRepository.php';
require_once __DIR__ . '/../repository/LocalRepository.php';

class NeedToLoginController extends AppController
{
    public function needToLogin ()
    {
        return $this->render('needToLogin');
    }
    public function textByNeedToLogin ()
    {
        $arrayKey = ['head','text','button'];

        $LocalizationRepository = new LocalizationRepository();
        $LocalRepository = new LocalRepository();
        $local = $LocalizationRepository->getLocalization();

        if($local == 'ru'){
            $pageLocal = $LocalRepository ->getPageRuByURL('text_needToLogin');
        }else{
            $pageLocal = $LocalRepository ->getPageEnByURL('text_needToLogin');
        }
        $result = array_combine($arrayKey, explode("%", $pageLocal[0])) ;

        return $this->returnInfo(['pageText'=>$result]);
    }
}