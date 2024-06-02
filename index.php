<?php
//llamamos el archivo de la conexion
require_once 'conexion.php';
require_once 'template/cabecera_index.php';

try{
    //Realizamos la consulta a prolog
    $consulta = 'todas_series';
    $resultados = consultas($consulta);

    //imprimimos los resultados
    /*foreach ($resultados as $resultado){
        echo "Id: " . $resultado['Id'] . "\n";
        echo "Titulo: " . $resultado['Titulo'] . "\n";
        echo "Categoria: " . $resultado['Categoria'] . "\n";
        echo "Year: " . $resultado['Year'] . "\n";
        echo "Sinopsis: " . $resultado['Sinopsis'] . "\n";
        echo "Duracion: " . $resultado['Duracion'] . " minutos\n";
        echo "Director: " . $resultado['Director'] . "\n";
        echo "Actores: " . $resultado['Actores'] . "\n";
        echo "Idioma: " . $resultado['Idioma'] . "\n";
        echo "---------------------------\n";
    }*/
    $todo = array();
    foreach ($resultados as $resultado){
        $todo[] = $resultado;
    }
} catch (Exception $e){
    echo 'Error: ' . $e->getMessage();
}
?>

<section class="movies">

<!--
  - filter bar
-->
<div class="filter-bar">

  <div class="filter-dropdowns">
  <h1>Series</h1>


  </div>

  

</div>


<!--
  - movies grid
