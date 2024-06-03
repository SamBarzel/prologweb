<footer>

<div class="footer-content">

  <div class="footer-brand">
    <img src="./assets/images/logo.png" alt="" class="footer-logo">
    <p class="slogan">Integrantes de Spartan Movies: <br>
      Maria Isabel Alvarez Moreno <br>
      Antonio Mendia Esquivel <br>
      Samuel Pienda Rodríguez <br>
      Manuel Vergara Martinez</p>


    <div class="social-link">

      <a href="#">
        <ion-icon name="logo-facebook"></ion-icon>
      </a>
      <a href="#">
        <ion-icon name="logo-twitter"></ion-icon>
      </a>
      <a href="#">
        <ion-icon name="logo-instagram"></ion-icon>
      </a>
      <a href="#">
        <ion-icon name="logo-tiktok"></ion-icon>
      </a>
      <a href="#">
        <ion-icon name="logo-youtube"></ion-icon>
      </a>

    </div>
  </div>


  <div class="footer-links">
    <ul>

      <h4 class="link-heading">Spartan Movies</h4>

      <li class="link-item"><a href="#">About us</a></li>
      <li class="link-item"><a href="#">My profile</a></li>
      <li class="link-item"><a href="#">Pricing plans</a></li>
      <li class="link-item"><a href="#">Contacts</a></li>

    </ul>

    <ul>

      <h4 class="link-heading">Browse</h4>

      <li class="link-item"><a href="#">Live Tv</a></li>
      <li class="link-item"><a href="#">Live News</a></li>
      <li class="link-item"><a href="#">Live Sports</a></li>
      <li class="link-item"><a href="#">Streaming Library</a></li>

    </ul>

    <ul>

      <li class="link-item"><a href="#">TV Shows</a></li>
      <li class="link-item"><a href="#">Movies</a></li>
      <li class="link-item"><a href="#">Kids</a></li>
      <li class="link-item"><a href="#">Collections</a></li>

    </ul>

    <ul>

      <h4 class="link-heading">Help</h4>

      <li class="link-item"><a href="#">Account & Billing</a></li>
      <li class="link-item"><a href="#">Plans & Pricing</a></li>
      <li class="link-item"><a href="#">Supported devices</a></li>
      <li class="link-item"><a href="#">Accessibility</a></li>

    </ul>
  </div>

</div>

<div class="footer-copyright">

  <div class="copyright">
    <p>&copy; copyright 2024 Stpartan Web & Spartan Movies</p>
  </div>

  <div class="wrapper">
    <a href="#">Privacy policy</a>
    <a href="#">Terms and conditions</a>
  </div>

</div>

</footer>

</div>





<!--
- custom js link
-->
<script src="./assets/js/main.js"></script>

<!--
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    function navigateTo(url) {
      window.location.href = url;
    }
  </script>
  <script>
function redirectToCategory(selectElement) {
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var url = selectedOption.getAttribute('data-url');
    if (url) {
        window.location.href = url;
    }
}

document.getElementById('genre-categoria-peliculas').addEventListener('change', function() {
    redirectToCategory(this);
});

document.getElementById('genre-categoria-series').addEventListener('change', function() {
    redirectToCategory(this);
});
</script>

</body>

</html>