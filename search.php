<?php
  require "Include/php/connection.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/index_page.css">
    <meta charset="utf-8">
    <title>StartPage</title>

  </head>
  <body>
    <?php include "include/html/header.php" ?>

//search function
    <?php
      if(isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM Product WHERE name LIKE '%$searchquery%' OR description LIKE '%$searchquery%'"
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult) < 0 {
          while ($row = mysqli_fetch_assoc) {
            echo "<a href = 'products.php?title=".$row['ArtNo']."'><div class='p-float'>
              <div class='p-float-in'>
                <img class='p-img' src='assets/img/product/".$row['artNo'].".jpeg'/>
                <div class='p-name'>".$row['name']."</div>
                <div class='p-price'>".$row['price']." kr</div>
                <form class='' action='products.php?artNo=".$row['artNo']."' method='post'>
                  <button class='p-add' type='submit' name=''>Link</button>
                </form>
                <button class='p-add'>More information</button>
            </div>
          </div>";
          }
        } else {
          echo "No results matching your search!"
        }
      }
     ?>


    <div id="p-float">
      <?php displayProducts(); ?>
    </div>
    <form class="" action="products.php" method="get">
      <button type="submit" name="button" value="hej">Link</button>
    </form>

    <?php include "include/html/footer.php" ?>
  </body>


  <?php
  // $output = '';
  // $min_length = 3;
  //
  // if(isset($_POST['search'])) {
  //   $searchquery = $_POST['search'];
  //   $query = $conn->query("SELECT * FROM Product WHERE name LIKE '%$searchquery%' OR description LIKE '%$searchquery%' LIMIT 10") or die ("could not search!");
  //   $count = mysqli_num_rows($query);
  //   if ($count == 0) {
  //     $output = '<div> No search results! </div>';
  //     echo $output;
  //   } else {
  //     while ($row = mysqli_fetch_array($query)) {
  //       $name = $row['name'];
  //       $artNo = $row['artNo'];
  //       $price = $row['price'];
  //       $description = $row['description'];
  //
  //       $output .= '<div> '.$name.' '.$artNo.' '.$price.' '.$description.' </div>';
  //       echo $output;
  //
  //     }
  //   }
  // }
  


    // $query = $_POST['query'];
    // // gets value sent over search form
    //
    // $min_length = 3;
    // // you can set minimum length of the query if you want
    //
    // if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
    //
    //     $query = htmlspecialchars($query);
    //     // changes characters used in html to their equivalents, for example: < to &gt;
    //
    //     $query = mysql_real_escape_string($query);
    //     // makes sure nobody uses SQL injection
    //
    //     $raw_results = mysql_query("SELECT * FROM articles
    //         WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());
    //
    //     // * means that it selects all fields, you can also write: `id`, `title`, `text`
    //     // articles is the name of our table
    //
    //     // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
    //     // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
    //     // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
    //
    //     if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
    //
    //         while($results = mysql_fetch_array($raw_results)){
    //         // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
    //
    //             echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
    //             // posts results gotten from database(title and text) you can also show id ($results['id'])
    //         }
    //
    //     }
    //     else{ // if there is no matching rows do following
    //         echo "No results";
    //     }
    //
    // }
    // else{ // if query length is less than minimum
    //     echo "Minimum length is ".$min_length;
    // }
?>