-->
<h2>Dramas</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 0; $i < 6; $i++){
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

<h2>Ciencia Ficción</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 10; $i < 16; $i++){
  if(isset($todo[$i])){
     //$todo = $todo[$i];
      cards1($todo[$i]);
  }
}
function cards1($todo){
  $id = htmlspecialchars($todo['Id']);
  $titulo = htmlspecialchars($todo['Titulo']);
  $categoria = htmlspecialchars($todo['Categoria']);
  $year = htmlspecialchars($todo['Year']);
  $sinopsis = htmlspecialchars($todo['Sinopsis']);
  $duracion = htmlspecialchars($todo['Duracion']);
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

<h2>Aventuras</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 20; $i < 26; $i++){
  if(isset($todo[$i])){
     //$todo = $todo[$i];
      cards2($todo[$i]);
  }
}
function cards2($todo){
  $id = htmlspecialchars($todo['Id']);
  $titulo = htmlspecialchars($todo['Titulo']);
  $categoria = htmlspecialchars($todo['Categoria']);
  $year = htmlspecialchars($todo['Year']);
  $sinopsis = htmlspecialchars($todo['Sinopsis']);
  $duracion = htmlspecialchars($todo['Duracion']);
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


<h2>Terror</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 30; $i < 35; $i++){
  if(isset($todo[$i])){
     //$todo = $todo[$i];
      cards3($todo[$i]);
  }
}
function cards3($todo){
  $id = htmlspecialchars($todo['Id']);
  $titulo = htmlspecialchars($todo['Titulo']);
  $categoria = htmlspecialchars($todo['Categoria']);
  $year = htmlspecialchars($todo['Year']);
  $sinopsis = htmlspecialchars($todo['Sinopsis']);
  $duracion = htmlspecialchars($todo['Duracion']);
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

<h2>Anime</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 35; $i < 41; $i++){
  if(isset($todo[$i])){
     //$todo = $todo[$i];
      cards4($todo[$i]);
  }
}
function cards4($todo){
  $id = htmlspecialchars($todo['Id']);
  $titulo = htmlspecialchars($todo['Titulo']);
  $categoria = htmlspecialchars($todo['Categoria']);
  $year = htmlspecialchars($todo['Year']);
  $sinopsis = htmlspecialchars($todo['Sinopsis']);
  $duracion = htmlspecialchars($todo['Duracion']);
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

<h2>Comedia</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 45; $i < 51; $i++){
  if(isset($todo[$i])){
     //$todo = $todo[$i];
      cards5($todo[$i]);
  }
}
function cards5($todo){
  $id = htmlspecialchars($todo['Id']);
  $titulo = htmlspecialchars($todo['Titulo']);
  $categoria = htmlspecialchars($todo['Categoria']);
  $year = htmlspecialchars($todo['Year']);
  $sinopsis = htmlspecialchars($todo['Sinopsis']);
  $duracion = htmlspecialchars($todo['Duracion']);
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

<h2>Suspenso</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 54; $i < 60; $i++){
  if(isset($todo[$i])){
     //$todo = $todo[$i];
      cards6($todo[$i]);
  }
}
function cards6($todo){
  $id = htmlspecialchars($todo['Id']);
  $titulo = htmlspecialchars($todo['Titulo']);
  $categoria = htmlspecialchars($todo['Categoria']);
  $year = htmlspecialchars($todo['Year']);
  $sinopsis = htmlspecialchars($todo['Sinopsis']);
  $duracion = htmlspecialchars($todo['Duracion']);
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

<h2>Animación</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 64; $i < 70; $i++){
  if(isset($todo[$i])){
     //$todo = $todo[$i];
      cards7($todo[$i]);
  }
}
function cards7($todo){
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

<h2>Policial</h2>
<div class="movies-grid">

<?php 
// Contador para mostrar 20 series
for ($i = 71; $i < 77; $i++){
  if(isset($todo[$i])){
     //$todo = $todo[$i];
      cards8($todo[$i]);
  }
}
function cards8($todo){
  $id = htmlspecialchars($todo['Id']);
  $titulo = htmlspecialchars($todo['Titulo']);
  $categoria = htmlspecialchars($todo['Categoria']);
  $year = htmlspecialchars($todo['Year']);
  $sinopsis = htmlspecialchars($todo['Sinopsis']);
  $duracion = htmlspecialchars($todo['Duracion']);
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
<button class="load-more">Ver Más</button><br>
</section>

<!--
        - #Section de Categotia
      -->
      <section class="category" id="category_series">

        <h2 class="section-heading">Categoria Series</h2>

        <div class="category-grid">
        <?php
        echo  '<div class="category-card">';
         echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
          echo  '<div class="name">';
            echo  '<h3><a href="categorias_series.php?categoria=drama">Drama</a></h3>';
          echo  '</div>';
          echo '<div class="total">100</div>';
          echo '</div>';
          
          echo  '<div class="category-card">';
         echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
          echo  '<div class="name">';
            echo  '<h3><a href="categorias_series.php?categoria=ciencia_ficcion">Ciencia Ficción</a></h3>';
          echo  '</div>';
          echo '<div class="total">100</div>';
          echo '</div>';

          echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias_series.php?categoria=aventura">Aventura</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
           echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
            echo  '<div class="name">';
              echo  '<h3><a href="categorias_series.php?categoria=terror">Terror</a></h3>';
            echo  '</div>';
            echo '<div class="total">100</div>';
            echo '</div>';

            echo  '<div class="category-card">';
            echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
             echo  '<div class="name">';
               echo  '<h3><a href="categorias_series.php?categoria=anime">Anime</a></h3>';
             echo  '</div>';
             echo '<div class="total">100</div>';
             echo '</div>';

             echo  '<div class="category-card">';
             echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
              echo  '<div class="name">';
                echo  '<h3><a href="categorias_series.php?categoria=comedia">Comedia</a></h3>';
              echo  '</div>';
              echo '<div class="total">100</div>';
              echo '</div>';

              echo  '<div class="category-card">';
              echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
               echo  '<div class="name">';
                 echo  '<h3><a href="categorias_series.php?categoria=suspenso">Suspenso</a></h3>';
               echo  '</div>';
               echo '<div class="total">100</div>';
               echo '</div>';

               echo  '<div class="category-card">';
               echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
                echo  '<div class="name">';
                  echo  '<h3><a href="categorias_series.php?categoria=animacion">Animación</a></h3>';
                echo  '</div>';
                echo '<div class="total">100</div>';
                echo '</div>';
?>
        </div>

      </section>

      <!-- Fin de Categorias -->
<!--
  - load more button
-->
<?php 
require_once 'peliculas.php';
?>


</section>

<!--
        - #Section de Categotia
      -->
      <section class="category" id="category">

        <h2 class="section-heading">Categoria de Peliculas</h2>

        <div class="category-grid">
        <?php
        echo  '<div class="category-card">';
         echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
          echo  '<div class="name">';
            echo  '<h3><a href="categorias.php?categoria=accion">Acción</a></h3>';
          echo  '</div>';
          echo '<div class="total">100</div>';
          echo '</div>';
          
          echo  '<div class="category-card">';
         echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
          echo  '<div class="name">';
            echo  '<h3><a href="categorias.php?categoria=horror">Horror</a></h3>';
          echo  '</div>';
          echo '<div class="total">100</div>';
          echo '</div>';

          echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=suspenso">Suspenso</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
           echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
            echo  '<div class="name">';
              echo  '<h3><a href="categorias.php?categoria=documentales">Documentales</a></h3>';
            echo  '</div>';
            echo '<div class="total">100</div>';
            echo '</div>';         

            echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=romanticas">Romanticas</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=anime">Anime</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=fantasia">Fantasia</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=ciencia_ficcion">Ciencia Ficción</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=crimen">Crimen</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=comedia">Comedia</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=aventura">Aventura</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=familiares">Familiares</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=animacion">Animación</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=mexicanas">Mexicanas</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=marvel">Marvel</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=estrenos">Estrenos</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=drama">Dramas</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';

           echo  '<div class="category-card">';
          echo   '<img src="./assets/images/action.jpg" alt="" class="card-img">';
           echo  '<div class="name">';
             echo  '<h3><a href="categorias.php?categoria=deporte">Deportes</a></h3>';
           echo  '</div>';
           echo '<div class="total">100</div>';
           echo '</div>';
          ?>
        </div>

      </section>

      <!-- Fin de Categorias -->
<?php
require_once 'template/pie_index.php';
?>