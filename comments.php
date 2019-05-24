<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta charset="utf-8">
    <title>loginPage</title>
  </head>
    <body>
      <?php include "assets/html/header.php" ?>

         <form class="loginForm" action="" method="post">
          <div>
          <label>Email:</label>
          <input type="email" name="email" placeholder="Enter email...">
          </div>
          <div>
          <label>Password:</label>
          <input type="password" name="pwd" placeholder="Enter password...">
          </div>
          <button type="submit" name="btnLogin">Login</button>
        </form>

      <?php include "assets/html/footer.php" ?>
    </body>
</html>
