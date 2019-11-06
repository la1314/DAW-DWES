<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.2</title>
</head>

<body>

    <?php

    $miarray = array();
    $abecedario = "abcdefghijklmnopqrstuvwxyz";

    for ($i = 0; $i < strlen($abecedario); $i++) {

        $miarray[$abecedario[$i]] = "Letra número " . ($i + 1);
    }

    print_r($miarray);
    echo("<br>");
    echo("<br>");

    $iterador = count($miarray);
    end($miarray);

    for ($i = 0; $i < $iterador; $i++) {
        echo "Elemento: " . current($miarray) . "<br>";
        prev($miarray);
    }


    ?>

</body>

</html>