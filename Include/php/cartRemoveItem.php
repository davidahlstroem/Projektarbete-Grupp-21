<?php
session_start();

if (isset($_POST['cartRemoveBtn'])) {
  if(count($_SESSION['shoppingCart']) > 0){
    foreach ($_SESSION['shoppingCart'] as $key => $value) {
      if($value == $_GET['artNo']){
        unset($_SESSION['shoppingCart'][$key]);
        array_pop($_SESSION['shoppingCart']);
        break;
      }
    }
    header("Location: ../../cart.php");
  } else {
    unset($_SESSION['shoppingCart']);
  }
  }



?>
