<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana</title>
    <style>
        span{
            font-size: 30px;
        }
        button{
            margin-left:10px ;
            padding: 5px;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div>
    <?php
        $dia = $_GET["dias"];
        switch ($dia) {
            case 1:
            case 2;
            case 3;
            case 4;
            case 5;
                $r = "Hoje tem aula. \u{1f60f}";
                break;
            case 6;
            case 7;
                $r = "<span>Não tem aula.</span> \u{1f917}";            
                
        }
        echo "$r";
        
     
    ?>
    <br/>
    <a href="pratica2.html"><button>Voltar&#x2b05</button></a>
    </div>
</body>
</html>