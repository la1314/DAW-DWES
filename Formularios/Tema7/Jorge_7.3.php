<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.3</title>
</head>

<body>
    <html>

    <body>

        <?php
        if (!isset($_POST["nombre"])) {
            ?>

            <form action="Jorge_7.3.php" method="POST">

                Introduzca su nombre:
                <br>
                <input type="text" name="nombre">
                <br>
                <input type="submit" value="enviar">

            </form>

        <?php
        } else {

            if (empty($_POST["nombre"])) {
                echo ("<br>");
                echo ("No se ha ingresado ningún nombre");
                echo ("<br>");
            } else {
                echo ("<br>");
                echo ("Encantado de conocerte, ");
                echo ($_POST["nombre"]);
                echo ("<br>");
            }
        }

        ?>
    </body>

    </html>
</body>

</html>