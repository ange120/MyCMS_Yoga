<?php

require_once 'Repository.php';

class ArticleRepository extends Repository
{
    public function getArticleListById (int $id, string $localization)
    {
        return $this->database->getRows('SELECT article.title_'.$localization.' AS title,  article.description_'.$localization.' AS description, article.img, article.date, users.name 
        FROM article 
        RIGHT OUTER JOIN users ON article.id_user = users.id
        WHERE categori_id = 1 AND status = 1');
    }
}