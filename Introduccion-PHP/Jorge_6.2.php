<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 6.2</title>
</head>
<body>

    <?php
    
        $cadena = "Potato Slayer";
        $invertido;

        for ($i= strlen($cadena)-1; $i >= 0; $i--) { 

            
            $invertido .= $cadena[$i];
        }

        echo($cadena . "<br>");
        echo($invertido);

    ?>

</body>
</html>