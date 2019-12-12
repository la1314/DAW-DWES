<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 10.1</title>
</head>

<body>

    <?php

    if (isset($_COOKIE["micookie"])) {

        echo("Buenas: " . $_COOKIE["micookie"]);

    } else {
        
        if (isset($_POST['nombre'])) {

            $name = "micookie";
            $value = $_POST['nombre']; # Podría ser una cadena de texto
            $expires = time() + 360; # 60 segundos después del momento actual
            $path = "/";
            $domain = "";
            $secure = false;
            $HttpOnly = true;
    
            # Es preciso asegurarse de llamar a setcookie() antes de enviar
            # ninguna otra salida al navegador
            setcookie($name, $value, $expires, $path, $domain, $secure, $HttpeOnly);
            header("Location: Jorge_10.1.php");
        }else {
        ?>

        <form action="Jorge_10.1.php" method="POST">

            <br>
            Introduzca su Nombre:
            <br>
            <input type="text" name="nombre">

            <br>
            <input type="submit" value="enviar">

        </form>

    <?php
    }
        
    }

    ?>

</body>

</html>