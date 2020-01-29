<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 16.2</title>
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
    $xmlMundo = simplexml_load_file("http://estaticos.elmundo.es/elmundo/rss/valencia.xml");
    $xmlLoPais = simplexml_load_file("http://ep00.epimg.net/rss/elpais/portada.xml");
    $xmlABC = simplexml_load_file("https://www.abc.es/rss/feeds/abc_EspanaEspana.xml");

    # Se muestra el título del feed RSS
   
    # Se muestra la primera noticia:

        echo "<div>";
        echo "<h2>" . $xmlMundo->channel->title . "</h2><br/><br/>";
        echo "*****************************************<br>";
        echo $xmlMundo->channel->item[0]->title . "<br>";
        $link = $xmlMundo->channel->item[0]->link;
        //echo $link;
        echo "<a href='$link' target='_blank'>Leer Noticia</a>" . "<br>";
        echo "*****************************************";
        echo "<br>";
        echo "</div>";
        echo "<br>";
        echo "<div>";
        echo "<h2>" . $xmlLoPais->channel->title . "</h2><br/><br/>";
        echo "*****************************************<br>";
        echo $xmlLoPais->channel->item[0]->title . "<br>";
        $link = $xmlLoPais->channel->item[0]->link;
        //echo $link;
        echo "<a href='$link' target='_blank'>Leer Noticia</a>" . "<br>";
        echo "*****************************************";
        echo "<br>";
        echo "</div>";
        echo "<br>";
        echo "<div>";
        echo "<h2> ABC: " . $xmlABC->channel->title . "</h2><br/><br/>";
        echo "*****************************************<br>";
        echo $xmlABC->channel->item[0]->title . "<br>";
        $link = $xmlABC->channel->item[0]->link;
        //echo $link;
        echo "<a href='$link' target='_blank'>Leer Noticia</a>" . "<br>";
        echo "*****************************************";
        echo "<br>";
        echo "</div>";



    ?>
</body>

</html>