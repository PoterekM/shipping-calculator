<?php
  $name = $_GET["name"];
  $weight = $_GET["package_weight"];
  $distance = $_GET["package_distance"];
  $weight_div = $weight / 20;
  $distance_div = $distance_div / 20;
  $solution = $weight_div + $distance_div;

 ?>



<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Shipping calculator</title>
  </head>
  <body>
    <h1>Your delivery total!</h1>
    <div class="container">

      <p>Hey there, <?php echo $name; ?>. Your pacakge is: <?php echo $weight; ?></p>
      <p>The distance it has to travel is: <?php echo $distance; ?> </p>
      <p>Your total is: $ <?php echo $solution; ?></p>




    </div>
  </body>
</html>
