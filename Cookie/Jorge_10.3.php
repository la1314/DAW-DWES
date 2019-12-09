<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 10.3</title>
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

    if (isset($_POST['nombreCookie'])) {
        
        $id = $_POST['nombreCookie'];
        $consulta = "DELETE from usuarios where ID = $id";
        mysqli_query($conn, $consulta);
        mysqli_close($conn);

        setcookie('usuario', null, -1, '/'); 
        header("Location: Jorge_10.3.php");

    }

    if (isset($_COOKIE["usuario"])) {

        $id = $_COOKIE["usuario"];
        $consulta = "SELECT nombre AS resultado from usuarios where ID = $id";
        $result = mysqli_query($conn, $consulta);
        $row = mysqli_fetch_assoc($result);
        $nombre = $row['resultado'];

        echo ("Buenas: $nombre");
        ?>
        <form action="Jorge_10.3.php" method="POST">
            <p>
                Borrar datos del usuario
            </p>
          
              <?php
                 echo "<input type='hidden' name='nombreCookie' value=$id";
             ?>

            <br>
            <input type="submit" value="eliminar">

        </form>

        <?php
            mysqli_free_result($result);
            mysqli_close($conn);
        } else {

            if (isset($_POST['nombre'])) {

                $nombre = $_POST['nombre'];
                $consulta = "INSERT INTO usuarios VALUES(null,'$nombre')";
                $result = mysqli_query($conn, $consulta);

                $name = "usuario";
                $value = $conn->insert_id; # Podría ser una cadena de texto
                $expires = time() + 3600000; # 60 segundos después del momento actual
                $path = "/";
                $domain = "";
                $secure = false;
                $HttpOnly = true;


                # Es preciso asegurarse de llamar a setcookie() antes de enviar
                # ninguna otra salida al navegador
                setcookie($name, $value, $expires, $path, $domain, $secure, $HttpeOnly);
                header("Location: Jorge_10.3.php");
            } else {
                ?>

            <form action="Jorge_10.3.php" method="POST">
                <p>
                    Registro
                </p>
                <br>
                Introduzca su Nombre:
                <br>
                <input type="text" name="nombre">

                <br>
                <input type="submit" value="enviar">

            </form>

    <?php
        }
    }

    ?>

</body>

</html>