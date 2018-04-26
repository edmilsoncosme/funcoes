<?php
require './classes/Log.class.php'
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $texto = "To escrevendo";
            $log = new Log();
            $log->escreverLog($texto);
            
            
        ?>
    </body>
</html>
