<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta charset="utf-8">
    <title>loginPage</title>
  </head>
    <body>
      <?php include "assets/html/header.php" ?>

        <ul>
        <li><a href="index.php">Startsida</a></li>
        <li><a href="products.php">Produktsida</a></li>
        <li><a href="register.php">Registrera dig</a></li>
        <li><a href="order.php">Ordersida</a></li>
        <li style="float:right"><a id="login" class="active" href="login.php">Logga in</a></li>
        </ul>

        <form class="loginForm" action="" method="post">
          <label>Email:</label>
          <input type="email" name="email" placeholder="Enter email...">
          <label>Password:</label>
          <input type="password" name="pwd" placeholder="Enter password...">
          <button type="submit" name="btnLogin">Login</button>
        </form>

      <?php include "assets/html/footer.php" ?>
    </body>
</html>
