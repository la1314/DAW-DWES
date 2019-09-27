<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 4.1</title>
</head>
<body>
    
    <?php

        $hora = date("G");

        if ( $hora >= 19 || $hora < 6) {
            
            echo("Buenas noches");

        } elseif ($hora > 12) {
            
            echo("Buenas tardes");

        } else {
            echo("Buenos días");
        }
        

    ?>

</body>
</html>