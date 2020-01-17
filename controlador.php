<?php
 // Requerir el modelo
 require_once('modelo.php');
 // Extraer la lista de mensajes
 $mensajes = ListarProductos();
 // Requerir la vista
 require('vista.php');
