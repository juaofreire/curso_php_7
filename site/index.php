<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site em PHP</title>
</head>
<body>
    
    <?php
        // include ('includes/header.php');    // Adiciona um conteúdo na página
        // require ('includes/header.php');    // Só continua seguindo o código caso o conteúdo seja pego com sucesso
        require_once ('includes/header.php');  // apenas uma vez
    ?>

    <div>
        <?php
            echo '21 - Include vs Require no PHP<br><br>';
        ?>
    </div>

    <?php
        include_once ('includes/footer.php');  // apenas uma vez
    ?>






</body>
</html>