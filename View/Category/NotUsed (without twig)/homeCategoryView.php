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
     * @var Category $category
     */
    foreach ($categories as $category) {
        echo "<h3><font color=". $category->getColor() .">" . $category->getTitle() . "</font></h3>";
    }
    ?>


</body>
</html>