<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 6.7</title>
    <style>
    
    th {
        color: red;
        background-color: yellow;
    }

    td {
        background-color: aquamarine;
    }
    
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
        
    }

    </style>

</head>
<body>

    <?php

        $letras = "abcdefghijklmnopqrstuvwxyz";
        $arrayCuenta = array();
        $cadena = "hipopotomostrosesquipedaliofobia";
        $iterando = strlen($letras);
        // echo(strpos($letras, "x"));
 
        for ($i=0; $i < $iterando; $i++) { 
            $arrayCuenta[$i] = 0; 
        }

        //Busca la posicion de la letra y suma en otra array el número de apariciones 
        for ($i=0; $i < strlen($cadena); $i++) { 
            
            $posicion = strpos($letras, $cadena[$i]);
            $arrayCuenta[$posicion]++;

        }

        echo("Numero de letras que aparecen en la palabra: " . $cadena);
        echo("<br>");
        echo("<br>");
        echo("<table>");


        for ($i=0; $i < $iterando; $i++) {

            echo("<th>".$letras[$i]."</th>");
          
        }
        
        
        echo("<tr>");
        for ($i=0; $i < $iterando; $i++) {
            
            echo("<td>".$arrayCuenta[$i]."</td>");

        }
        echo("</tr>");
        echo("</table>");
    ?>

</body>
</html>