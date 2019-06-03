
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

    <form action = "search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search" value"Enter"></button>
    </form>

    <?php
      displayCartItems();
      displayTotalPrice();
    ?>

    <form class="order-form" action="order.php?totalPrice=<?php echo($totalPrice); ?>" method="POST">
      <button type="submit" name="orderBtn"></button>
    </form>



    <?php
    if(isset($_SESSION['shoppingCart'])){
      echo (count($_SESSION['shoppingCart']));
      }
    ?>


    <?php include "include/html/footer.php" ?>
  </body>
