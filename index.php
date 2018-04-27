<?php
require './classes/Log.class.php';
require './classes/EscreveLog.class.php';
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
        $log = EscreveLog::getIntance();        
        $log::escreverLog($texto);
        ?>
    </body>
</html>
