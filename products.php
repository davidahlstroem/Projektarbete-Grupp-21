<?php
  date_default_timezone_set('Europe/Stockholm');
  include "Include/php/connection.php";
  include "Include/php/functionsComments.php";
 ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/productinfo.css">
        <script src="assets/js/validate.js"></script>
        <title></title>
    </head>
    <body>
      <?php include "include/html/header.php" ?>

      <div class="container">
        <div class="product-overview">
          <div class="img">
            <img src="assets/img/body/st_black_body.jpg" alt="product-picture">
          </div>
          <?php displayProductInfo(101321); ?>

            <form class="product-order" action="index.php" method="get">
              <button id="orderBtn" type="submit" name="orderBtn">Order</button>
            </form>
        </div>
      </div>


      <?php

      if (isset($_SESSION['email'])) {
        echo "<form method='POST' onsubmit='return isEmpty3()' action='".setComments($conn)."' >
            <input type='hidden' name='uid' value='".$_SESSION['email']."'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea autofocus id='username' name= 'message' ></textarea><br>
            <button class ='commentBtn' type 'submit' name='commentSubmit'> Comment </button>
            </form>";
      } else {
        echo "Log in to make a comment! <br><br>";
      }
      getComments($conn);
      include "include/html/footer.php"
      ?>


    </body>
</html>
