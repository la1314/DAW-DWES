<html>
    <style>
         h1{
           color: blue;
           background-color: pink;
           border: solid 1px black;

        }
    </style>

    <body>
       
        <h1>
            <?php

            $horaActual = date ("j/M/Y -- g:i:s a");

            // "j/M/Y" indican que la salida sea el día, mes y año
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm

            echo "La hora actual es $horaActual";

            ?>    
           
        </h1>
       
    </body>
</html>