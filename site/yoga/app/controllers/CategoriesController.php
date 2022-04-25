<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/LocalizationRepository.php';
require_once __DIR__.'/../repository/CategoriesRepository.php';
require_once __DIR__.'/../repository/ArticleRepository.php';

class CategoriesController extends AppController
{
    public function categories ()
    {
        $LocalizationRepository = new LocalizationRepository();
        $local = $LocalizationRepository->getLocalization();
        $categories = new CategoriesRepository();

        $this->returnInfo($categories->getActiveRepository($local));
    }

    public function categoriesToArticle ()
    {
        $LocalizationRepository = new LocalizationRepository();
        $Localization = new Localization();

        $local = $LocalizationRepository->getLocalization();

        return $this->render('articlesInfo', ['localController' => $Localization->checkFieldsLocalization($local)]);
    }
    public function articlePageInfo ()
    {
        $data = $this->PostDataJson();
        $article = new ArticleRepository();

        $LocalizationRepository = new LocalizationRepository();


        $local = $LocalizationRepository->getLocalization();

        $pageList = $article->getArticleListById($data['id'],$local);

        return $this->returnInfo($pageList);
    }
}