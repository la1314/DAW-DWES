<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 5.7</title>

    <style>
    
  
    td:nth-child(2n+1) {
        background-color: yellow;
    }

    td:nth-child(2n) {
        background-color: aquamarine;
    }
    
    thead tr td {
        color: red;
        background-color: gray !important;
        
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

    echo("<table>");

    echo("<thead>");
    echo("<tr>");
    echo("<td colspan = \"2\" >10 Primeros números de Fibonacci</td>");

    echo("</tr>");
    echo("</thead>");

    $number1 = 0;
    $number2 = 1;
    $resultado;

    for ($i=0; $i < 100; $i++) { 

        echo("<tr>");
        
        $resultado = $number1 + $number2;

        echo("<td> suma de sequencia $number1 y $number2 </td>");
        echo("<td>$resultado</td>");

        $number1 = $number2;
        $number2 = $resultado;
        
        

        echo("</tr>");
    }

    echo("</table>");

    ?>

</body>
</html>