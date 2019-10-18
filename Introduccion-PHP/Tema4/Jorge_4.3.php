<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 4.3</title>
</head>
<body>
    
    <?php

        $año = 2098;

        if ( ($año % 4) == 0 && ( ($año % 100) != 0 || ($año % 400) == 0 ) ) {

            echo("Año bisiesto");

        } else {

            echo("Año no bisiesto");

        }
        

    ?> 

</body>
</html>