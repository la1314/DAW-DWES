<?php
 // Requerir el modelo
 require_once('modelo.php');
 // Extraer la lista de mensajes
 $mensajes = ListarProductos();

 require_once('vista_logica.php');
 // Requerir la vista
 require('vista.php');
