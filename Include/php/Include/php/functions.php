<?php
  include "database.php";

  function displayProductInfo($artNo){
    $sql = "SELECT * FROM Product WHERE artNo='$artNo'";
    $result = dBQuery($sql);

    //Ser till att det finns något att mata ut.
    if(mysqli_num_rows($result) > 0){
      while($row = $result->fetch_assoc()){
        echo("<div class='product-info'>
                <div class='product-title'>
                  <h2>".$row['name']."</h2>
                  <h4>".$row['artNo']."</h4>
                </div>
                <div class='product-description'>
                  <p>".$row['description']."</p>
                </div>
                <div class='product-price'>
                  <p>".$row['price']." kr</p>
                </div>
              </div>");

      //OBS detta är tidigare html kod, just incase.
      /* <div class="productinfo">
        <div class="product-title">
          <h2>Product name</h2>
          <h4>art nr</h4>
        </div>
        <div class="product-text">
          <p>Following the wild success of our 070, players demanded we adapt the sleek, modern design to a 6 string. The 060 is the result! This guitar is everything great about our instruments in one package.</p>
        </div>
        <div class="product-price">
          <p>Pris!</p>
        </div>
      </div> */
      }
    }
  }
  function displayLogin(){
    if (isset($_SESSION['email'])){
      echo("<a id='logout' href='include/php/processLogout.php'>Logout</a>");
    } else {
      echo("<a id='login' href='login.php'>Login</a>");
    }
  }
?>
