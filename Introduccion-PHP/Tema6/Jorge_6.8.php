<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 6.8</title>
</head>

<body>

    <?php

        $cadena = "Hipopotomonstrosesquipedaliofobia";
        $iterando = strlen($cadena);
        $impar = false;

        if ($iterando % 2 != 0) {
            $iterando--;
            $impar = true;
        }

        //Codifica
        $codificado;
        for ($i = 0; $i < $iterando; $i = $i + 2) {

            $codificado = $codificado . substr($cadena, $i+1, 1) . substr($cadena, $i, 1);
        }

        if ($impar) {
            $codificado .= $cadena[($iterando)];
        }

        echo ("Cadena sin codificar: " . $cadena);
        echo ("<br>");
        echo ("Codificado: " . $codificado);
        //Descodifica

       $descodificado;
        for ($i = 0; $i < $iterando; $i = $i + 2) {

            $descodificado = $descodificado . substr($codificado, $i+1, 1) . substr($codificado, $i, 1);

        }

        if ($impar) {
            $descodificado .= $cadena[($iterando)];
        }

        echo ("<br>");
        echo ("Descodificado: " . $descodificado);

    ?>

</body>

</html>