<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/main.css">
        <title></title>
    </head>
    <body>
      <?php include "include/html/header.php" ?>

        <form class="regForm" action="include/php/processRegistration.php" method="post">
        <div>
        <label>First name:</label>
        <input type="text" name="firstName" placeholder="Enter first name...">
        </div>
        <div>
        <label>Last name:</label>
        <input type="text" name="lastName" placeholder="Enter last name...">
        </div>
        <div>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter email...">
        </div>
        <div>
        <label>Password:</label>
        <input type="password" name="pwd" placeholder="Enter password...">
        </div>
        <div>
        <label>Confirm password:</label>
        <input type="password" name="confirmPwd" placeholder="Enter password again...">
        </div>
        <button type="submit" name="btnReg">Register</button>
        </form>

      <?php include "include/html/footer.php" ?>
    </body>
</html>
