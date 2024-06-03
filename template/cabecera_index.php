<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/images/icon.png" type="image/png">
  <title>Spartan Movies</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/media_query.css">
  <link rel="stylesheet" href="./assets/css/123.css">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>

<body>




  <!--
    - main container
  -->
  <div class="container">

    <!--
      - #HEADER SECTION
    -->

    <header class="">
      <div class="navbar">

        <!--
          - menu button for small screen
        -->
        <button class="navbar-menu-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>


        <a href="index.php" class="navbar-brand" style="width: 150px ;">
          <img src="./assets/images/logo1.png" alt="">
        </a>

        <!--
          - navbar navigation
        -->
        <nav class="navbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="navbar-link">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="navbar-link dropdown-toggle">Categorias</a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="#category" class="dropdown-item">Peliculas</a>
                  <ul class="sub-dropdown-menu">
                    <li><a href="#" class="dropdown-item">Acción</a></li>
                    <li><a href="#" class="dropdown-item">Comedia</a></li>
                    <li><a href="#" class="dropdown-item">Drama</a></li>
                    <!-- Añade más categorías de películas aquí -->
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a href="#category_series" class="dropdown-item">Series</a>
                  <ul class="sub-dropdown-menu">
                    <li><a href="#" class="dropdown-item">Drama</a></li>
                    <li><a href="#" class="dropdown-item">Comedia</a></li>
                    <li><a href="#" class="dropdown-item">Ciencia Ficción</a></li>
                    <!-- Añade más categorías de series aquí -->
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a href="#" class="dropdown-item">Deportes</a>
                  <ul class="sub-dropdown-menu">
                    <li><a href="#" class="dropdown-item">Live</a></li>
                    <li><a href="#" class="dropdown-item">Repeticiones</a></li>
                    
                    <!-- Añade más categorías de series aquí -->
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#live" class="navbar-link indicator">LIVE</a>
            </li>
          </ul>
        </nav>




       <!-- <nav class="">
          <ul class="navbar-nav">

            
            
            <li> <a href="destacadasp.php" class="navbar-link  indicator">Destacadas Pelis</a> </li>
            <li> <a href="destacadass.php" class="navbar-link  indicator">Destacadas Series</a> </li>


          </ul>
        </nav>

        
          - search and sign-in
        -->

        <div class="navbar-actions">

          <form action="#" class="navbar-form">
            <input type="text" name="search" placeholder="I'm looking for..." class="navbar-form-search">

            <button class="navbar-form-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

          </form>


          <!--
            - search button for small screen
          -->



        </div>

      </div>
    </header>





    <!--
      - MAIN SECTION
    -->
    <main>

      <!--
        - #BANNER SECTION
      -->
      <section class="banner">
  <!-- Radio buttons for navigation -->
  <input type="radio" name="slider" id="slide1" checked>
  <input type="radio" name="slider" id="slide2">
  <input type="radio" name="slider" id="slide3">

  <div class="slides">
    <!-- Slide 1 -->
    <div class="banner-card">
      <img src="./assets/images/John-Wick-3.jpg" class="banner-img" alt="">

      <div class="card-content">
        <div class="card-info">
          <div class="genre">
            <ion-icon name="film"></ion-icon>
            <span>Action/Thriller</span>
          </div>

          <div class="year">
            <ion-icon name="calendar"></ion-icon>
            <span>2019</span>
          </div>

          <div class="duration">
            <ion-icon name="time"></ion-icon>
            <span>2h 11m</span>
          </div>

          <div class="quality">4K</div>
        </div>

        <h2 class="card-title">John Wick: Chapter 3 - Parabellum</h2>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="banner-card">
      <img src="./assets/images/horror.jpg" class="banner-img" alt="">

      <div class="card-content">
        <div class="card-info">
          <div class="genre">
            <ion-icon name="film"></ion-icon>
            <span>Action/Thriller</span>
          </div>

          <div class="year">
            <ion-icon name="calendar"></ion-icon>
            <span>2019</span>
          </div>

          <div class="duration">
            <ion-icon name="time"></ion-icon>
            <span>2h 11m</span>
          </div>

          <div class="quality">4K</div>
        </div>

        <h2 class="card-title">Scary Movie</h2>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="banner-card">
      <img src="./assets/images/spider-man-no-way-home.jpg" class="banner-img" alt="">

      <div class="card-content">
        <div class="card-info">
          <div class="genre">
            <ion-icon name="film"></ion-icon>
            <span style="text-shadow: 6px 3px 8px rgba(0, 0, 0, 0.6); color: gray">Action/Thriller</span>
          </div>

          <div class="year">
            <ion-icon name="calendar"></ion-icon>
            <span style="text-shadow: 6px 3px 8px rgba(0, 0, 0, 0.6); color: gray">2021</span>
          </div>
          
          <div class="duration">
            <ion-icon name="time" ></ion-icon>
            <span style="text-shadow: 6px 3px 8px rgba(0, 0, 0, 0.6); color: gray">2h 47m</span>
          </div>

          <div class="quality" style="text-shadow: 6px 3px 8px rgba(0, 0, 0, 0.6);">4K</div>
        </div>

        <h2 class="card-title" style="text-shadow: 6px 3px 8px rgba(0, 0, 0, 0.6);">Spiderman: No way Home</h2>
      </div>
    </div>
  </div>

  <!-- Navigation labels -->
  <div class="navigation">
    <label for="slide1"></label>
    <label for="slide2"></label>
    <label for="slide3"></label>
  </div>
</section>