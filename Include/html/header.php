<?php
session_start();
require "include/php/functions.php";
?>
<header>
  <div class="header">
    <h1></h1>
  </div>
  <nav>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="order.php">Order</a></li>

        <li style='float:right'><?php displayLogin(); ?></li>
        <li style='float:right'><a href="cart.php">Shopping Cart</a></li>
    </ul>
  </nav>
</header>
