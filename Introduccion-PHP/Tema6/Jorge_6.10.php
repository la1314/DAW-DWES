<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 6.10</title>
</head>
<body>

    <?php

        $correo = "potato@gmail.com";
        $ncorte = strpos($correo,"@");
        $anterior;
        $postetior;

        for ($i=0; $i < strlen($correo); $i++) { 

            if ($i < $ncorte) {
                $anterior .= $correo[$i];
            }
            if ($i > $ncorte) {
                $postetior .= $correo[$i];
            }
                
            

        }

        echo("Parte anterior del correo: " . $anterior);
        echo("<br>");
        echo("Parte posterior del correo: " . $postetior);

    ?>

</body>
</html>