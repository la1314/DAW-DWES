<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 11.2</title>
</head>

<body>

    <?php
    session_start();

    if (isset($_POST["nombre"]) & !empty($_POST["nombre"])) {
        $_SESSION["nombre"] = $_POST["nombre"];
    }  

    if (!isset($_SESSION["nombre"])){

        ?>
    
        <form action="Jorge_11.2.php" method="POST">
    
            <br>
            Introduzca un número:
            <br>
            <input type="text" name="nombre">
    
            <br>
            <input type="submit" value="enviar">
    
        </form>
    
    <?php
    
    }else {

        $nombre = $_SESSION['nombre'];
        echo("Buenas $nombre");
    }


      


    # En $_SESSION se pueden almacenar muchas variables, e incluso
    # arrays y objetos
    ?>


</body>

</html>