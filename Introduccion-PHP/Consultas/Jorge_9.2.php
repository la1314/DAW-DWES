<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 9.2</title>
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


    $consulta = "CREATE TABLE respaldo (DNI INT PRIMARY KEY, nombre VARCHAR(30), sueldo DECIMAL (6,2));";

    mysqli_query($conn, $consulta);

    $consulta = "SELECT * FROM empleados";

    $result = mysqli_query($conn, $consulta);

    while ($fila = mysqli_fetch_array($result)) {

        $nombre = $fila["nombre"];
        $dni =  $fila["DNI"];
        $sueldo = $fila["sueldo"];

        $insertar = "INSERT INTO respaldo VALUES ($dni, '$nombre', $sueldo);";
        echo "<br>";

        $resultado = mysqli_query($conn, $insertar);
        # Como no se trata de un SELECT, mysqli_query devuelve TRUE
        # si se ha hecho correctamente y FALSE si ha habido error.
        if ($resultado==TRUE)
            echo "Se ha insertado correctamente: $insertar <br>";
        else
        {
            # La siguiente función muestra el último error, en caso
            # de haberlo.
            echo mysqli_error($conn);
            echo("<br>");
            die ("Hubo un error <br>");
        }   

    }

    mysqli_free_result($result);
    # Como no se trata de un SELECT, no hace falta el
    # mysqli_free_result($result)


    mysqli_close($conn);

    ?>
</body>

</html>