<?php
require 'includes/funciones.php';
$servicios = obtenerServicios();
echo json_encode($servicios); //Convierte a json para desestructurar
