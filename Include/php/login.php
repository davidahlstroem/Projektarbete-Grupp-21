<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta charset="utf-8">
    <title>loginPage</title>
  </head>
    <body>
      <?php include "include/html/header.php" ?>

        <form class="loginForm" action="include/php/processLogin.php" method="post">
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

      <?php include "include/html/footer.php" ?>
    </body>
</html>
