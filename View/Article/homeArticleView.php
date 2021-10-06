<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    /**
     * @var Article $article
     */
    foreach ($articles as $article) {
        echo "<h2>" . $article->getTitle() . "</h2>";
        echo "<p>" . $article->getContent() . "</p>";
    }
    ?>
    
    <p><a href="create-article.php"> Créer un nouvel article</a></p>
    <p><a href="articles.php"> Voir tous les articles</a></p>

</body>
</html>