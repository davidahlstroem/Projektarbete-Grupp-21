<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta charset="utf-8">
    <title>loginPage</title>
  </head>
    <body>
    <div class="comments">
        <?php
        include "Include/html/header.php";
        require "Include/php/connection.php";
        $query ="SELECT commentText, nickname FROM Comment";
        $result = $conn->query($query);

        if (isset($_SESSION['email'])==true)
        {
            include "Include/html/commentForm.php";
        }
        
        
        
        if(($result->num_rows)==0)
        {
            echo("<br>No comments exists yet");
        }
        else
        {
            while ($row = $result->fetch_assoc())
	        {
                echo "<div class='entry'>";
		        echo "User: " . $row["nickname"] . "<br> " . "Comment: " . $row["commentText"] . "<br>";
                echo "<br>";
                echo "</div>";
                echo "<br>";
                echo "<br>";
	        }
        }

        ?>
    </div>
    <?php include "include/html/footer.php" ?>
    </body>
</html>
