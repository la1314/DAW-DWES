<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.4</title>
</head>

<body>
    <?php

    $letras = "abcdefg";
    $miarray = array();
    $nombres = array();
    array_push($nombres, "marta");
    array_push($nombres, "mateo");
    array_push($nombres, "carlos");
    array_push($nombres, "lucas");
    array_push($nombres, "eustaquio");
    array_push($nombres, "cristian");
    array_push($nombres, "maria");

    for ($i = 0; $i < strlen($letras); $i++) {

        $miarray[$letras[$i]] = $nombres[$i];
    }

    
    foreach ($miarray as $key => $valor) {

        echo($key . " ----> " . $valor . "<br>");
        $miarray[$key] = ucfirst($valor);
    }

    echo("<br>**********************<br>");
  
    foreach ($miarray as $key => $valor) {

        echo($key . " ----> " . $valor . "<br>");
    }

    ?>
</body>

</html>