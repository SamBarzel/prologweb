<?php
require_once 'conexion.php';
require_once 'template/cabecera_index.php';

if (isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];

    try {
        // Realizamos la consulta a Prolog
        $consulta = "pelis_categoria('$categoria').";
        echo "Consulta Prolog: " . htmlspecialchars($consulta) . "<br>"; // Línea de depuración
        $resultados = consultas($consulta);

        if (count($resultados) > 0) {
            $todo = $resultados;
        } else {
            echo "No se encontraron resultados para la categoría proporcionada.";
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo "No se ha proporcionado una categoría.";
}
?>

<section class="movies">

<!--
  - filter bar
-->
<div class="filter-bar">
  <div class="filter-dropdowns">
    <?php
    //ucfirst — Convierte el primer caracter de una cadena a mayúsculas
    $categoria = ucfirst($categoria);
echo '<h1>Todas las Peliculas ('. $categoria .')</h1>';
   ?>
  </div>
</div>

<!--
  - movies grid
-->
<div class="movies-grid">

<?php 
if (isset($todo) && count($todo) > 0) {
    foreach ($todo as $resultado) {
        cards($resultado);
    }
} else {
    echo "No hay series para mostrar.";
}

function cards($todo){
  $id = htmlspecialchars($todo['Id']);
  $titulo = htmlspecialchars($todo['Titulo']);
  $categoria = htmlspecialchars($todo['Categoria']);
  $year = htmlspecialchars($todo['Year']);
  $sinopsis = htmlspecialchars($todo['Sinopsis']);
  $duracion = htmlspecialchars($todo['Duracion']);
  $director = htmlspecialchars($todo['Director']);
  $actores = htmlspecialchars($todo['Actores']);
  $idioma = htmlspecialchars($todo['Idioma']);

  echo '<div class="movie-card">';
    echo '<div class="card-head">';
      echo '<img src="./assets/images/pelis/' . $id . '.png" alt="" class="card-img">';

      echo '<div class="card-overlay">';

        echo '<div class="bookmark">';
          echo '<ion-icon name="bookmark-outline"></ion-icon>';
        echo '</div>';

        echo '<div class="rating">';
          echo '<ion-icon name="star-outline"></ion-icon>';
          echo '<span>6.4</span>';
        echo '</div>';

        echo '<div class="play">';
          echo '<ion-icon name="play-circle-outline"></ion-icon>';
        echo '</div>';
      echo '</div>';
    echo '</div>';

    echo '<div class="card-body">';
    echo '<h3 class="card-title"><a href="info.php?id=' . $id . '">' . $titulo . '</a></h3>';

      echo '<div class="card-info">';
        echo '<span class="genre">' . $categoria . '</span>';
        echo '<span class="year">' . $year . '</span>';
      echo '</div>';
    echo '</div>';

  echo '</div>';
}
?>
</div>

<!-- Optionally include a button for loading more content dynamically -->
<button class="load-more">Ver Más</button>

</section>

<?php
require_once 'template/pie_index.php';
?>
