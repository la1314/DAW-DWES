<html>

<body>

    <?php

            $nombreAlbum = $_POST['album'];
            $nombreIMG =  $_FILES["imagen"]["name"];
            
            echo "El nombre del fichero es: ".$_FILES["imagen"]["name"]."<br>";
            echo "El tamaño en bytes es: ".$_FILES["imagen"]["size"]."<br>";
            echo "El tipo de archivo es: ".$_FILES["imagen"]["type"]."<br>";
            echo "Se ha guardado en: ".$_FILES["imagen"]["tmp_name"]."<br>";
            
            mkdir('./' . $nombreAlbum);

            echo($nombreIMG . " Guardado en " . $nombreAlbum );
            move_uploaded_file($_FILES["imagen"]["tmp_name"], "./$nombreAlbum/$nombreIMG");
        

    ?>

</body>

</html>