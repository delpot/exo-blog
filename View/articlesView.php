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
    foreach ($articlesView as $article) {
        echo "<h2>" . $article->getTitle() . "</h2>";
        echo '<a href="./article.php?id=' . $article->getId() . '">Voir l\'article</a><br>';
        echo '<a href="./delete-article.php?id=' . $article->getId() . '"> Supprimer l\'article</a><br>';
    }
    
    ?>
    
</body>
</html>