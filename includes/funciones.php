<?php

function obtenerServicios(): array
{
    try {

        //Importar una conexión
        require 'includes/database.php';

        //Escribir el código SQL
        $sql = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $sql);

        //Obtener los resultados
        $i = 0;
        $servicios = [];
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            $i++;
        }

        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}
