<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>

<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/css/publish.css">
    </head>
    <body>
        <!-- PHP codes -->
        
        <!-- HTML codes -->
        <div class="container-fluid">
            <?php include(ROOT_PATH . "/partials/publishHeader.php");?>
            <div class="main-container d-flex" style="background-color:#f7f8fa">
                <?php include(ROOT_PATH . "/partials/publishSidebar.php");?>  
                <?php include(ROOT_PATH . "/admin/articles/articleCreate.php");?>      
            </div>
            <?php include(ROOT_PATH . "/partials/footer.php");?>
        </div>
    </body>
</html>