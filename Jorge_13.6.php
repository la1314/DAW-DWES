<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        Jorge 13.6
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

        //Objeto Paloma
        class Paloma
        {

            private $palomaX;
            private $palomaY;

            public function asignarPalomaX($posicion)
            {
                $this->palomaX = $posicion;
            }

            public function asignarPalomaY($posicion)
            {
                $this->palomaY = $posicion;
            }

            public function mostrarPalomaX()
            {
                return $this->palomaX;
            }

            public function mostrarPalomaY()
            {
                return $this->palomaY;
            }

            #Función que acerca a la paloma a su casa utiliza referencias de variables como parámetros
            function acercarPaloma($casaX, $casaY)
            {
                if ($this->palomaX < $casaX)
                    $this->palomaX++;

                elseif ($this->palomaX > $casaX)
                    $this->palomaX--;

                if ($this->palomaY < $casaY)
                    $this->palomaY++;
                elseif ($this->palomaY > $casaY)
                    $this->palomaY--;
            }
        }

        //Objeto Casa
        class Casa
        {
            private $casaX;
            private $casaY;

            public function asignarCasaX($posicion)
            {
                $this->CasaX = $posicion;
            }

            public function asignarCasaY($posicion)
            {
                $this->CasaY = $posicion;
            }

            public function mostrarCasaX()
            {
                return $this->casaX;
            }

            public function mostrarCasaY()
            {
                return $this->casaY;
            }
        }

        //Objeto Mapa
        class Mapa
        {

            private $tamañoMapa;

            public function asignarTamanyoMapa($tamanyo)
            {
                $this->tamañoMapa = $tamanyo;
            }

            #Función que dibuja el mapa utilizando los valores de las variables pasadas como parámetros
            public function dibujarMapa($casaX, $palomaX, $casaY, $palomaY)
            {

                echo '<div class="map" style="width: ' . $this->tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

                for ($y = 0; $y < $this->tamañoMapa; $y++) {
                    for ($x = 0; $x < $this->tamañoMapa; $x++) {
                        if ($x == $casaX && $y == $casaY) {
                            echo '<span class="casa">+</span>'; //Casa
                        } elseif ($x == $palomaX && $y == $palomaY) {
                            echo '<span class="paloma">%</span>'; #Paloma
                        } else {
                            echo '<span class="aire">.</span>'; #Aire
                        }

                        echo ($x != $this->tamañoMapa - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }

                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.

                }

                echo "</pre>palomax=$palomaX palomaY=$palomaY</div>\n";
            }

            #Devuelve una posición aleatoria dependiendo del tamaño del mapa
            public function asignarPosicion()
            {
                return rand(0, $this->tamañoMapa - 1);
            }

            #Función que comprueba que la distancia entre la paloma y la casa disten como mínimo la mitad del mapa
            public function comprobarDistancia($casa, $paloma)
            {
                return (abs($casa - $paloma) < $this->tamañoMapa / 2);
            }
        }

        // Apartado de variables
        // Este mapa sólo refleja una paloma regresando  a su casa
        // A partir de aquí hay que declarar los objetos necesrarios, 1 mapa, 1 casa y 1 paloma

        $mapa = new Mapa();
        $paloma = new Paloma();
        $casa = new Casa();

        $mapa->asignarTamanyoMapa(10);

        # Posicionar la paloma

        do {

            $casa->asignarCasaX($mapa->asignarPosicion());
            $casa->asignarCasaY($mapa->asignarPosicion());

            $paloma->asignarPalomaX($mapa->asignarPosicion());
            $paloma->asignarPalomaY($mapa->asignarPosicion());
        } while ($mapa->comprobarDistancia($casa->mostrarCasaX(), $paloma->mostrarPalomaX()) && $mapa->comprobarDistancia($casa->mostrarCasaY(), $paloma->mostrarPalomaY()));
        # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
        # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
        # absoluto, esto es, la cifra sin signo.

        do {

            #Acercar la paloma a su casa 
            $paloma->acercarPaloma($casa->mostrarCasaX(),$casa->mostrarCasaY());

            #Mostrar el mapa actual
            $mapa->dibujarMapa($casa->mostrarCasaX(),$paloma->mostrarPalomaX(),$casa->mostrarCasaY(),$paloma->mostrarPalomaY());
            
        } while ($paloma->mostrarPalomaX() != $casa->mostrarCasaX() || $paloma->mostrarPalomaY() != $casa->mostrarCasaY());

        ?>

    </h1>

</body>

</html>