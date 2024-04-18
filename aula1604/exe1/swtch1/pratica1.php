<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíz Quadrada</title>
</head>
<body>
    <?php
    $n= $_GET["num"];
    $o = $_GET["oper"];
    switch ($o) {
        case 1:
            $o = $n * 2;
            break;
        
        case 2:
            pow($n, 3);
            break;

        case 3;
            $o = sqrt($o);
    }
    echo "O resultado da solicitaçaõ é $o";
    
    ?>
    <a href="pratica1.html"><button>Voltar</button></a>
    
</body>
</html>