<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>
    <div>
        <?php
            $c = 1;
            while ($c <= 5) {
                $v = "num".$c;/* Criadora das variáveis que irão receber os valores*/
                $user = "v".$c;/* Variável que irá receber os valores do usuário*/
                $$v = $_GET["$user"];
                $c ++;

            }
            echo "$num1 $num2 $num3 $num4 $num5";
        ?>
        <br/>
        <a href="pratica3.php"><button>Voltar</button></a>
    </div>
    
</body>
</html>