<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista</title>
</head>

<body>

    <?php

        if (isset($_POST["carrito"]) && !empty($_SESSION["lista"]) ) {
            MostrarLista();
        } elseif (isset($_POST["envio"])) {
            MostrarAgradecimiento();
        }else {
            MostrarProductos($mensajes);
        }  
    ?>
    
</body>

</html>