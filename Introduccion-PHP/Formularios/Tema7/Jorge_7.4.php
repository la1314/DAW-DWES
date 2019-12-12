<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 7.4</title>
</head>

<body>


    <form action="Jorge_7.4.php" method="POST">

        Number 1
        <br>
        <input type="number" name="num1">
        <br>
        <br>
        Operación
        <br>
        <br>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <br>
        <br>

        Number 2
        <br>
        <br>
        <input type="number" name="num2">

        <input type="submit" name="submit" value="Calcular">

    </form>

    <?php


    $num1 = intval($_POST['num1']);
    $operador = $_POST['operator'];
    $num2 = intval($_POST['num2']);

    switch ($operador) {
        case '+':
            $resultado = $num1 + $num2;
            break;

        case '-':
            $resultado = $num1 - $num2;
            break;

        case '*':
            $resultado = $num1 * $num2;
            break;

        case '/':
            $resultado = $num1 / $num2;
            break;
    }

    echo('<br>');
    echo("El resultado es: " . $resultado);


    ?>

</body>

</html>