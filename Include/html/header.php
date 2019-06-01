<?php
session_start();
require "include/php/functions.php";
?>
<header>
  <div class="header">
    <h1>Header</h1>
  </div>
  <nav>
    <ul>
        <li><a class="active" href="index.php">Startsida</a></li>
        <li><a href="products.php">Produktsida</a></li>
        <li><a href="register.php">Registrera dig</a></li>
        <li><a href="order.php">Ordersida</a></li>
        <li><a href="search.php">Search results</a></li>
        <li style='float:right'><?php displayLogin(); ?></li>
    </ul>
  </nav>
</header>
