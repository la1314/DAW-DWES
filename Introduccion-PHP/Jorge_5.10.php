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
            $pelotaX;
            $pelotaY;
            # Posicionar la paloma
           
            do
            {
                $pelotaX = rand (0,$tamañoMapa-1);
                $pelotaY = rand (0,$tamañoMapa-1);
            } while ((abs($pelotaX)<$tamañoMapa/2)&&(abs($pelotaY)<$tamañoMapa/2));
            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.
           
            
            

            while ($rebotes < 7) {

                $ndireccion = 0;

                echo($pelotaX);
                echo($pelotaY);

                 //Nord-Este
                if ( ($pelotaY-1) >= 0 && ($pelotaX-1) >= 0 ) {
                    $ndireccion = 1;

                    //Sur-Este
                } elseif ( ($pelotaY-1) >= 0 && ($pelotaX+1) <= ($tamañoMapa-1) ) {
                    $ndireccion = 2;

                    //Nord-Oeste
                }elseif ( ($pelotaY+1) <= ($tamañoMapa-1) && ($pelotaX-1) >= 0) {
                    $ndireccion = 3;
                    
                    //Sur-Oeste
                }elseif ( ($pelotaY+1) <= ($tamañoMapa-1) && ($pelotaX-1) <= ($tamañoMapa-1)) {
                    $ndireccion = 4;
                }

                $direccion = $ndireccion;
                $rebotamos = true;

                do
                {   
    
                    switch ($direccion) {
                        case 1:
                        if ( ($pelotaY-1) >= 0 ) {
                            $pelotaY -= 1;
                            $pelotaX -= 1;
                        }else {
                            $rebotamos = false;
                        }
                            break;
                        case 2:
                        if ( ($pelotaY - 1) >= 0 ) {
                            $pelotaY -= 1;
                            $pelotaX += 1;
                        }else {
                            $rebotamos = false;
                        }
                            break;
                        case 3:
                        if ( ($pelotaY + 1) >= $tamañoMapa-1 ) {
                            $pelotaY += 1;
                            $pelotaX -= 1;
                        }else {
                            $rebotamos = false;
                        }
                            break;
                        case 4:
                        if ( ($pelotaY + 1) >= $tamañoMapa-1 ) {
                            $pelotaY += 1;
                            $pelotaX += 1;
                        }else {
                            $rebotamos = false;
                        }
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
                
                    
                
                } while ( $rebotamos );

                $rebotes++;
            }
            

            ##########################################
            function conseguirdireccion(){
            
            $ndireccion = 0;
            
            
                 //Nord-Este
             if ( ($pelotaY-1) >= 0 && ($pelotaX-1) >= 0 ) {
                $ndireccion = 1;

                 //Sur-Este
             } elseif ( ($pelotaY-1) >= 0 && ($pelotaX+1) <= ($tamañoMapa-1) ) {
                $ndireccion = 2;

                 //Nord-Oeste
             }elseif ( ($pelotaY+1) <= ($tamañoMapa-1) && ($pelotaX-1) >= 0) {
                $ndireccion = 3;
                
                //Sur-Oeste
             }elseif ( ($pelotaY+1) <= ($tamañoMapa-1) && ($pelotaX-1) <= ($tamañoMapa-1)) {
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
                    $pelotaY += 1;
                    $pelotaX += 1;
                }
            }

            ?>   
           
        </h1>
       
    </body>

</html>