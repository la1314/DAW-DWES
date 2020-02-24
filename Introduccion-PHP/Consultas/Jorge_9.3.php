<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 9.3</title>
</head>

<body>
    <?php
    $servidor = "192.168.4.67";
    $username = "miusuario";
    $password = "mipassword";
    $basedatos = "bdprueba";

    # Crear conexión
    $conn = mysqli_connect($servidor, $username, $password, $basedatos);

    # Comprobar conexión
    if (!$conn) {
        die("Conexi&ocacuten fallida: " . mysqli_connect_error());
    }

    $consulta = "ALTER TABLE empleados ADD plus INT;";

    mysqli_query($conn, $consulta);

    $consulta = "UPDATE empleados SET plus = 10000;";

    mysqli_query($conn, $consulta);

    $consulta = ("SELECT nombre, plus FROM empleados;");

    $result = mysqli_query($conn, $consulta);
    echo("<br>");

    while ($fila = mysqli_fetch_array($result)) { 

        echo($fila["nombre"] . " - " . $fila["plus"]);
        echo("<br>");
    }

    echo mysqli_error($conn);
    mysqli_close($conn);

    ?>
</body>

</html>