<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista</title>
</head>

<body>
    <h1>List of Posts</h1>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <?php
        echo $post;
        foreach ($mensajes as $post) : ?>
            <tr>
                <td><?php echo $post["nombre"] ?></td>
                <td><?php echo $post["precio"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>