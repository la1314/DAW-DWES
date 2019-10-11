<html>

<head>
    <title>
        Jorge 5.11
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

        span.paloma2 {
            font-weight: bold;
            color: green;
        }

        span.paloma3 {
            font-weight: bold;
            color: blue;
        }

        span.aire {
            color: blue;
        }
    </style>
</head>

<body>

    <h1>
        <?php

        $tamañoMapa = 10;
        $rebotes = 0;
        $direccion;
        $direccion2;
        $direccion3;
        $pelotaX;
        $pelotaY;
        $pelota2X;
        $pelota2Y;
        $pelota3X;
        $pelota3Y;
        # Posicionar la pelota

        do {
            $pelotaX = rand(0, $tamañoMapa - 1);
            $pelotaY = rand(0, $tamañoMapa - 1);
            $pelota2X = rand(0, $tamañoMapa - 1);
            $pelota2Y = rand(0, $tamañoMapa - 1);
            $pelota3X = rand(0, $tamañoMapa - 1);
            $pelota3Y = rand(0, $tamañoMapa - 1);
        } while ((abs($pelotaX) < $tamañoMapa / 2) && (abs($pelotaY) < $tamañoMapa / 2) && (abs($pelota2X) < $tamañoMapa / 2) && (abs($pelota2Y) < $tamañoMapa / 2) && (abs($pelota3X) < $tamañoMapa / 2) && (abs($pelota3Y) < $tamañoMapa / 2));
        # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
        # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
        # absoluto, esto es, la cifra sin signo.


        $ndireccion = 0;
        $ndireccion2 = 0;
        $ndireccion3 = 0;

        while ($rebotes < 17) {

            //Nord-Este
            if ($pelotaX - 1 >= 0 && $pelotaY - 1 >= 0) {
                $ndireccion = 1;

                //Sur-Este
            } elseif ($pelotaX - 1 >= 0 && $pelotaY + 1 < $tamañoMapa) {
                $ndireccion = 2;

                //Nord-Oeste
            } elseif ($pelotaX + 1 < $tamañoMapa && $pelotaY - 1 >= 0) {
                $ndireccion = 3;

                //Sur-Oeste
            } elseif ($pelotaX + 1 < $tamañoMapa && $pelotaY + 1 < $tamañoMapa) {
                $ndireccion = 4;
            }

            //Nord-Este
            if ($pelota2X - 1 >= 0 && $pelota2Y - 1 >= 0) {
                $ndireccion2 = 1;

                //Sur-Este
            } elseif ($pelota2X - 1 >= 0 && $pelota2Y + 1 < $tamañoMapa) {
                $ndireccion2 = 2;

                //Nord-Oeste
            } elseif ($pelota2X + 1 < $tamañoMapa && $pelota2Y - 1 >= 0) {
                $ndireccion2 = 3;

                //Sur-Oeste
            } elseif ($pelota2X + 1 < $tamañoMapa && $pelota2Y + 1 < $tamañoMapa) {
                $ndireccion2 = 4;
            }

            //Nord-Este
            if ($pelota3X - 1 >= 0 && $pelota3Y - 1 >= 0) {
                $ndireccion3 = 1;

                //Sur-Este
            } elseif ($pelota3X - 1 >= 0 && $pelota3Y + 1 < $tamañoMapa) {
                $ndireccion3 = 2;

                //Nord-Oeste
            } elseif ($pelota3X + 1 < $tamañoMapa && $pelota3Y - 1 >= 0) {
                $ndireccion3 = 3;

                //Sur-Oeste
            } elseif ($pelota3X + 1 < $tamañoMapa && $pelota3Y + 1 < $tamañoMapa) {
                $ndireccion3 = 4;
            }

            $direccion = $ndireccion;
            $direccion2 = $ndireccion2;
            $direccion3 = $ndireccion3;

            $rebotamos = true;
            $rebotamos2 = true;
            $rebotamos3 = true;

            while ($rebotamos && $rebotamos2 && $rebotamos3) {

                if ($rebotamos || $rebotamos2 || $rebotamos3) {

                    #Mostrar el mapa actual
                    echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                    # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

                    for ($y = 0; $y < $tamañoMapa; $y++) {
                        for ($x = 0; $x < $tamañoMapa; $x++) {

                            if ($x == $pelotaX && $y == $pelotaY) {
                                echo '<span class="paloma">0</span>'; #Pelota
                            } else {
                                if ($x == $pelota2X && $y == $pelota2Y) {
                                    echo '<span class="paloma2">0</span>'; #Pelota2

                                } else {
                                    if ($x == $pelota3X && $y == $pelota3Y) {
                                        echo '<span class="paloma3">0</span>'; #Pelota3
                                    } else {
                                        echo '<span class="aire">.</span>'; #Aire
                                    }
                                }
                            }

                            echo ($x != $tamañoMapa - 1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                        }

                        echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                    }

                    echo "</pre>rebote nº=$rebotes</div>\n";
                }   

                switch ($direccion) {
                    case 1:
                        if ($pelotaX - 1 >= 0 && $pelotaY - 1 >= 0) {
                            $pelotaY -= 1;
                            $pelotaX -= 1;
                        } else {
                            $rebotamos = false;
                        }
                        break;
                    case 2:
                        if ($pelotaX - 1 >= 0 && $pelotaY + 1 < $tamañoMapa) {
                            $pelotaX -= 1;
                            $pelotaY += 1;
                        } else {
                            $rebotamos = false;
                        }
                        break;
                    case 3:
                        if ($pelotaX + 1 < $tamañoMapa && $pelotaY - 1 >= 0) {
                            $pelotaX += 1;
                            $pelotaY -= 1;
                        } else {
                            $rebotamos = false;
                        }
                        break;
                    case 4:
                        if ($pelotaX + 1 < $tamañoMapa && $pelotaY + 1 < $tamañoMapa) {
                            $pelotaX += 1;
                            $pelotaY += 1;
                        } else {
                            $rebotamos = false;
                        }
                        break;
                }

                switch ($direccion2) {
                    case 1:
                        if ($pelotaX - 1 >= 0 && $pelotaY - 1 >= 0) {
                            $pelota2Y -= 1;
                            $pelota2X -= 1;
                        } else {
                            $rebotamos2 = false;
                        }
                        break;
                    case 2:
                        if ($pelota2X - 1 >= 0 && $pelota2Y + 1 < $tamañoMapa) {
                            $pelota2X -= 1;
                            $pelota2Y += 1;
                        } else {
                            $rebotamos2 = false;
                        }
                        break;
                    case 3:
                        if ($pelota2X + 1 < $tamañoMapa && $pelota2Y - 1 >= 0) {
                            $pelota2X += 1;
                            $pelota2Y -= 1;
                        } else {
                            $rebotamos2 = false;
                        }
                        break;
                    case 4:
                        if ($pelota2X + 1 < $tamañoMapa && $pelota2Y + 1 < $tamañoMapa) {
                            $pelota2X += 1;
                            $pelota2Y += 1;
                        } else {
                            $rebotamos2 = false;
                        }
                        break;
                }

                switch ($direccion3) {
                    case 1:
                        if ($pelota3X - 1 >= 0 && $pelota3Y - 1 >= 0) {
                            $pelota3Y -= 1;
                            $pelota3X -= 1;
                        } else {
                            $rebotamos3 = false;
                        }
                        break;
                    case 2:
                        if ($pelota3X - 1 >= 0 && $pelota3Y + 1 < $tamañoMapa) {
                            $pelota3X -= 1;
                            $pelota3Y += 1;
                        } else {
                            $rebotamos3 = false;
                        }
                        break;
                    case 3:
                        if ($pelota3X + 1 < $tamañoMapa && $pelota3Y - 1 >= 0) {
                            $pelota3X += 1;
                            $pelota3Y -= 1;
                        } else {
                            $rebotamos3 = false;
                        }
                        break;
                    case 4:
                        if ($pelota3X + 1 < $tamañoMapa && $pelota3Y + 1 < $tamañoMapa) {
                            $pelota3X += 1;
                            $pelota3Y += 1;
                        } else {
                            $rebotamos3 = false;
                        }
                        break;
                }
            }
            $rebotes++;
        }

        ?>

    </h1>

</body>

</html>