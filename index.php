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

    <div id="p-float">
      <?php
        $sql = "SELECT * FROM Product";
        displayProducts($sql); ?>
    </div>



    <?php include "include/html/footer.php" ?>
  </body>
