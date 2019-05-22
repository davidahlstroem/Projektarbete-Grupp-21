<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta charset="utf-8">
    <title>loginPage</title>
  </head>
    <body>
      <?php include "assets/html/header.php" ?>

        <form class="commentForm" action="" method="post">
            <div class="email">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Enter email...">
            </div>    
            <div class="comment">
                <label>Kommentar:</label>
                <input type="password" name="pwd" placeholder="Enter password...">
            </div>    
            <div class="button">
                <button type="submit" name="btnLogin">Login</button>
            </div>
        </form>

      <?php include "assets/html/footer.php" ?>
    </body>
</html>