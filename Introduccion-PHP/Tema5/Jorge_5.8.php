<html>
    <head>
        <title>
            Jorge 5.8
        </title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style type="text/css">
            div.map {
                float:left;
                text-align: center;
                border: 1px solid #666;
                background-color: #fcfcfc;
                margin: 5px;
                padding: 1em;
            }
            span.casa, span.paloma {
                font-weight: bold;
                color: red;
            }
            span.aire {
                color: blue;
            }
            /*Modificaciones para el ejercicio 5.8*/
            span.paloma2 {
                font-weight: bold;
                color: pink;
            }
             /*-----------------------------------*/ 
        </style>
    </head>
    <body>
       
        <h1>
            <?php

            $tamañoMapa=10;
           
            # Posicionar la paloma
           
            do
            {
                $casaX = rand (0,$tamañoMapa-1);
                $casaY = rand (0,$tamañoMapa-1);
                $palomaX = rand (0,$tamañoMapa-1);
                $palomaY = rand (0,$tamañoMapa-1);
                
                #Modificaciones para el ejercicio 5.8
                $paloma2X = rand (0,$tamañoMapa-1);
                $paloma2Y = rand (0,$tamañoMapa-1);
                #------------------------------------

            } while ((abs($casaX-$palomaX)<$tamañoMapa/2)&&(abs($casaY-$palomaY)<$tamañoMapa/2) && (abs($casaX-$paloma2X)<$tamañoMapa/2)&&(abs($casaY-$paloma2Y)<$tamañoMapa/2));
            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.
           
            do
            {
                #Acercar la paloma a su casa
                if ($palomaX<$casaX)
                    $palomaX++;
               
                elseif ($palomaX>$casaX)
                    $palomaX--;
               
               
                if ($palomaY<$casaY)
                    $palomaY++;
                elseif ($palomaY>$casaY)
                    $palomaY--;

                #Modificaciones para el ejercicio 5.8
                if ($paloma2X<$casaX)
                    $paloma2X++;
               
                elseif ($paloma2X>$casaX)
                    $paloma2X--;
               
               
                if ($paloma2Y<$casaY)
                    $paloma2Y++;
                elseif ($paloma2Y>$casaY)
                    $paloma2Y--;
                #------------------------
                
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                        if ($x == $casaX && $y == $casaY)
                        {
                            echo '<span class="casa">+</span>'; //Casa
                        }
                        elseif ($x == $palomaX && $y == $palomaY)
                        {
                            echo '<span class="paloma">%</span>'; #Paloma
                        }elseif ($x == $paloma2X && $y == $paloma2Y) {
                            echo '<span class="paloma2">%</span>'; #Paloma
                        }
                        else
                        {
                            echo '<span class="aire">.</span>'; #Aire
                        }
                       
                        

                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
               
                echo "</pre>palomax=$palomaX palomaY=$palomaY\n";
                echo "palomax2=$paloma2X paloma2Y=$paloma2Y</div>\n";
            } while ( ($palomaX != $casaX || $palomaY != $casaY) || ($paloma2X != $casaX || $paloma2Y != $casaY) );
          
            ?>   
           
        </h1>
       
    </body>

</html>