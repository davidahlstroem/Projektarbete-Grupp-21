<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/test.css">
    <meta charset="utf-8">
    <title>productPage</title>
  </head>
    <body>
      <?php include "assets/html/header.php" ?>

        <h2>test order</h2>

        <div id="selectComponents">
          <table class="compo" align="center">
            <tr>
              <th><img class="body" src="assets\img\body\st_black_body.jpg"></th>
              <th><img class="body" src="assets\img\body\st_red_body.jpg"></th>
              <th><img class="body" src="assets\img\body\tl_burst_body.jpg"></th>
              <th><img class="body" src="assets\img\body\tl_yellow_body.jpg"></th>
            </tr>
            <tr>
              <th>Black ST</th>
              <th>Red ST</th>
              <th>Burst TL</th>
              <th>Yellow TL</th>
            </tr>
          </table>
          <br>
          <p1> Body: <p1>
            <select id="components">
              <option>Black ST</option>
              <option>Red ST</option>
              <option>Burst TL</option>
              <option>Yellow TL</option>
            </select> 
          <br> 


          <table class="compo" align="center">
            <tr>
              <th><img class="neck" src="assets\img\neck\maple_neck.jpg"></th>
              <th><img class="neck" src="assets\img\neck\rosewood_neck.jpg"></th>
            </tr>
            <tr>
              <th>Maple</th>
              <th>Rosewood</th>
            </tr>
          </table>
          <br>
          <p1> Neck: <p1>
            <select>
              <option>Maple</option>
              <option>Rosewood</option>
            </select>             
          <br> 
          <br>


          <table class="compo" align="center">
            <tr>
              <th><img class="mic" src="assets\img\pickups\humbucker.jpg"></th>
              <th><img class="mic" src="assets\img\pickups\single_coil.jpg"></th>
            </tr>
            <tr>
              <th>Humbuckers</th>
              <th>Single coils</th>
            </tr>
          </table>

          <p1> Microphones: <p1>  
            <select>
              <option>Humbuckers</option>
              <option>Single coils</option>
            </select>                                
          <br> 
          <br>

          <table class="compo" align="center">
            <tr>
              <th><img class="knobs" src="assets\img\bridge\floyd_rose_bridge.jpg"></th>
              <th><img class="knobs" src="assets\img\bridge\tune-o-matic_bridge.jpg"></th>
            </tr>
            <tr>
              <th>Floyd rose</th>
              <th>Tune-o-matic</th>
            </tr>
          </table>
          <br>

          <p1> Bridge: <p1>
            <select>
              <option>Tune-o-matic</option>
              <option>Floyd rose</option>
            </select>                 
          <br> 
          <br>

          <table class="compo" align="center">
            <tr>
              <th><img class="knobs" src="assets\img\knobs\pot_knobs.jpg"></th>
              <th><img class="knobs" src="assets\img\knobs\metal_knobs.jpg"></th>
            </tr>
            <tr>
              <th>Humbuckers</th>
              <th>Single coils</th>
            </tr>
          </table>

          <p1> Knobs: <p1>
            <select>
              <option>Metal</option>
              <option>Pot</option>
            </select>                
        <div>

        <br>
      <?php include "assets/html/footer.php" ?>
    </body>
</html>
