<?php

session_start();
require "/database.php";
require "../html/commentForm.php";

$conn = dBConnect();
$comment = $_POST['cmt'];
$username = $_SESSION['email'];
$userID = $_SESSION['userID'];

$insert = "INSERT INTO Comment (commentText, userID)
            VALUES ('$comment','$userID')";



if ($username != "" && $comment != "")
{
    if ($conn->query($insert)===TRUE)
    {
        echo "<script>location.href='../../comments.php'</script>";
    }
    else
    {
        echo " Something went wrong";
    }
}

?>
