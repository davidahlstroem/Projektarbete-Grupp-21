<?php
  require 'database.php';
  require 'authorization.php';

  //Ett försök att ordna sessions (görs nedan)
  //session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //fixar variabler med values
		$email = $_POST['email'];
		$password = $_POST['pwd'];
    //db connection
    $conn = dBConnect();
    //sql injection
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    //Validering + errorhandling
    if(empty($email) || empty($password)) { //kollar om empty
			header("Location: ../../login.php?error=emptyfields&email=".$email);
			exit();
		} else if (!isEmail($email)) {
			header("Location: ../../login.php?error=invalidmail");
			exit();
		} else if (!isPassword($password)){ //pass längd 6
			header("Location: ../../login.php?error=invalidpassword&email=".$email);
			exit();
		} else {
        //Query på angivet email
        $sql = "SELECT * FROM User WHERE (email='$email')";
        $result = dBQuery($sql);
        //Tar fram värden från query (om rad existerar annars error)
        if($row = $result->fetch_assoc()){
          $sqlPassword = $row['password'];
          $sqlSalt = $row['salt'];
        } else {
            header("Location: ../../login.php?error=nouser");
            exit();
        }
        //Jämför databasens pass med angivet pass+salt
        if($sqlPassword !== sha1($sqlSalt.$password)){
          header("Location: ../../login.php?error=passwordcheck&email=".$email);
    			exit();
        } else {
          //Ett försök att ordna sessions
          session_start();
          $_SESSION['email']=$email;
          header("Location: ../../index.php?login=success");
        }
    }
  }
?>
