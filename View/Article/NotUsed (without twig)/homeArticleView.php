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
        echo "<h3>" . $article->getTitle() . "</h3>";
        echo "<p>" . $article->getContent() . "</p>";
    }
    ?>

</body>
</html>