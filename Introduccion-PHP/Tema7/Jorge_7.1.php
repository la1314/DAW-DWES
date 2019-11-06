<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.1</title>
</head>
<body>

    <?php

        $miarray = array();

        for ($i=0; $i < 20; $i++) { 
            $miarray[$i] = $i + 1;
        }

        print_r($miarray);

        echo("<br>");

        for ($i = count($miarray); $i >= 0 ; $i--) { 

            echo($miarray[$i] . "<br>");
            
        }

    ?>
    
</body>
</html>