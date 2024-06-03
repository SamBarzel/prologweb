<?php
// Llamamos al archivo de la conexión
require_once 'conexion.php';
require_once 'template/cabecera_index.php';

if (isset($_GET['year'])) {
    $year = $_GET['year'];

    try {
        // Realizamos la consulta a Prolog
        $consulta = "todo_el_contenido_series($year).";
        echo "Consulta Prolog: " . htmlspecialchars($consulta) . "<br>"; // Línea de depuración

        // Suponiendo que consultas($consulta) devuelve una cadena JSON con los resultados
        $resultados = consultas($consulta);
        
        

        if ($resultados && count($resultados) > 0) {
           /* foreach ($resultados as $resultado) {
                echo "Id: " . htmlspecialchars($resultado['Id']) . "<br>";
                echo "Titulo: " . htmlspecialchars($resultado['Titulo']) . "<br>";
                echo "Categoria: " . htmlspecialchars($resultado['Categoria']) . "<br>";
                echo "Year: " . htmlspecialchars($resultado['Year']) . "<br>";
                echo "Sinopsis: " . htmlspecialchars($resultado['Sinopsis']) . "<br>";
                echo "Duracion: " . htmlspecialchars($resultado['Duracion']) . " minutos<br>";
                echo "Director: " . htmlspecialchars($resultado['Director']) . "<br>";
                echo "Actores: " . htmlspecialchars($resultado['Actores']) . "<br>";
                echo "Idioma: " . htmlspecialchars($resultado['Idioma']) . "<br>";
                echo "---------------------------<br>";
            }*/
            $todo = array();
    foreach ($resultados as $resultado){
        $todo[] = $resultado;
    }
        } else {
            echo "No se encontraron resultados para el año proporcionado.";
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo "No se ha proporcionado un año.";
}
?>

<section class="movies">

<!--
  - filter bar
-->
<div class="filter-bar">
  <div class="filter-dropdowns">
  <?php
    echo '<h1>Por Año ('. $year .')</h1>';
?>
   
  </div>
</div>


<!--
  - movies grid
-->
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 0; $i < 50; $i++){
  if(isset($todo[$i])){
     // $todo = $todo[$i];
      cards($todo[$i]);
  }
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
      echo '<img src="./assets/images/movies/' . $id . '.png" alt="" class="card-img">';

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
    echo '<h3 class="card-title"><a href="info_s.php?id=' . $id . '">' . $titulo . '</a></h3>';

      echo '<div class="card-info">';
        echo '<span class="genre">' . $categoria . '</span>';
        echo '<span class="year">' . $year . '</span>';
      echo '</div>';
    echo '</div>';

  echo '</div>';
 




}
?>
</div>
<button class="load-more">Ver Más</button>


</section>


      <?php
require_once 'template/pie_index.php';
?>