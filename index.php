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

    <form action = "search2.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search" value"Enter"></button>
    </form>






    <div id="p-float">
      <?php displayProducts(); ?>
    </div>
    <form class="" action="products.php" method="get">
      <button type="submit" name="button" value="hej">Link</button>
    </form>



    <?php include "include/html/footer.php" ?>
  </body>
