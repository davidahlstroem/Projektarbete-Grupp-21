
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/cart.css">
    <meta charset="utf-8">
    <title>StartPage</title>
  </head>
  <body>
    <?php include "include/html/header.php" ?>

    <?php
      displayCartItems();
      displayTotalPrice();
    ?>


    <?php include "include/html/footer.php" ?>
  </body>
