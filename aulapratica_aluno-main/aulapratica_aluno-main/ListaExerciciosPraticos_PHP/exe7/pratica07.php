<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 07</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
<!--
Escreva um programa que pergunte a velocidade de um carro.
Caso ultrapasse 80Km/h, exiba uma mensagem dizendo que o
usuário foi multado. Nesse caso, exiba o valor da multa,
cobrando R$5 por cada Km acima da velocidade permitida.
-->
<div>
    <?php
    $car_vel = $_GET["velocidade"];
    $vel_max = 80;
    $vel_ultra = $car_vel - $vel_max;
    $vel_multa = $vel_ultra * 5;
    if ($car_vel > 80) {
        echo "Voçê foi multado<br/>";
        echo "Sua velocidade foi de $car_vel Km/h <br/>";
        echo "Voçê ultrapassou a velocidade máxima de $vel_max KM/h <br/>";
        echo "portanto o valor de sua multa é de: R$". number_format($vel_ultra,2,",",".") ."<br/>";
        echo "<span>----R$". number_format($vel_multa ,2,",",".".").---</span>";       
    }
    else {
        echo "Boa Viagem! Siga em frente";

    }



    
    
    ?>
    <br/>
    <a href="pratica07.html"><button>Voltar</button></a>




</div>
</body>
</html>