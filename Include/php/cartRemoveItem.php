<?php
session_start();

if (isset($_POST['cartRemoveBtn'])) {
  if(count($_SESSION['shoppingCart']) > 0){
    foreach ($_SESSION['shoppingCart'] as $key => $value) {
      if($value == $_GET['artNo']){
        //$temp = $_SESSION['shoppingCart'][$key]; ||
        $_SESSION['shoppingCart'][$key] =  $_SESSION['shoppingCart'][count($_SESSION['shoppingCart'])-1];
        array_pop($_SESSION['shoppingCart']);
        //unset($_SESSION['shoppingCart');
      }
    }
    header("Location: ../../cart.php");
  } else {
      unset($_SESSION['shoppingCart']);
      header("Location: ../../cart.php");
    }
  }
?>
