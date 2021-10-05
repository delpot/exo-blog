<?php

require_once('../Model/Article.php');
require_once('../Model/EntityManager.php');

class ArticleFactory
{
    
    // public function createArticle(string $title, string $content): Article
    // {
    //     //$entityManager = new EntityManager();

    //     $article = new Article();
    //     $article->setTitle($title);
    //     $article->setContent($content);

    //     //$entityManager->persistArticle($article);

    //     return $article;
    // }

    // // public function createArticles(int $number): array
    // // {
    // //     $Articles = array();

    // //     for($num=0; $num<=$number; $num++) {
    // //         $article = self::createArticle("Voici un titre", "Voici un contenu");
    // //         array_push($Articles, $article);
    // //     }

    // //     return $Articles;
    // // }

    public function createArticle(string $title, string $content): Article
    {
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);

        return $article;
    }

    public function createArticles(int $nbArticles): array
    {
        $articles = [];

        for ($i = 1; $i <= $nbArticles; $i++) {
            $article = $this->createArticle("Article " . $i, "C'est un article");
            $articles[] = $article;
        }

        return $articles;
    }

    // public function getAllArticles(): array
    // {
    //     $entityManager = new EntityManager();

    //     $articlesBdd = $entityManager->recupArticles();

    //     $listArticles = [];
    //     foreach  ($articlesBdd as $row) {
    //         // row ( 
    //         // [id] => 1 
    //         // [title] => Article Factory 
    //         // [created_at] => 2021-10-04 14:55:30 
    //         // [content] => C'est un design patern 
    //         // [status] => draft  ) 
        
    //         $article = new Article();
    //         $article->setId($row['id']);
    //         $article->setTitle($row['title']);
    //         $article->setContent($row['content']);
    //         $article->setStatus($row['status']);
    //         //$article->setCreatedAt($row['created-at']->format('Y-m-d H:i:s'));

    //         array_push($listArticles, $article);
    //     }
        
    //     return $listArticles;
    // }
    

}
