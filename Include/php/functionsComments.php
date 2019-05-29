
<?php


  //Comments Functions:
    function setComments ($conn) {
      if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $messagesql = $conn->real_escape_string($message);
        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$messagesql')";
        $result = $conn->query($sql);
      }
    }

    function getComments($conn) {
      $sql = "SELECT * FROM comments";
      $result = $conn->query($sql);
      while ($row = $result-> fetch_assoc()) {
        $id = $row['uid'];
        $sql2 = "SELECT * FROM User WHERE email='$id'";
        $result2 = $conn->query($sql2);
          if ($row2 = $result2-> fetch_assoc()) {
            echo "<div class='commentbox'><p>";
            echo "<span class='commentclass'>".$row ['uid']."<br>"."</span>";
            echo "<span class='commentclass2'>".$row ['date']."<br><br>"."</span>";
            echo nl2br($row ['message']);
            echo "</p>";
              if (isset($_SESSION['email'])) {
                // ($_SESSION['usertype'] == "Admin")
                if (($_SESSION['email'] == $row2 ['email']) || ($_SESSION['email'] == "admin@admin.com") ) {

                  echo "<form class='delete-form' method= 'POST' action='".deleteComments($conn)."'>
                    <input type='hidden' name='cid' value='".$row ['cid']."'>
                    <button type='submit' name='commentDelete'> Delete </button>
                  </form>

                  <form class='edit-form' method= 'POST' action='editcomments.php'>
                    <input type='hidden' name='cid' value='".$row ['cid']."'>
                    <input type='hidden' name='uid' value='".$row ['uid']."'>
                    <input type='hidden' name='date' value='".$row ['date']."'>
                    <input type='hidden' name='message' value='".$row ['message']."'>
                    <button> Edit </button>
                  </form>";
          } else {
              // echo "<form class='reply-form' method= 'POST' action='".deleteComments($conn)."'>
              //   <input type='hidden' name='cid' value='".$row ['cid']."'>
              //   <button type='submit' name='commentReply'> Reply </button>
              // </form>";
          }
        } else {
          echo "<p class='commentmsg'> Login to reply! </p>";
        }
        echo  "</div>";
        }
      }
    }

    function editComments ($conn) {
      if (isset($_POST['commentSubmit'])) {
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $messagesql = $conn->real_escape_string($message);
        $sql = "UPDATE comments SET message='$messagesql' WHERE cid ='$cid'";
        $result = $conn->query($sql);
        header("Location: index.php");

      }
    }

    function deleteComments($conn) {
      if (isset($_POST['commentDelete'])) {
        $cid = $_POST['cid'];

        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: index.php");
      }
    }
  ?>
