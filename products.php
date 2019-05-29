
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/productinfo.css">
        <title></title>
    </head>
    <body>
      <?php include "include/html/header.php" ?>

        <div class="product-overview">
          <div>
            <img src="assets/img/body/st_black_body.jpg" alt="product-picture">
          </div>
          <?php displayProductInfo(101321); ?>
          <div class="product-order">
            <a href="#orderPage">Order!</a>
          </div>
        </div>

      <?php include "include/html/footer.php" ?>
    </body>
</html>
