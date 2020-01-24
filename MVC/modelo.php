<?php

session_start();

if (!isset($_SESSION["lista"])) {
    $_SESSION["lista"] = "";
}

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    $_SESSION["lista"] .= $_POST["id"] . ", ";
}

function ListarProductos()
{

    // Conexión
    $servidor = "192.168.4.65";
    $username = "miusuario";
    $password = "mipassword";
    $basedatos = "bdprueba";

    # Crear conexión
    $link = mysqli_connect($servidor, $username, $password, $basedatos);
    $consulta = "SELECT * FROM productos";

    // Consulta
    $result = mysqli_query($link, $consulta);
    // Rellenar el array
    $mensajes = array();

    while ($fila = mysqli_fetch_array($result)) {

        $mensajes[] = $fila;
    }

    // Cierre de la conexión
    mysqli_close($link);
    return $mensajes;
}

function ListarCarrito($consulta)
{
    // Conexión
    $servidor = "192.168.4.65";
    $username = "miusuario";
    $password = "mipassword";
    $basedatos = "bdprueba";

    # Crear conexión
    $link = mysqli_connect($servidor, $username, $password, $basedatos);

    $result = mysqli_query($link, $consulta);

    // Cierre de la conexión
    mysqli_close($link);
    return $result;
}

function GuardarEnvio()
{
    // Conexión
    $servidor = "192.168.4.65";
    $username = "miusuario";
    $password = "mipassword";
    $basedatos = "bdprueba";

    # Crear conexión
    $link = mysqli_connect($servidor, $username, $password, $basedatos);

    $claves = preg_split("/[\s,]+/", $_SESSION["lista"]);
    $total = 0;
    $listaC = "";

    for ($i = 0; $i < count($claves); $i++) {
        $id = $claves[$i];
        $consulta = "SELECT nombre, precio FROM productos WHERE id = $id";
        // Consulta
        $result = mysqli_query($link, $consulta);
        // Rellenar el array
        while ($fila = mysqli_fetch_array($result)) {

            $nombre = $fila["nombre"];
            $precio = $fila["precio"];
            $total += (float) $precio;
            $listaC .= $nombre . "| ";
        }
    }

    $consulta = "INSERT INTO envios (lista, total) values ('$listaC', '$total');";
    mysqli_query($link, $consulta);
    $_SESSION["lista"] = "";
    // Cierre de la conexión
    mysqli_close($link);
}
