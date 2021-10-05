<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
    <h1>
        <?php echo $articleView->getTitle(); ?>
    </h1>
    <p>Créé le : 
        <?php echo $articleView->getCreatedAt()->format('y-m-d'); ?>
    </p>
    <p>
        <?php echo $articleView->getContent(); ?>
    </p>
    <p>Statut : 
        <?php echo $articleView->getStatus(); ?>
    </p>
    </main>
    
</body>
</html>