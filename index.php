<?php
//llamamos el archivo de la conexion
require_once 'conexion.php';

try{
    //Realizamos la consulta a prolog
    $consulta = 'todas_las_peliculas';
    $resultados = consultas($consulta);

    //imprimimos los resultados
    foreach ($resultados as $resultado){
        echo "ID: " . $resultado['ID'] . "\n";
        echo "Titulo: " . $resultado['Titulo'] . "\n";
        echo "Categoria: " . $resultado['Categoria'] . "\n";
        echo "Year: " . $resultado['Year'] . "\n";
        echo "Sinopsis: " . $resultado['Sinopsis'] . "\n";
        echo "Duracion: " . $resultado['Duracion'] . " minutos\n";
        echo "Actores: " . $resultado['Actores'] . "\n";
        echo "Idioma: " . $resultado['Idioma'] . "\n";
        echo "---------------------------\n";
    }
} catch (Excetion $e){
    echo 'Error: ' . $e->getMessage();
}

?>