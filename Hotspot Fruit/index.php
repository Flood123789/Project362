<?php
    // Will check Database avalability.
    require_once 'Functions.php';
    require_once 'database.php';
    $Fulltable = FruitPuller($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotspot Fruit</title>

    <link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="popular.php">Popular picks</a>
        <a href="Cart.php">Cart</a>
        <a href="about.php">About</a>
    </div>

    <h2>Hotspot Fruit</h2>
    <main>
      <?php
      //table printed
        UserLookup($Fulltable);
      ?>
    </main>                                                                                                          
</body>
</html>
