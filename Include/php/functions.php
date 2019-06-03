<?php
  include "database.php";

  function displayProducts($sql){
    //$sql = "SELECT * FROM Product";
    $result = dBQuery($sql);

    //Ser till att det finns något att mata ut.
    if(mysqli_num_rows($result) > 0){
      while($row = $result->fetch_assoc()){
        echo("<div class='p-float'>
                <div class='p-float-in'>
                  <img class='p-img' src='assets/img/product/".$row['artNo'].".jpeg'/>
                  <div class='p-name'>".$row['name']."</div>
                  <div class='p-price'>".$row['price']."€ EUR</div>
                  <form class='' action='products.php?artNo=".$row['artNo']."' method='post'>
                    <button class='p-add' type='submit' name=''>Overview</button>
                  </form>
                  <form class='addToCart-form' action='include/php/processCart.php?artNo=".$row['artNo']."' method='post'>
                    <button class='p-add' name='addToCart'>Add To Cart</button>
                  </form>
                </div>
              </div>");
      }
    }
  }

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

  function displaySpecification($artNo){
    $sqlBody = "SELECT artNo, Body.name FROM Body, Product WHERE artNo='$artNo' AND Body.bodyID = Product.bodyID";
    $sqlNeck = "SELECT artNo, Neck.name FROM Neck, Product WHERE artNo='$artNo' AND Neck.neckID = Product.neckID";
    $sqlPickup = "SELECT artNo, Pickups.name FROM Pickups, Product WHERE artNo='$artNo' AND Pickups.pickupID = Product.pickupID";
    $sqlBridge = "SELECT artNo, Bridge.name FROM Bridge, Product WHERE artNo='$artNo'AND Bridge.bridgeID = Product.bridgeID";

    //$sqlAll = "SELECT * FROM Body, Neck, Pickups, Bridge, Product WHERE artNo='$artNo'
    //           AND Body.bodyID = Product.bodyID AND Neck.neckID = Product.neckID
    //           AND Pickups.pickupID = Product.pickupID AND Bridge.bridgeID = Product.bridgeID";


    $rowBody = dBQuery($sqlBody)->fetch_assoc();
    $rowNeck = dBQuery($sqlNeck)->fetch_assoc();
    $rowPickup = dBQuery($sqlPickup)->fetch_assoc();
    $rowBridge = dBQuery($sqlBridge)->fetch_assoc();

    echo("<div class='product-spec'>
            <ul>
              <li>".$rowBody['name']."</li>
              <li>".$rowNeck['name']."</li>
              <li>".$rowPickup['name']."</li>
              <li>".$rowBridge['name']."</li>
            </ul>
          </div>");
  }

  function displayLogin(){
    if (isset($_SESSION['email'])){
      echo("<a id='logout' href='include/php/processLogout.php'>Logout</a>");
    } else {
      echo("<a id='login' href='login.php'>Login</a>");
    }
  }

  function displayCartItems() {
    if(isset( $_SESSION['shoppingCart'])){
      foreach ($_SESSION['shoppingCart'] as $key => $value) {
        // code...
        $sql = "SELECT * FROM Product WHERE artNo=$value";
        $row = dBQuery($sql)->fetch_assoc();

        echo("<div class='cart-items'>
          <div class='cart-head'>
            <h3>titles</h3>
          </div>
          <div class='cart-row'>
            <div class='cart-name'>
              <p>".$row['name']."</p>
            </div>
            <div class='cart-price'>
              <p>".$row['price']."</p>
            </div>
            <div class='cart-quantity'>
              <input class='quantity-input' type='number' name='quantity' value='1'>
            </div>
            <button class='cartRemoveBtn' type='button' name='cartRemoveBtn'>Remove</button>
          </div>");
      }
    } else { echo("no items"); } //lär inte behövas senare
  }

?>
