
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
      <?php
        include "include/html/header.php";
        $_SESSION['artNo'] = $_GET['artNo'];
      ?>

      <div class="container">
        <div class="product-overview">
          <?php
            displayProductInfo($_SESSION['artNo']);
            displaySpecification($_SESSION['artNo']); //kolla alt styling
          ?>
          <form class="addToCart-form" action="include/php/processCart.php?artNo=<?php echo($_SESSION['artNo']); ?>" method="post">
            <button class="p-add" type="submit" name="addToCart">add To Cart</button>
          </form>
          <br>
          <br>
        </div>
      </div>

      <?php

      if (isset($_SESSION['email'])) {
        echo "<form method='POST' onsubmit='return isEmpty3()' action='".setComments($conn)."' >
            <input type='hidden' name='uid' value='".$_SESSION['email']."'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea autofocus id='username' name= 'message' ></textarea><br>
            <button class ='commentBtn' type 'submit' name='commentSubmit'> Comment </button>
            </form>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>";
      } else {
        echo "Log in to make a comment! <br><br>";
      }
      getComments($conn);
      ?>
    <?php include "include/html/footer.php" ?>
    </body>
</html>
