<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 03</title>
    <style>
        span{
            color: blue;
        }
        div{
            font-size: 30px;
        }
    </style>
</head>
<body>
<!--
Crie um programa que leia o preço de um produto,
calcule e mostre o seu PREÇO PROMOCIONAL,
com 5% de desconto.
-->
<div>
    <?php
        $v1 = $_GET["preço"];
        $desc = $v1 - ($v1 * 5 / 100);
        echo "valor do produto: $v1<br/>";
        echo "valor com desconto de 5% <span>R$". number_format($desc, 2,",",".")."</span>";
    
    ?>




</div>
</body>
</html>