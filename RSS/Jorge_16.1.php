<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 16.1</title>
</head>
<body>
<?php
            # Para conocer en qué consiste RSS (“really simple syndication”),
            # pruebe a leer noticias desde un móvil con un programa como por
            # ejemplo feedly.

            # Conéctese con un navegador a:
            # http://estaticos.elmundo.es/elmundo/rss/valencia.xml
           
            # A continuación vamos a ver un cliente RSS con PHP:
           
            # Se crea un objeto SimpleXML
            $xml=simplexml_load_file("http://estaticos.elmundo.es/elmundo/rss/valencia.xml");
            # Se muestra el título del feed RSS
            echo "<h2>".$xml->channel->title."</h2><br/><br/>";
            # Se muestra la primera noticia:

            for ($i=0; $i < count($xml->channel->item); $i++) { 
                echo "*****************************************<br>";
                echo $xml->channel->item[$i]->title . "<br>";
                $link = $xml->channel->item[$i]->link;
                //echo $link;
                echo "<a href='$link' target='_blank'>Leer Noticia</a>"."<br>";
                echo "*****************************************";
                echo "<br>";
            }

            
        ?>
</body>
</html>