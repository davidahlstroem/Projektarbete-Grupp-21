<?php
  //databas Info
  $servername = "dbtrain.im.uu.se";
  $dBUsername = "dbtrain_1066";
  $dBpassword = "qfieji";
  $dBname = "dbtrain_1066";

  //Skapa anslutning till databas
  $conn = mysqli_connect($servername, $dBUsername, $dBpassword, $dBname);

  //Kontrollera anslutning
  if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
  }
  //echo "Connection worked!";
?>
