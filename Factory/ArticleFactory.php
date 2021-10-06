<?php

require_once(ROOT . '/Model/Article.php');

class ArticleFactory
{
    public function createArticle(string $title, string $content): Article
    {
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);

        return $article;
    }

    // public function createArticles(int $nbArticles): array
    // {
    //     $articles = [];

    //     for ($i = 1; $i <= $nbArticles; $i++) {
    //         $article = $this->createArticle("Article " . $i, "C'est un article");
    //         $articles[] = $article;
    //     }

    //     return $articles;
    // }

    public function createArticleFromDb(array $articleFromDb): Article
    {
        $articleEntity = new Article();
        $articleEntity->setId($articleFromDb['id']);
        $articleEntity->setTitle($articleFromDb['title']);
        $articleEntity->setStatus($articleFromDb['status']);
        $articleEntity->setContent($articleFromDb['content']);
        $articleEntity->setCreatedAt(new \DateTime($articleFromDb['created_at']));

        return $articleEntity;
    }

    public function createArticlesFromDb(int $nbArticles): array
    {
        $articles = [];

        for ($i = 1; $i <= $nbArticles; $i++) {
            $article = $this->createArticleFromDb("Article " . $i, "C'est un article");
            $articles[] = $article;
        }

        return $articles;
    }
}
