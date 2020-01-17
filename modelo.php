<?php
function ListarMensajes()
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
