<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 9.7</title>
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

    if (isset($_POST["listado"])) {

        $valor = $_POST["listado"];
        $consulta = "DELETE from empleados WHERE DNI like '$valor';";

        mysqli_query($conn, $consulta);
        header("Location: Jorge_9.7.php");

    } elseif (!isset($_POST["nombre"])) {

        $consulta = "SELECT * from empleados;";
        $result = mysqli_query($conn, $consulta);

        echo ("Formulario");

        ?>

        <form action="Jorge_9.7.php" method="POST">

            <br>
            Introduzca el Nombre:
            <br>
            <input type="text" name="nombre">
            <br>
            Introduzca el Sueldo:
            <br>
            <input type="number" name="sueldo">
            <br>
            Introduzca el plus:
            <br>
            <input type="number" name="plus">
            <br>
            <input type="submit" value="enviar">

        </form>

        <form action="Jorge_9.7.php" method="POST">

            <br>
            Listado
            <br>
            <select name="listado">

                <?php

                    while ($fila = mysqli_fetch_array($result)) {

                        $dni = $fila["DNI"];
                        $nombre = $fila["nombre"];
                        $sueldo = $fila["sueldo"];
                        $plus = $fila["plus"];

                        echo  "<option value='$dni'>$dni - $nombre - $sueldo - $plus </option>";
                    }

                    ?>
            </select>
            <br>

            <input type="submit" value="Eliminar">

        </form>

    <?php
    } else {
        ?>
    <?php
        $consulta = "SELECT max(DNI) AS resultado from empleados;";

        $result = mysqli_query($conn, $consulta);

        $row = mysqli_fetch_assoc($result);
        $dni = $row['resultado'] + 1;
        $nombre = $_POST["nombre"];
        $sueldo = $_POST["sueldo"];
        $plus = $_POST["plus"];

        $consulta = "INSERT INTO empleados VALUES ($dni, '$nombre', $sueldo, $plus);";

        mysqli_query($conn, $consulta);
        echo (mysqli_error($conn));

        mysqli_close($conn);
        header("Location: Jorge_9.7.php");
    }

    ?>
</body>

</html>