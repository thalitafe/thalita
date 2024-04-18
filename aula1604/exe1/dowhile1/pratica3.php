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
            echo" <form action='do.php' method='get'>
            valor $c: <input type='number' name='v$c' id='v1' min='0' max='100' value='0' ><br/>";
            $c++;
        }            
        ?>
        <br/>
        <button type="submit">Enviar</button>
        </form>
        
    </div>
    
</body>
</html>