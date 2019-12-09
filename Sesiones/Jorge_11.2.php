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

    if (!isset($_SESSION["numero"])) {
        $_SESSION["numero"] = "";
    }

    if (isset($_POST["numero"]) & !empty($_POST["numero"]) ) {
        $_SESSION["numero"] .= $_POST["numero"] . " # ";
    }

    ?>

    <form action="Jorge_11.2.php" method="POST">

        <br>
        Introduzca un número:
        <br>
        <input type="number" name="numero">

        <br>
        <input type="submit" value="enviar">

    </form>

    <?php 

    echo($_SESSION["numero"]);

    ?>

   

</body>

</html>