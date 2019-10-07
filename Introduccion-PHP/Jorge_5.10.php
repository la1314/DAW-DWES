<html>
    <head>
        <title>
            Simulador de paloma mensajera
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
               
        </style>
    </head>
    <body>
       
        <h1>
            <?php

            $tamañoMapa=10;
            $rebotes = 1;
            $direccion;
            # Posicionar la paloma
           
            do
            {
                $pelotaX = rand (0,$tamañoMapa-1);
                $pelotaY = rand (0,$tamañoMapa-1);
            } while ((abs($pelotaX)<$tamañoMapa/2)&&(abs($pelotaY)<$tamañoMapa/2));
            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.
           

            $direccion = conseguirdireccion();

            do
            {   

                #Acercar la paloma a su casa
                if ($pelotaX<$casaX)
                    $pelotaX++;
                elseif ($pelotaX>$casaX)
                    $pelotaX--;
   

                if ($pelotaY<$casaY)
                    $pelotaY++;
                elseif ($pelotaY>$casaY)
                    $pelotaY--;

                switch ($direccion) {
                    case '1':
                        # code...
                        break;
                    case '2':
                        # code...
                        break;
                    case '3':
                        # code...
                        break;
                    case '4':
                        # code...
                        break;
                
                }

                   
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                       
                        if ($x == $pelotaX && $y == $pelotaY)
                        {
                            echo '<span class="paloma">0</span>'; #Pelota
                        }
                        else
                        {
                            echo '<span class="aire">.</span>'; #Aire
                        }
                       
                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
               
                echo "</pre>pelotax=$pelotaX pelotaY=$pelotaY</div>\n";
            } while ( $rebotes < 6 );
            
            function conseguirdireccion(){

            $ndireccion = 0;

                 //Nord-Este
             if ( ($pelotaY-1) >= 0 && ($pelotaX-1) >= 0 ) {
                $ndireccion = 1;

                 //Sur-Este
             } elseif ( ($pelotaY-1) >= 0 && ($pelotaX+1) >= ($tamañoMapa-1) ) {
                $ndireccion = 2;

                 //Nord-Oeste
             }elseif ( ($pelotaY+1) <= ($tamañoMapa-1) && ($pelotaX-1) >= 0) {
                $ndireccion = 3;
                
                //Sur-Oeste
             }elseif ( ($pelotaY+1) <= ($tamañoMapa-1) && ($pelotaX-1) >= ($tamañoMapa-1)) {
                $ndireccion = 4;
             }
             
             return $ndireccion;

            }

            function nordEste(){

                if ( $pelotaY - 1 >= 0 ) {
                    $pelotaY -= 1;
                    $pelotaX -= 1;
                }
            }

            function surEste(){
                 if ( $pelotaY - 1 >= 0 ) {
                    $pelotaY -= 1;
                    $pelotaX += 1;
                }
            }

            function nordOeste(){
                if ( $pelotaY + 1 >= $tamañoMapa-1 ) {
                    $pelotaY += 1;
                    $pelotaX -= 1;
                }
            }

            function surOeste(){
                if ( $pelotaY + 1 >= $tamañoMapa-1 ) {
                    $pelotaY -= 1;
                    $pelotaX += 1;
                }
            }

            ?>   
           
        </h1>
       
    </body>

</html>