<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 9.1</title>
    <style>
        th {
            color: red;
            background-color: yellow;
        }

        td {
            background-color: aquamarine;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;

        }
    </style>
</head>

<body>

    <?php
    $servidor = "192.168.4.67"; # Puede ser una IP o un nombre DNS
    $username = "miusuario";
    $password = "mipassword";
    $basedatos = "bdprueba";
    $puerto = 3306;

    # Crear conexión. Opcionalmente se puede poner como quinto parámetro
    # el puerto
    $conn = mysqli_connect($servidor, $username, $password, $basedatos, $puerto);

    # Comprobar conexión
    if (!$conn) {
        die("exploto: " . mysqli_connect_error());
    }


    # A continuación se usa un "SELECT", pero igualmente podría ser
    #  INSERT, DELETE o UPDATE. El código PHP sería idéntico.
    $consulta = "SELECT DNI, nombre FROM empleados";

    # A continuación se ejecuta la consulta y se devuelve el resultado
    # en el caso de que se trate de un SELECT. En otro caso devuelve
    # TRUE. Salvo si hay fallo, en cuyo caso devuelve FALSE.
    $result = mysqli_query($conn, $consulta);

    echo ("<table>");
    echo ("<th>Nombre</th>");
    echo ("<th>DNI</th>");

    # Es preciso iterar para extrar una a una las filas del resultado
    while ($fila = mysqli_fetch_array($result)) {

        echo ("<tr>");

        $nombre = $fila["nombre"];
        $dni = $fila["DNI"];

        echo ("<td>$nombre</td>");
        echo ("<td>$dni</td>");

        # Esta es una manera alternativa de mostrar la fila, habida
        # cuenta de que mysqli_fetch_array devuelve un array
        # asociativo

        echo ("</tr>");
    }

    echo ("</table>");
    # En el caso de haber usado un SELECT:
    #echo "El resultado es de " . mysqli_num_rows($result) . " filas<br>";

    # Y para cualquier otro caso (INSERT, DELETE, UPDATE, SELECT),
    # el número de filas de la última operación se obtiene así:
    #echo "El resultado es de " . mysqli_affected_rows($conn) . " filas<br>";

    # Libera la memoria asociada al resultado.
    # Siempre se debe liberar el resultado con mysqli_free_result(), 
    #   cuando el objeto del resultado ya no es necesario.
    mysqli_free_result($result);


    # Cerrar la conexión es una buena práctica, para liberar recursos
    # inmediatamente, pero si no se pone, no pasa nada porque PHP
    # cierra la conexión automáticamente al salir:

    mysqli_close($conn);

    ?>

</body>

</html>