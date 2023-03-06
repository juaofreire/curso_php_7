<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP3 em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <?php
            include_once 'helpers.php';

            if (isset($_GET['page'])) {
                if(file_exists("pages/{$_GET['page']}.php")){
                    include_once "pages/{$_GET['page']}.php";
                } else {
                    include_once 'pages/error404.php';
                }
            } else {
                include_once 'pages/albums.php';
            }
        ?>
    </div>
</body>
</html>
