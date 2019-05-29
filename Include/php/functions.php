<?php
  include "database.php";

  /*TODO Vi vill i funktionen nedan (eller i ny funktion)
  lägga in en punktlista med alla komponenter från vår database
  (dvs specifikationer). För att knyta ihop våra databaser, till
  eventuell sökmotor, till api. //magnus
  */
  function displayProductInfo($artNo){
    $sql = "SELECT * FROM Product WHERE artNo='$artNo'";
    $result = dBQuery($sql);
    //Ser till att det finns något att mata ut.
    if(mysqli_num_rows($result) > 0){
      while($row = $result->fetch_assoc()){
        echo("<div class='product-img'>
                <img src='assets/img/product/".$row['artNo'].".jpeg' alt='product-picture'>
              </div>
              <div class='product-info'>
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

  function displayProducts(){
    $sql = "SELECT * FROM Product";
    $result = dBQuery($sql);

    //Ser till att det finns något att mata ut.
    if(mysqli_num_rows($result) > 0){
      while($row = $result->fetch_assoc()){
        echo("<div class='p-float'>
                <div class='p-float-in'>
                  <img class='p-img' src='assets/img/product/".$row['artNo'].".jpeg'/>
                  <div class='p-name'>".$row['name']."</div>
                  <div class='p-price'>".$row['price']." kr</div>
                  <form class='' action='products.php?artNo=".$row['artNo']."' method='POST'>
                    <button class='p-add' type='submit' name=''>Link</button>
                  </form>
                  <button class='p-add'>More information</button>
                </div>
              </div>");
      }
    }
  }
?>
