<?php
    // Will check Database avalability.

    require_once('database.php');
    $FillTable = "SELECT * FROM fruits";   
    $Fulltable = $db->query($FillTable);
    /*$id1 = $_POST['IDRange1'];
    $id2 = $_POST['IDRange2'];*/

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

    <h2>Hotspot Fruit2</h2>
    <main>
      <?php
        echo "<table class='center'>";
            echo "<tr>";
                echo "<th>Fruit</th>";
                echo "<th>Description</th>";
                echo "<th>Price</th>";                    
            echo "</tr>";
        while($row = $Fulltable->fetch()){
            echo "<tr>";
                echo "<td>" . $row['FruitName'] . "</td>";
                echo "<td>" . $row['FruitDesc'] . "</td>";
                echo "<td>" . $row['FruitPrice'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
      ?>
    </main>                                                                                                          
</body>
</html>
