<?php
      require "Include/php/connection.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/index_page.css">
    <link rel="stylesheet" href="assets/css/productinfo.css">
    <meta charset="utf-8">
    <title>StartPage</title>
  </head>
  <body>
<?php include "include/html/header.php" ?>


          <div class="hittahit_rubrik">
            Find our store
          </div>
          <br><br>
          <div class = "hittahit_block">
          <p class="hittahit_text">
            Our store is located at 261 Waterloo Road. Find us to retrieve your item.
            As a thank you for choosing to pick up your order in store, we will give you a coupon
            of 25€ EUR to use at the next purchase in our store. <br>
            (applies when you shop for more than 100€ EUR).
<br><br>
            Polychrome Court<br>
            261 Waterloo Rd<br>
            South Bank, London<br>
            SE1 8XH<br><br>

            Opening hours	 <br>
            Mon	10:00-19:00<br>
            Tue	10:00-19:00<br>
            Wed	10:00-19:00<br>
            Thu	10:00-19:00<br>
            Fri	10:00-19:00<br>
            Sat	10:00-17:00<br>
            Sun	10:00-17:00<br>
          </p>
          </div>


      <div id="map"></div>
    <script>
      function initMap() {

        var location = {lat: 51.5040336, lng: -0.1120844};
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: location
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT_CRrXPL84yon0-QdwMFSeVdaYLkNVUc&callback=initMap"></script>


    <?php include "include/html/footer.php" ?>

  </body>
