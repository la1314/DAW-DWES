<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 9.4</title>
</head>

<body>
    <?php
    $servidor = "192.168.4.65";
    $username = "miusuario";
    $password = "mipassword";
    $basedatos = "bdprueba";

    # Crear conexión
    $conn = mysqli_connect($servidor, $username, $password, $basedatos);

    # Comprobar conexión
    if (!$conn) {
        die("Conexi&ocacuten fallida: " . mysqli_connect_error());
    }

    $consulta = "UPDATE empleados SET sueldo = sueldo*1.1;";

    mysqli_query($conn, $consulta);

    $consulta = ("SELECT nombre, sueldo FROM empleados;");

    $result = mysqli_query($conn, $consulta);
    echo("<br>");

    while ($fila = mysqli_fetch_array($result)) { 

        echo($fila["nombre"] . " - " . $fila["sueldo"]);
        echo("<br>");
    }

    echo mysqli_error($conn);
    mysqli_close($conn);

    ?>
</body>

</html>