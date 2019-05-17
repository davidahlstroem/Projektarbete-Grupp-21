<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>loginPage</title>
  </head>
    <body>
        <header>
            <nav>
                <h1>Välkommen hit</h1>
                <ul>
                    <li><a class="active" href="#start">Startsida</a></li>
                    <li><a href="#produkt">Produktsida</a></li>
                    <li><a href="#kontakt">Kontakta oss</a></li>
                    <li><a href="#order">Ordersida</a></li>
                </ul>
            </nav>
        </header>

        <form class="loginForm" action="" method="post">
            <label>Email:</label>
            <input type="email" name="email" placeholder="Enter email...">
            <label>Password:</label>
            <input type="password" name="pwd" placeholder="Enter password...">
            <button type="submit" name="btnLogin">Login</button>
        </form>
    </body>
</html>
