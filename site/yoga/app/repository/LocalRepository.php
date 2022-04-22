<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Roles.php';


class LocalRepository extends Repository
{
    public function getPageRuByURL (string $pageName)
    {
        $stmtToPage = $this->database->prepare('SELECT page_location.text_ru
            FROM bind_page
           RIGHT OUTER JOIN page_location ON bind_page.id = page_location.id_page
            WHERE name_page = :name_page');

        $stmtToPage->bindParam(':name_page', $pageName, PDO::PARAM_STR);
        $stmtToPage->execute();
        $titlePage = $stmtToPage->fetchAll(PDO::FETCH_COLUMN, 0);

        return $titlePage;
    }

    public function getPageEnByURL (string $pageName)
    {
        $stmtToPage = $this->database->prepare('SELECT page_location.text_en
            FROM bind_page
           RIGHT OUTER JOIN page_location ON bind_page.id = page_location.id_page
            WHERE name_page = :name_page');

        $stmtToPage->bindParam(':name_page', $pageName, PDO::PARAM_STR);
        $stmtToPage->execute();
        $titlePageEn = $stmtToPage->fetchAll(PDO::FETCH_COLUMN, 0);

        return $titlePageEn;
    }
}