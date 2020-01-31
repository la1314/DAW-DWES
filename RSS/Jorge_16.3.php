<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 16.3</title>
</head>

<body>
    <?php



    /*******************************************************************************
Rest es una alternativa ligera a SOAP, más fácil de usar y aprender, pero no se
basa en estándares, ni contempla la gestión de errores. En la mayoría de las
ocasiones las consultas a un servicio web basado en REST no se hacen con XML,
sino en el propio URL. Cada proveedor de servicios establece sus propias
normas (“API”). Vamos a ver uno de ellos.

Regístrse gratuitamente en:

https://openweathermap.org/api

Se le ofrecerá una clave ("key"). Con ella podrá acceder a los servicios web
que ofrece este sitio. Observe que si hubiese pagado, podría acceder a
servicios adicionales.
     *******************************************************************************/

    $nombres = array();
    array_push($nombres, "Madrid");
    array_push($nombres, "Barcelona");
    array_push($nombres, "Paris");
    array_push($nombres, "Tokyo");
    array_push($nombres, "Valencia");
    array_push($nombres, "Toronto");
    array_push($nombres, "Moscu");
    array_push($nombres, "Crimea");


    $APIKEY = "c66105446243b56d5124ff68682dd494"; //¡¡Ojo!! Su "Key" será otra.


    for ($i = 0; $i < count($nombres); $i++) {

        $ciudad = $nombres[$i];
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$ciudad&mode=xml&APPID=" . $APIKEY;

        $respuesta = file_get_contents($url);

        //  Sin embargo, este documento se podría tratar sin necesidad de mostrarlo.

        $xml = simplexml_load_string($respuesta) or die("Error: no se puede crear");

        $pais = $xml->city->country;
        $temperatura = $xml->temperature[value] - 273.15;
        echo "<br><br>";

        echo "Pais: " . $pais . "<br>";
        echo "Ciudad: $ciudad<br>";
        echo "Temperatura: " . $temperatura . " Cº<br>";
    }



    /* 
    echo "<PRE>";
    print_r($xml);
    echo "</PRE>"; */




    ?>
</body>

</html>