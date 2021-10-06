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

        echo "<h2>" . $articleId->getTitle() . "</h2>";
        echo "<p>" . $articleId->getStatus() . "</p>";
        echo "<p>" . $articleId->getContent() . "</p>";
        echo "<p>" . $articleId->getCreatedAt()->format('Y-m-d H:i:s') . "</p>";
        echo('<p><a href="./delete-article.php?id=' . $articleId->getId() . '"> Supprimer l\'article </a></p>');
    
    ?>
    
</body>
</html>