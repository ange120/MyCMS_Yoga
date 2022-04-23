<?php

require_once 'Repository.php';

class NewsArticleRepository extends Repository
{
    /**
     * @param string $localization
     * @return array
     */
    public function getAllNews (string $localization)
    {
        return $this->database->getRows('SELECT news_article.title_'.$localization.' AS title ,news_article.description_'.$localization.' AS description,news_article.`img`,news_article.`date`,users.`name`'
            .'FROM news_article
            JOIN users ON news_article.`author` = users.id');
    }
}