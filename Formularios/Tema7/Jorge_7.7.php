<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.7</title>
</head>

<body>
    <?php

    if (!empty($_POST["nombre"])) {
        # Esta instrucción debe contener lo primero que se envíe al
        # navegador, y además se termina con exit, para que no se
        # envíe nada más.
        header("Location: Jorge_7.7_premio.html");
        exit;

    } else {
        header("Location: Jorge_7.7.html");
        exit;
    }

    ?>
</body>

</html>