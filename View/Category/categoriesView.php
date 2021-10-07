<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Categories</title>

    <link rel="stylesheet" href="../../Style/style.css">

</head>
<body>

    <h2>Categories</h2>

    <div class="add">
        <li><a href="./create-category.php">Add a new category &#8594;</a></li>
    </div>

    <div class="container">
    <?php
    /**
     * @var Category $category
     */
    foreach ($categoriesView as $category) {
        echo    '<div class="child">
                <h3><font color="'. $category->getColor() .'">' . $category->getTitle() . '</font></h3>
                <li><a href="./category.php?id=' . $category->getId() . '">See</a></li>
                <li><a href="./delete-category.php?id=' . $category->getId() . '">Delete</a></li>
                </div>';
    }
    ?>
    </div>
    
</body>
</html>