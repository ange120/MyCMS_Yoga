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

    public function getNewsToAdmin ()
    {
        return $this->database->getRows ('SELECT * FROM news_article');
    }

    public function getNewsById (int $id)
    {
        $stmt = $this->database->prepare('
            SELECT * FROM news_article WHERE id = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $news = $stmt->fetch(PDO::FETCH_ASSOC);
        return $news;

    }

    public function AddNews (array $data)
    {
        $stmt = $this->database->prepare('
           UPDATE `news_article` SET `title_en` = :title_en,`title_ru` = :title_ru,
                                  `description_en` = :description_en, `description_ru` = :description_ru,
                                  `author` = :author, `img` = :img,`date` = :date
        ');
        $stmt = $this->database->prepare('
            INSERT INTO  `news_article` ( `title_en`,`title_ru`,`description_en`,`description_ru`,`author`,`img`,`date`)
                VALUE (:title_en, :title_ru, :description_en, :description_ru, :author, :img, :date)
        ');
        $stmt->bindParam(':title_en', $data['title_en'], PDO::PARAM_STR);
        $stmt->bindParam(':title_ru', $data['title_ru'], PDO::PARAM_STR);
        $stmt->bindParam(':description_en', $data['description_en'], PDO::PARAM_STR);
        $stmt->bindParam(':description_ru', $data['description_ru'], PDO::PARAM_STR);
        $stmt->bindParam(':author', $data['author'], PDO::PARAM_STR);
        $stmt->bindParam(':img', $data['img'], PDO::PARAM_STR);
        $stmt->bindParam(':date', $data['date'], PDO::PARAM_STR);

        $stmt->execute();
    }

    public function updateNews (array $data)
    {
        $stmt = $this->database->prepare('
           UPDATE `news_article` SET `title_en` = :title_en,`title_ru` = :title_ru,
                                  `description_en` = :description_en, `description_ru` = :description_ru,
                                  `author` = :author, `img` = :img,`date` = :date
                                   WHERE `id` = :id
        ');

        $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
        $stmt->bindParam(':title_en', $data['title_en'], PDO::PARAM_STR);
        $stmt->bindParam(':title_ru', $data['title_ru'], PDO::PARAM_STR);
        $stmt->bindParam(':description_en', $data['description_en'], PDO::PARAM_STR);
        $stmt->bindParam(':description_ru', $data['description_ru'], PDO::PARAM_STR);
        $stmt->bindParam(':author', $data['author'], PDO::PARAM_STR);
        $stmt->bindParam(':img', $data['img'], PDO::PARAM_STR);
        $stmt->bindParam(':date', $data['date'], PDO::PARAM_STR);

        $stmt->execute();
    }
    public function deleteNewsById (int $id)
    {
        $stmt = $this->database->prepare('
            DELETE FROM `news_article` WHERE `id` = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

}