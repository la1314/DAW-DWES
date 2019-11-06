<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.5</title>
</head>

<body>

    <?php

    $libro1 = array(
        "titulo" => "Don Quijote",
        "autor" => "Cervantes",
        "fecha" => 1615
    );
    $libro2 = array(
        "titulo" => "El hobbit",
        "autor" => "Tolkien",
        "fecha" => 1937
    );

    $biblioteca = array("lib1" => $libro1, "lib2" => $libro2);

    $iterando = 1;
    foreach ($biblioteca as $libro) {

        echo("Libro número: $iterando" . "<br>");

        foreach ($libro as $key => $value) {
            
            echo( $key . ": " . $value . "<br>");
            
        }
        echo("<br>");
        $iterando++;
    }

    ?>

</body>

</html>