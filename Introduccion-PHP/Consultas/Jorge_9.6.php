<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 9.6</title>
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

    $consulta = "SELECT max(DNI) AS resultado from empleados;";

    $result = mysqli_query($conn, $consulta);

    $row = mysqli_fetch_assoc($result); 
    $dni = $row['resultado'] + 1;
    $nombre = $_POST["nombre"];
    $sueldo = $_POST["sueldo"];
    $plus = $_POST["plus"];

    $consulta = "INSERT INTO empleados VALUES ($dni, '$nombre', $sueldo, $plus);";

    mysqli_query($conn, $consulta);
    echo(mysqli_error($conn));

    $consulta = ("SELECT * FROM empleados;");

    $result = mysqli_query($conn, $consulta);
    echo("<br>");

    while ($fila = mysqli_fetch_array($result)) { 

        echo($fila["DNI"] . " - " . $fila["nombre"] . " - " . $fila["sueldo"] . " - " . $fila["plus"] );
        echo("<br>");
    }

    mysqli_close($conn);

    ?>
</body>

</html>