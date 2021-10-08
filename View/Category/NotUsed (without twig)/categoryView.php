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

        echo "<h2>" . $categoryId->getTitle() . "</h2>";
        echo "<p>" . $categoryId->getStatus() . "</p>";
        echo "<p>" . $categoryId->getColor() . "</p>";
        echo "<p>" . $categoryId->getCreatedAt()->format('Y-m-d H:i:s') . "</p>";
        echo('<p><a href="./delete-category.php?id=' . $categoryId->getId() . '"> Supprimer la categorie </a></p>');
    
    ?>
    
</body>
</html>