<?php
  require "database.php";
  require "authorization.php";
  //Ser till att man tagit sig hit från formulär/postrequest
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Variabler som lagrar värden från formulär
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordConfirm = $_POST['confirmPwd'];
    $inputArray = array($firstName,$lastName,$email,$password,$passwordConfirm);
    //conn till databas
    $conn = dBConnect();
    //hanterar SQL injection
    $firstName = $conn->real_escape_string($firstName);
    $lastName = $conn->real_escape_string($lastName);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);
    $passwordConfirm = $conn->real_escape_string($passwordConfirm);

    //Lägg in query?
    $sqlEmail = "SELECT email FROM User WHERE email='$email'";
    $resultEmail = dBQuery($sqlEmail);

    //Validering av inputs
    if (isEmpty($inputArray)){
      //OBS Korrigera header för att spara fler inputs
      header("Location: ../../register.php?error=emptyfields&email=".$email);
      exit();
    } else if (!isEmail($email)) {
        header("Location: ../../register.php?error=invalidmail");
        exit();
    } else if (!isPassword($password)){
        header("Location: ../../register.php?error=passwordcheck&email=".$email);
        exit();
    } else if ($password !== $passwordConfirm){
      header("Location: ../../register.php?error=passwordcheck&email=".$email);
			exit();
    } else if (mysqli_num_rows($resultEmail) > 0) { //kolla om mail finns i databas
      header("Location: ../../register.php?error=existingmail");
      exit();
    } else {
      //Fixar lösenord innan db INSERT
      $salt = sha1(microtime().$password);
      $password = sha1($salt.$password);

      //db insert i db
      $sqlInsert = "INSERT INTO User (email, password, firstName, lastName, salt)
                    VALUES ('$email', '$password', '$firstName', '$lastName', '$salt')";
      $resultInsert = dBQuery($sqlInsert);

      header("Location: ../../login.php?reg=success");
    }
  }
?>
