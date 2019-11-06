<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.3</title>
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
    
    for ($i=0; $i < strlen($letras) ; $i++) { 
        
        $miarray[$letras[$i]] = $nombres[$i];

    }

    reset($miarray);
    
    for ($i = 0; $i < count($miarray); $i++) {

        $elemento = each($miarray);

        //Cambia la primera letra a mayúscula
        $miarray[$elemento[0]] =  ucfirst($elemento[1]);
        
        echo "Posici&oacuten: " . $elemento[0] . "<br>";
        echo "Valor: " . $elemento[1] . "<br>";
    

    }

    echo("<br>******************************<br>");
    
    reset($miarray);

    for ($i = 0; $i < count($miarray); $i++) {

        $elemento = each($miarray);
        echo "Posici&oacuten: " . $elemento[0] . "<br>";
        echo "Nuevo Valor: " . $elemento[1] . "<br>";


    }
  
    ?>
</body>

</html>