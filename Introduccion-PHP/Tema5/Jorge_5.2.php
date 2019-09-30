<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 5.2</title>

    <style>
    
    thead tr td {
        color: red;
        
    }

    td:nth-child(2n+1) {
        background-color: yellow;
    }

    td:nth-child(2n) {
        background-color: aquamarine;
    }
    
    table, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
        
    }

    </style>

</head>
<body>
    
    <?php

        $iterando = 1;
        $tablas = 1;

        echo("<table>");
        
        echo("<thead>");
        echo("<tr>");

        while ($tablas < 11) {
            
            echo("<td> Tabla del $tablas</td>");

            $tablas++;
        }

        echo("</tr>");
        echo("</thead>");

        while ($iterando < 11) {
           
            echo("<tr>");
            
            $i = 1;

            while ($i < 11) {
                $resultado = $iterando * $i;

                echo("<td>$resultado</td>");
                $i++;
            }

            echo("</tr>");

            $iterando++;
        }

        echo("</table>");

    ?>

</body>
</html>