<?php
//skapa anslutning till databas.
function dBConnect() {

  //database info.
  $servername = "dbtrain.im.uu.se";
  $dBusername = "dbtrain_1066";
  $dBpassword = "qfieji";
  $dBname = "dbtrain_1066";

  $conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname)
          or die("Connection failed: ".mysqli_connect_error());
  return $conn;
}

//Gör en query i databasen
function dBQuery($query){
  $conn = dBConnect();
  return $conn->query($query);
}
?>
