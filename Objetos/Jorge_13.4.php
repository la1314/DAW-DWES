<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 13.5</title>
</head>

<body>
    <?php

    abstract class Figura
    {
        private $color = "negro";
        private $relleno = false;

        public function obtenerColor()
        {
            return $this->color;
        }
        public function ponerColor($col)
        {
            $this->color = $col;
        }
        public function estaRelleno()
        {
            return $this->relleno;
        }
        public function rellenar()
        {
            $this->relleno = true;
        }
        public function vaciar()
        {
            $this->relleno = false;
        }

        abstract public function obtenerArea();
    }

    class Circulo extends Figura
    {
        private $radio = 0;
        public function obtenerRadio()
        {
            return $this->radio;
        }
        public function ponerRadio($rad)
        {
            $this->radio = $rad;
        }
        public function obtenerArea()
        {
            return M_PI * pow($this->radio, 2);
        }
    }

    class Cuadrado extends Figura
    {
        private $lado = 0;

        public function obtenerLado()
        {
            return $this->lado;
        }
        public function ponerLado($lad)
        {
            $this->lado = $lad;
        }
        public function obtenerArea()
        {
            return pow($this->lado, 2);
        } 
    }

    $miCirculo = new Circulo;
    $miCirculo->ponerColor("rojo");
    $miCirculo->rellenar();
    $miCirculo->ponerRadio(4);
    echo "<h2>Mi c&iacuterculo</h2>";
    echo "<p>Mi c&iacuterculo tiene un radio de " . $miCirculo->obtenerRadio() . "</p>";
    echo "<p>Es " . $miCirculo->obtenerColor() . " y est&aacute " . ($miCirculo->estaRelleno() ? " relleno " : " hueco ") . "</p>";
    echo "<p>El &aacuterea de mi c&iacuterculo es: " . $miCirculo->obtenerArea() . "</p>";

    $miCuadrado = new Cuadrado;
    $miCuadrado->ponerColor("verde");
    $miCuadrado->Vaciar();
    $miCuadrado->ponerLado(3);
    echo "<h2>Mi cuadrado</h2>";
    echo "<p>Mi cuadrado tiene un lado de " . $miCuadrado->obtenerLado() . "</p>";
    echo "<p>Es " . $miCuadrado->obtenerColor() . " y est&aacute " . ($miCuadrado->estaRelleno() ? " relleno " : " hueco ") . "</p>";
    echo "<p>El &aacuterea de mi cuadrado es: " . $miCuadrado->obtenerArea() . "</p>";

    ?>
</body>

</html>
