<?php 
// variables
$name  = 'Sukhdeep';

// updating variables
$name  = 'Harry';
$price = 2;

// updating arrays
$nutrition = [
  'fat'  => 16,
  'sugar' => 51,
  'salt' => 6.3,
];
?>

<!-- // indexed arrays -->
<?php 
$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'licorice',
    'Bubble gum', 'Toffee', 'Jelly beans',];
?>



<!DOCTYPE html>
<html>
  <head>
    <title>updating variables </title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>The cost of your candy is 
       $<?php echo $price; ?> per pack.</p>

<!-- updating array -->
       <h2> $Nutrition (per 100g) </h2>
       <p>Fat:   <?php  echo $nutrition['fat']; ?>%</p>
       <p>Sugar:   <?php  echo $nutrition['sugar']; ?>%</p>
       <p>Salt:   <?php  echo $nutrition['salt']; ?>%</p>

 <!-- indexed arrays --> 
 <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <ul>
      <li><?php echo $best_sellers[0]; ?></li>
      <li><?php echo $best_sellers[1]; ?></li>
      <li><?php echo $best_sellers[2]; ?></li>
      <li><?php echo $best_sellers[4]; ?></li>
      <li><?php echo $best_sellers[5]; ?></li>
    </ul>



  </body>
</html>