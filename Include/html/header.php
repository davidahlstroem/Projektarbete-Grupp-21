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
        <li style='float:right'><a href="register.php">Register</a></li>
        <li><a href="map.php">Find our store</a></li>
        <li><form action = "search.php" method="POST">
        <input class="search" type="text" name="search" placeholder="Search...">
        <button class="searchBtn" type="submit" name="submit-search" value="Enter"></button>
        </form></li>
        <li style='float:right'><?php displayLogin(); ?></li>
        <li style='float:right'><?php displayShoppingCart(); ?></li>
    </ul>
  </nav>
</header>
