<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautysalon | Home</title>
    <?php include('assets/style.php') ?>
  </head>
  <body>
  <!-- Topbar -->
  <?php include('assets/topbar_index.php') ?>

  <!-- Body -->
  <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-use-m-u-i="false">
    <!-- arrow slides -->
    <div class="orbit-wrapper">
      <div class="orbit-controls">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
      </div>
      <!-- images slides -->
      <ul class="orbit-container">
        <li class="is-active orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" src="images/1.jpg" alt="Space">
            <figcaption class="orbit-caption">Gandang pangmayaman sa presyong mura lang.</figcaption>
          </figure>
        </li>
        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" src="images/2.jpg" alt="Space">
            <figcaption class="orbit-caption">There's always a promo!!!</figcaption>
          </figure>
        </li>
        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" src="images/3.jpg" alt="Space">
            <figcaption class="orbit-caption">The looks you desire we guarantee.</figcaption>
          </figure>
        </li>
        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" src="images/4.jpg" alt="Space">
            <figcaption class="orbit-caption">Beautifully hair</figcaption>
          </figure>
        </li>
        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" src="images/5.jpg" alt="Space">
            <figcaption class="orbit-caption">Great cut designs</figcaption>
          </figure>
        </li>
      </ul>
    </div>
</div>





  <!-- Footer -->
  <?php include('assets/down-bar_index.php') ?>
  	<script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
  </body>
</html>