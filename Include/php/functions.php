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
                  <form class='addToCart-form' action='products.php?artNo=".$row['artNo']."' method='post'>
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
                  <p>".$row['price']." € EUR</p>
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

    echo("<div id='product-spec'>
            <h3>Specifications</h3>
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

  function displayShoppingCart(){
    if (isset($_SESSION['email'])){
      echo("<a href='cart.php'>Shopping Cart");
      displayShoppingCartCount();
      echo "</a>";
    }
  }
  function displayShoppingCartCount() {
    if(isset($_SESSION['email']) && isset($_SESSION['shoppingCart']) && count($_SESSION['shoppingCart']) > 0){
      $count = count($_SESSION['shoppingCart']);
      echo ("(".$count.")");
    }
  }

  function displayCartItems() {
    if(isset($_SESSION['shoppingCart']) && count($_SESSION['shoppingCart']) > 0){
      echo "<div class='cart-items'>
              <div class='cart-head'>
                <h3>titles</h3>
              </div>";

      foreach ($_SESSION['shoppingCart'] as $key => $value) {
        // code...
        $sql = "SELECT * FROM Product WHERE artNo=$value";
        $row = dBQuery($sql)->fetch_assoc();

        echo("<div class='cart-row'>
                <div class='cart-name'>
                  <p>".$row['name']."</p>
                </div>
                <div class='cart-price'>
                  <p>".$row['price']."€ EUR</p>
                </div>
                <form class='cartRemoveForm' action='include/php/cartRemoveItem.php?artNo=".$value."' method='post'>
                  <button class='cartRemoveBtn' type='submit' name='cartRemoveBtn'>Remove</button>
                </form>
              </div>
            </div>");

/* utifall att.
<div class='cart-quantity'>
  <input class='quantity-input' type='number' name='quantity' value='1'>
</div>
 */
      }
    } else { echo("<h2>no items</h2>"); }
  }

  function displayTotalPrice(){
    if(isset($_SESSION['shoppingCart']) && count($_SESSION['shoppingCart']) > 0){
      $totalPrice = 0;
      foreach ($_SESSION['shoppingCart'] as $key => $value) {
        $sql = "SELECT price FROM Product WHERE artNo='$value'";
        $row = dBQuery($sql)->fetch_assoc();
        $totalPrice += $row['price'];
      }
      echo ("<div class='cart-total'>
              <h3>total price</h3>
              <p id='totalPrice'>".$totalPrice."€ EUR</p>
            </div>");
      displayOrderButton($totalPrice);
    }
  }

  function displayOrderButton($totalPrice){
    if(count($_SESSION['shoppingCart']) > 0){
      echo "<form class='order-form' action='order.php?totalPrice=".$totalPrice."' method='POST'>
             <button type='submit' name='orderBtn'>Order</button>
            </form>";
    }
  }

  function displayOrderInfo(){

    if(isset($_SESSION['email']) && count($_SESSION['shoppingCart']) > 0) {
      $email = $_SESSION['email'];
      $sqlUser = "SELECT * FROM User WHERE email='$email'";
      if($rowUser = dBQuery($sqlUser)->fetch_assoc()) {
        $firstName = $rowUser['firstName'];
        $lastName = $rowUser['lastName'];
      } else {
          $firstName = "";
          $lastName = "";
      }

    echo ("<div class='order-info'>
            <p>Thank you ".$firstName." ".$lastName."  for your purchase!</p>
            <p>Order info:</p>
            <div class='order-products'>");

    foreach ($_SESSION['shoppingCart'] as $key => $value) {
      $sql = "SELECT * FROM Product WHERE artNo='$value'";
      $row = dBQuery($sql)->fetch_assoc();

      echo("<div class='order-row'>
              <div class='order-name'>
                <p>".$row['name']."</p>
              </div>
              <div class='order-price'>
                <p>".$row['price']."</p>
              </div>
            </div>");
    }
    echo ("</div>
           <h3>total price</h3>
           <div class='totalPrice'>".$_GET['totalPrice']."</div>
          </div>");
    } else {
    echo("Something went wrong!");
  }
}

?>
