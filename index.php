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

<!-- // updating arrays nutrition values   -->
<?php 
$nutrition = [
    'fat'   => 38, 
    'sugar' => 51, 
    'salt'  => 0.25,
];
$nutrition['fat']   = 36;
$nutrition['fiber'] = 2.1;
$nutrition['protein'] = 7.3;
?>


<!-- // Multidimensional arrays  -->
<?php 
$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
    ['name' => 'Mints',  'price' => 3, 'stock' => 66,],
    ['name' => 'Fudge',  'price' => 4, 'stock' => 97,],
    ['name' => 'chocholate',  'price' => 2, 'stock' => 83,],
  ];
  ?>


<!-- // echo-shorthand -->
<?php 
$name      = 'sukhdeep';
$favorites = ['Chocolate', 'Toffee', 'Fudge',];
?>

<!-- // arithmetic-operatiors -->
<?php 
$items    = 20;
$cost     = 10;
$subtotal = $cost * $items;
$tax      = ($subtotal / 100) * 20;
$total    = $subtotal + $tax;
?>


<!-- // string-operator-->
<?php 
$prefix  = 'Thank you';
$name    = 'sukhdeep';
$message = "$prefix  $name";
?>

<!-- // comparison-operators-->
<?php 
$item    = 'Chocolate';
$stock   = 8;
$wanted  = 5;
$can_buy = ($wanted <= $stock);
?>

<!-- // logical-operators-->
<?php 
$item    = 'Chocolate';
$stock   = 3;
$wanted  = 5;
$deliver = true;
$can_buy = (($wanted <= $stock) && ($deliver == true));
?>

<!-- // Example-->
<?php
$username = 'Sukhdeep';                                   // Variable to hold username

$greeting = 'Hi, ' . $username . '.';             // Greeting is 'Hello' + username

$offer = [                                           // Create array to hold offer
    'item'     => 'Chocolate',                       // Item on offer
    'qty'      => 3,                                 // Quantity to buy
    'price'    => 6,                                 // Usual price per pack
    'discount' => 4,                                 // Offer price per pack
];

$usual_price = $offer['qty'] * $offer['price'];      // Usual total price
$offer_price = $offer['qty'] * $offer['discount'];   // Offer total price
$saving      = $usual_price - $offer_price;          // Total saving
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


<!-- updating arrays nutrition values  --> 
<h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <p>Fat:   <?php echo $nutrition['fat']; ?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt:  <?php echo $nutrition['salt']; ?>%</p>
    <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
  

<!-- // Multidimensional arrays  -->
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Offers</h2>
    <p><?php echo $offers[0]['name']; ?> -
      $<?php echo $offers[0]['price']; ?> </p>
    <p><?php echo $offers[1]['name']; ?> -
      $<?php echo $offers[1]['price']; ?> </p>
    <p><?php echo $offers[2]['name']; ?> -
      $<?php echo $offers[2]['price']; ?> </p>
      <p><?php echo $offers[3]['name']; ?> -
      $<?php echo $offers[3]['price']; ?> </p>

<!-- // echo-shorthand -->
<title>Echo Shorthand</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is:
       <?= $favorites[1] ?>.</p>

<!-- // arithmetic-operatiors -->
<title>Mathematical Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: $<?= $cost ?></p>
    <p>Subtotal: $<?= $subtotal ?></p>
    <p>Tax: $<?= $tax ?></p>
    <p>Total: $<?= $total ?></p>


    
<!-- // string-operator-->
    <title>String Operator</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2><?= $name ?>'s Order</h2>
    <p><?= $message ?></p>

    <!-- // comparison-operators-->
    <title>Comparison Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Wanted:  <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>

    <!-- // logical-operators-->
    <title>Logical Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h1>Shopping Cart</h1>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Wanted: <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>

<!-- // Example-->
<title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>

    <h2>Multi-buy Offer</h2>

    <p><?= $greeting ?></p>

    <p class="sticker">Save $<?= $saving ?></p>

    <p>Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?> 
      for $<?= $offer_price ?><br> (usual price $<?= $usual_price ?>)</p> 

  </body>
</html>

