<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 01</title>
</head>
<body>
<!--
Crie um programa que leia o nome e o salário de um funcionário,
mostrando no final uma mensagem. Ex:
Nome do Funcionário: Maria do Carmo
Salário: R$1.850,45
O funcionário Maria do Carmo tem um salário de R$1.850,45 em (data de hoje).
-->
<div>
    <?php
        $nome = $_GET["nome"];
        $salario = $_GET["salario"];
        $data = date("d/m/Y");
        echo "O nome do funcionário é: $nome<br/>";
        echo "o salario do funcionário é:".number_format($salario,2,",",".")."<br>";
        echo "O funcionário(a) $nome tem um salário de R$" . number_format($salario,2,",","."). " em $data";

    
    
    ?>
    <br/>
    <a href="pratica01.html"><button>Verificar</button></a>




</div>
</body>
</html>