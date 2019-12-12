<html>

<body>
    <?php

    if (empty($_POST["nombre"])) { 

        echo("No se ha ingresado ningún nombre");
        echo ("<br>");

    } else {

        echo ("Encantado de conocerte, ");
        echo ($_POST["nombre"]);
        echo ("<br>");
    }
    
    ?>
</body>

</html>