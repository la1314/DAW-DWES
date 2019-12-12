<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        Jorge 12.1 Simulador de paloma mensajera
    </title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
        div.map {
            float: left;
            text-align: center;
            border: 1px solid #666;
            background-color: #fcfcfc;
            margin: 5px;
            padding: 1em;
        }

        span.casa,
        span.paloma {
            font-weight: bold;
            color: red;
        }

        span.aire {
            color: blue;
        }
    </style>
</head>

<body>

    <h1>
        <?php

        #Devuelve una posición aleatoria dependiendo del tamaño del mapa
        function asignarPosicion($tamañoMapa)
        {
            return rand(0, $tamañoMapa - 1);
        }

        #Función que acerca a la paloma a su casa utiliza referencias de variables como parámetros
        function acercarPaloma(&$palomaX, &$casaX, &$palomaY, &$casaY)
        {
            if ($palomaX < $casaX)
                $palomaX++;

            elseif ($palomaX > $casaX)
                $palomaX--;


            if ($palomaY < $casaY)
                $palomaY++;
            elseif ($palomaY > $casaY)
                $palomaY--;
        }

        #Función que dibuja el mapa utilizando los valores de las variables pasadas como parámetros
        function dibujarMapa($tamañoMapa, $casaX, $palomaX, $casaY, $palomaY)
        {

            echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
            # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

            for ($y = 0; $y < $tamañoMapa; $y++) {
                for ($x = 0; $x < $tamañoMapa; $x++) {
                    if ($x == $casaX && $y == $casaY) {
                        echo '<span class="casa">+</span>'; //Casa
                    } elseif ($x == $palomaX && $y == $palomaY) {
                        echo '<span class="paloma">%</span>'; #Paloma
                    } else {
                        echo '<span class="aire">.</span>'; #Aire
                    }

                    echo ($x != $tamañoMapa - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                }

                echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.

            }

            echo "</pre>palomax=$palomaX palomaY=$palomaY</div>\n";
        }

        // Apartado de variables

        $tamañoMapa = 10;

        # Posicionar la paloma

        do {

            $casaX = asignarPosicion($tamañoMapa);
            $casaY = asignarPosicion($tamañoMapa);
            $palomaX = asignarPosicion($tamañoMapa);
            $palomaY = asignarPosicion($tamañoMapa);

        } while ((abs($casaX - $palomaX) < $tamañoMapa / 2) && (abs($casaY - $palomaY) < $tamañoMapa / 2));
        # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
        # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
        # absoluto, esto es, la cifra sin signo.

        do {

            #Acercar la paloma a su casa 
            acercarPaloma($palomaX, $casaX, $palomaY, $casaY);

            #Mostrar el mapa actual
            dibujarMapa($tamañoMapa, $casaX, $palomaX, $casaY, $palomaY);
            
        } while ($palomaX != $casaX || $palomaY != $casaY);

        ?>

    </h1>

</body>

</html>