<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 3.5</title>
</head>
<body>

    <?php

        $sistemaOperativo = PHP_OS_FAMILY;
        
        echo("El sistema operativo actual para la que se construyó PHP es: $sistemaOperativo <br>");

        $maximoValor = PHP_INT_MAX;
        $minimoValor = PHP_INT_MIN;

        echo("El valor maximo admitido por PHP es: $maximoValor y el valor mínimo es $minimoValor <br>");
        
        $maxDigRedondeables = PHP_FLOAT_DIG ; 
        echo("El número de dígitos decimales que se pueden redondear en un float y revertirlos si pédida de precisión es de: " . $maxDigRedondeables . "<br>");

        $versionActual = PHP_VERSION;

        echo("La versión actual de PHP es: " . $versionActual . "<br>");

    ?>
    
</body>
</html>