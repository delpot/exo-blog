<?php

require_once('../Model/Article.php');

class ArticleFactory
{
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
}
