<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 6.9</title>
</head>
<body>

    <?php

        $correo = "potato_slayer@gmail.com";
   
        
        if (strstr($correo, ".com") && strlen(strstr($correo, ".com")) == 4) {

            echo("Correo $correo correcto");

        }else {
            echo("Correo $correo incorrecto");
        }

        
        
        


    ?>

</body>
</html>