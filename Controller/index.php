<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" href="../Style/style.css">

</head>
<body>

    <h1>Blog</h1>
    
    <div class="container">
        <li><a href="#">Home</a></li>
        <li><a href="Category/categories.php">Categories</a></li>
        <li><a href="Article/articles.php">Articles</a></li>
        <li><a href="User/connect-user.php">Log In</a></li>
        <li><a href="User/register-user.php"> Sign Up</a></li>
    </div>

    <div class="container">

        <section>

            <h3>Latest Categories:</h3>
            <?php
                require_once('../Config/config.php');

                require_once(ROOT . "/Model/Entity/Category.php");
                require_once(ROOT . "/Model/Database/MySQLDatabaseConnection.php");
                require_once(ROOT . '/Model/Repository/CategoryRepository.php');


                $categoryRepository = new CategoryRepository();
                $categories = $categoryRepository->findLasts(3);

                // require_once(ROOT . '/View/Category/homeCategoryView.php');
                echo $twig->render('Category/home.html.twig', [
                    'categories'=>$categories
                ]);

            ?>
        </section>

        <section>

            <h3>Latest Articles:</h3>
            <?php
                require_once('../Config/config.php');

                require_once(ROOT . "/Model/Entity/Article.php");
                require_once(ROOT . "/Model/Database/MySQLDatabaseConnection.php");
                require_once(ROOT . '/Model/Repository/ArticleRepository.php');

                $articleRepository = new ArticleRepository();
                $articles = $articleRepository->findLasts(3);
        
                // require_once(ROOT . '/View/Article/homeArticleView.php');
                echo $twig->render('Article/home.html.twig', [
                    'articles'=>$articles
                ]);

            ?>
        </section>

    </div>

</body>
</html>