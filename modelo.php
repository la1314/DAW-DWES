<?php

session_start();

if (!isset($_SESSION["lista"])) {
    $_SESSION["lista"] = "";
}

if (isset($_POST["id"]) & !empty($_POST["id"])) {
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

function MostrarProductos($mensajes)
{

    echo "<h1>Lista de productos</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Producto</th>";
    echo "<th>Precio</th>";
    echo "</tr>";

    foreach ($mensajes as $post) :

        $nombre = $post["nombre"];
        $precio = $post["precio"];
        $id = $post["id"];
        echo "<tr>";
        echo "<td>$nombre</td>";
        echo "<td>$precio</td>";
        echo "<td>";
        echo '<form action="controlador.php" method="POST">';
        echo "<input type='hidden' name='id' value='$id'>";
        echo '<button type="submit">Añadir a carrito</button>';
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    endforeach;
    echo "</table>";
    echo "<form action='controlador.php' method='POST'>";
    echo "<input type='hidden' name='carrito' value='1'>";
    echo "<button type='submit'>Ver Carrito</button>";
    echo "</form>";
}

function MostrarLista()
{

    $claves = preg_split("/[\s,]+/", $_SESSION["lista"]);

    // Conexión
    $servidor = "192.168.4.65";
    $username = "miusuario";
    $password = "mipassword";
    $basedatos = "bdprueba";

    # Crear conexión
    $link = mysqli_connect($servidor, $username, $password, $basedatos);

    echo "<h1>Lista del carrito</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Producto</th>";
    echo "<th>Precio</th>";
    echo "</tr>";
    $total = 0;

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

            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$precio</td>";
            echo "</tr>";
        }
    }
    echo "<tr>";
    echo "<td>Total:</td>";
    echo "<td>$total</td>";
    echo "</tr>";

    echo "</table>";
    // Cierre de la conexión
    mysqli_close($link);
}
