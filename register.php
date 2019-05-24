<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/main.css">
        <title></title>
    </head>
    <body>
      <?php include "assets/html/header.php" ?>

        <form class="regForm" action="assets/php/processRegistration.php" method="POST">
        <label>First name:</label>
        <input type="text" name="firstName" placeholder="Enter first name...">
        <br>
        <label>Last name:</label>
        <input type="text" name="lastName" placeholder="Enter last name...">
        <br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter email...">
        <br>
        <label>Password:</label>
        <input type="password" name="pwd" placeholder="Enter password...">
        <br>
        <label>Confirm password:</label>
        <input type="password" name="confirmPwd" placeholder="Enter password again...">
        <button type="submit" name="btnReg">Register</button>
        </form>

      <?php include "assets/html/footer.php" ?>
    </body>
</html>
