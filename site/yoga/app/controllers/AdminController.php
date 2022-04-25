<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/NewsArticleRepository.php';
require_once __DIR__ . '/../repository/Repository.php';
require_once __DIR__ . '/../repository/UploadPhotoRepository.php';

class AdminController extends AppController
{
    private function checkAdminStatus()
    {
        if ($_SESSION['admin'] !== 1) {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/articlesIndex");
        }
    }

    public function adminIndex()
    {
        $this->checkAdminStatus();

        $UserRepository = new UserRepository();

        $user = $UserRepository->getInfoUserByUuid($_SESSION['user']);

        $this->render('adminIndex', ['userName' => $user['name']]);
    }

    /*News Page*/

    public function adminNews()
    {
        $this->checkAdminStatus();

        $Repository = new Repository();
        $UserRepository = new UserRepository();
        $NewsArticleRepository = new NewsArticleRepository();

        $user = $UserRepository->getInfoUserByUuid($_SESSION['user']);

        $newsList = $NewsArticleRepository->getNewsToAdmin();

        $heatTable = $Repository->getColumns('news_article');

        $this->render('adminNews', ['userName' => $user['name'], 'newsList' => $newsList, 'heatTable' => $heatTable]);
    }


    public function getNewsToUpdate()
    {
        $data = $this->PostDataJson();

        $NewsArticleRepository = new NewsArticleRepository();

        $news = $NewsArticleRepository->getNewsById($data['id']);

        return $this->returnInfo($news);
    }

    public function updateNews()
    {
        $data = $this->PostDataJson();

        $NewsArticleRepository = new NewsArticleRepository();

        $NewsArticleRepository->updateNews($data);

        $this->returnInfo(['status' => 200]);
    }

    public function AddNews()
    {
        $data = $this->PostDataJson();

        $NewsArticleRepository = new NewsArticleRepository();

        $NewsArticleRepository->AddNews($data);

        $this->returnInfo(['status' => 200]);
    }

    public function deleteArticleNews()
    {
        $data = $this->PostDataJson();

        $NewsArticleRepository = new NewsArticleRepository();

        $NewsArticleRepository->deleteNewsById($data['id']);

        $this->returnInfo(['status' => 200]);
    }

    /*UploadPhoto*/

    public function adminUploadPhoto()
    {
        $this->checkAdminStatus();

        $UserRepository = new UserRepository();
        $UploadPhotoRepository = new UploadPhotoRepository();

        $user = $UserRepository->getInfoUserByUuid($_SESSION['user']);
        $photo = $UploadPhotoRepository->checkPhoto();

        $this->render('adminUploadPhoto', ['userName' => $user['name'], 'photo' => $photo]);
    }

    public function adminAddNewPhoto ()
    {
        $data = $this->PostDataJson();

        $UploadPhotoRepository = new UploadPhotoRepository();

        $UploadPhotoRepository->addNewPhoto($data['photo'],$data['name']);

        $this->returnInfo(['status' => 200]);
    }
}