
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

      <?php include "include/html/footer.php" ?>
    </body>
</html>
