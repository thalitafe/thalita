<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multa de transito</title>      
    
    
</head>
<body>
    <div>
        <?php
        $vel_car = $_GET["velocidade"];
        $vel_max = 80;
        $vl_ultra = $vel_car - $vel_max;
        $vl_multa = $vl_ultra * 5;
        if ($vel_car > 80) {
            echo "Voçê foi multado!<br/>";
            echo "Sua velocidade foi de $vel_car Km/h.<br/>";
            echo "Voçê ultrapassou $vl_ultra Km/h.<br/>";    
            echo "Portanto o valor da sua multa é de:</br>";
            echo "<span>---\u{1f4b0}R$". number_format($vl_multa,2,",",".")."\u{1f4b0}----</span<br/>";
            
        }
        else {
            echo "<h2>Boa viagem! Siga em frente!<h2>";
        }       
        
        
        ?>
        <br/>
        <a href="pratica1.html"><button type="button">Voltar</button></a>
    </div>
 
    
    
</body>
</html>