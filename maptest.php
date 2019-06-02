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

    <style>
      #map {
        height: 500px;
        width: 100px;
      }
    </style>

  </head>
  <body>

      <div id="map">



      </div>

    <script>
      function initMap() {
        var location = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
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
