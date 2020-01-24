<?php

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
        $result = ListarCarrito($consulta);
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
    echo "<form action='controlador.php' method='POST'>";
    echo "<button type='submit'>Volver a la tienda</button>";
    echo "</form>";
    echo "<form action='controlador.php' method='POST'>";
    echo "<input type='hidden' name='envio'>";
    echo "<button type='submit'>Completar Compra</button>";
    echo "</form>";
}

function MostrarAgradecimiento()
{
    GuardarEnvio();
    echo "<h1>Gracias por tu compra</h1>";
    echo "<form action='controlador.php' method='POST'>";
    echo "<button type='submit'>Volver a la tienda</button>";
    echo "</form>";
}