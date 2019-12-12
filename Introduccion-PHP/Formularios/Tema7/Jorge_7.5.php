<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.5</title>
</head>

<body>


    <?php
    


    if (!isset($_POST["oculto"])) {
        ?>

        <form action="Jorge_7.5.php" method="POST">

            Introduzca su nombre:
            <br>
            <input type="text" name="nombre">
            <br>
            <input type="hidden" name="oculto">
            <input type="submit" value="enviar">     
        </form>

        <?php
        $_POST["oculto"] = $_POST["nombre"];
        
        } else {
            $nombre = $_POST["nombre"];
            if (!isset($_POST["vehiculo"])) {
                
                ?>
            <form action="Jorge_7.5.php" method="POST">

                Introduzca su coche:
                <br>
                <input type="text" name="coche">
                <br>

                <?php
                     echo "<input type='hidden' name='oculto' value='$nombre'>";
                ?>

                <input type="submit" value="enviar">
                <?php
                
                ?>
                <?php
                    $nombreV = $_POST["coche"];
                     echo "<input type='hidden' name='vehiculo' value='$nombreV'>";
                ?>
            </form>
    <?php
        
        } else {
            echo('Hola ' . $_POST["oculto"] . ', tu cohe es un ' . $_POST["coche"]);
        }
    }
    ?>




</body>

</html>