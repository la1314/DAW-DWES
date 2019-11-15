<html>
    <body>
        <?php

            echo("Encantado de conocerte, ");
            echo($_POST["nombre"]);
            echo("<br>");

            echo("La contraseña a guardar es: ");
            echo($_POST["password"]);
            echo("<br>");

            echo("Su coche es un: ");
            echo($_POST["coche"]);
            echo("<br>");

            echo("Color(es): ");
            
            $colores = $_POST["color"];
            echo("<br>");
            foreach ($colores as $key => $value) {
                echo("-".$value);
                echo("<br>");
            }

            echo("Mensaje dejado: ");
            echo($_POST["mensaje"]);

        ?>
    </body>
</html>