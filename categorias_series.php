<?php
require_once 'conexion.php';
require_once 'template/cabecera_index.php';

if (isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];

    try {
        // Realizamos la consulta a Prolog
        $consulta = "series_categoria('$categoria').";
        echo "Consulta Prolog: " . htmlspecialchars($consulta) . "<br>"; // Línea de depuración
        $resultados = consultas($consulta);

        // Imprimimos los resultados
        foreach ($resultados as $resultado) {
            echo "Id: " . $resultado['Id'] . "<br>";
            echo "Titulo: " . $resultado['Titulo'] . "<br>";
            echo "Categoria: " . $resultado['Categoria'] . "<br>";
            echo "Year: " . $resultado['Year'] . "<br>";
            echo "Sinopsis: " . $resultado['Sinopsis'] . "<br>";
            echo "Duracion: " . $resultado['Duracion'] . " minutos<br>";
            echo "Director: " . $resultado['Director'] . "<br>";
            echo "Actores: " . $resultado['Actores'] . "<br>";
            echo "Idioma: " . $resultado['Idioma'] . "<br>";
            echo "---------------------------<br>";
        }
        
        $todo = array();
        foreach ($resultados as $resultado) {
            $todo[] = $resultado;
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo "No se ha proporcionado una categoría.";
}

require_once 'template/pie_index.php';
?>
