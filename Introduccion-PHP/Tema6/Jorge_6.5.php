<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 6.5</title>
</head>
<body>
    
    <?php

        $cadena = "Murciegalo asesino de la muerte mortal mortifera";
        $iterando = strlen($cadena);

        for ($i=0; $i < $iterando; $i++) { 
            
            if ($cadena[$i] == "a") {
                $cadena[$i] = "e";
            }elseif ($cadena[$i] == "e") {
                $cadena[$i] = "i";
            }elseif ($cadena[$i] == "i") {
                $cadena[$i] = "o";
            }elseif ($cadena[$i] == "o") {
                $cadena[$i] = "u";
            }elseif ($cadena[$i] == "u") {
                $cadena[$i] = "a";
            }

        }

        echo("Codificado: <br>");
        echo($cadena);
        echo("<br>");
        echo("<br>");

        for ($i=0; $i < $iterando; $i++) { 
            
            if ($cadena[$i] == "e") {
                $cadena[$i] = "a";
            }elseif ($cadena[$i] == "i") {
                $cadena[$i] = "e";
            }elseif ($cadena[$i] == "o") {
                $cadena[$i] = "i";
            }elseif ($cadena[$i] == "u") {
                $cadena[$i] = "o";
            }elseif ($cadena[$i] == "a") {
                $cadena[$i] = "u";
            }

        }

        echo("Descodificado: <br>");
        echo($cadena);

    ?>

</body>
</html>