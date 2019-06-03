<?php
session_start();
if(isset($_POST['addToCart'])){

  if(isset($_SESSION['shoppingCart'])) {
    if(!in_array($_GET['artNo'], $_SESSION['shoppingCart'])){
      $lastIndex = count($_SESSION['shoppingCart']);
      $_SESSION['shoppingCart'][$lastIndex] = $_GET['artNo'];

      header("Location: ../../index.php?add=success");
      exit();
    } else {
      header("Location: ../../index.php?error=cartContainsItem");
      exit();
    }


  } else {
    //$itemArray = array("artNo" => "123113", "name" => "Ibanez", "price" => "3000");
     $_SESSION['shoppingCart'][0] = $_GET['artNo'];
     header("Location: ../../index.php?add=success");
     exit();
  }
}

?>
