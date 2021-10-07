<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Articles</title>

    <link rel="stylesheet" href="../../Style/style.css">

</head>

<body>

    <h2>Articles</h2>

    <div class="add">
        <li><a href="./create-article.php">Add a new article &#8594;</a></li>
    </div>

    <div class="container">
    <?php
    /**
     * @var Article $article
     */
    foreach ($articlesView as $article) {
        echo    '<div class="child">
                <h3>' . $article->getTitle() . '</h3>
                <li><a href="./article.php?id=' . $article->getId() . '">See</a></li>
                <li><a href="./delete-article.php?id=' . $article->getId() . '">Delete</a></li>
                </div>';
    }
    ?>
    </div>
    
</body>
</html>