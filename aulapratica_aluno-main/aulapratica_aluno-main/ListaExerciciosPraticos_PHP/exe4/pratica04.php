<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 04</title>
</head>
<body>
<!--
Faça um algoritmo que leia o salário de um funcionário,
calcule e mostre o seu novo salário, com 15% de aumento.
-->
<div>
    <?php
        $sal = $_GET["salário"];
        $aumento = $sal + ($sal * 15 / 100);
        echo "O salário atual é $sal<br/>";
        
    ?>




</div>
</body>
</html>