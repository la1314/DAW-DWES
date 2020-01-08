<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge 13.2</title>
</head>

<body>
    <?php

    class Mago
    {

        private $inteligencia;
        private $fuerza;
        private $sobrenombre;

        public function __construct() # Método constructor
        {
            
            $this->fuerza = 5;
            $this->inteligencia = 15;
        }

        public function lanzarBolaFuego()
        {
            return 'Ha lanzado una bola de fuego';
        }

        public function lanzarEscarcha()
        {
            return 'Ha lanzado escarcha';
        }

        public function obtenerInteligencia()
        {
            return $this->inteligencia;
        }

        public function obtenerFuerza()
        {
            return $this->fuerza;
        }

        public function asignarSobrenombre($name){
            $this->sobrenombre = $name;
        }

        public function obtenerSobrenombre()
        {
            return $this->sobrenombre;
        }
    }

    class Personaje extends Mago
    {

        private $nombre;
        private $velocidad;

        public function __construct($name) # Método constructor
        {
            $this->nombre = $name;
            $this->velocidad = 8;
        }

        public function lanzarBolaFuego()
        {
            return 'Ha lanzado un papel en llamas';
        }

        public function lanzarEscarcha()
        {
            return 'Ha lanzado una bola de nieve';
        }

        public function lanzarEscarchaPadre(){
            return parent::lanzarEscarcha();
        }

        public function obtenerNombre()
        {
            return $this->nombre;
        }

        public function obtenerVelocidad()
        {
            return $this->velocidad;
        }
    }

    $character = new Personaje('Penguin');

    echo 'Me llamo ' . $character->obtenerNombre() . '<br>';

    echo $character->obtenerNombre() . ": " . $character->lanzarEscarcha() . '<br>';
    echo  'Llamando habilidad padre: ' . $character->lanzarEscarchaPadre();

    ?>
</body>

</html>