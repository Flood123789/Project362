<?php
    // Will check Database avalability.

    require_once('database.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Admin Editor</title>
    
</head>
<body>
    <main>
      <?php
        echo "<table class='center'>";
            echo "<tr>";
                echo "<th>Fruit</th>";
                echo "<th>Description</th>";
                echo "<th>Price</th>";
                echo "<th>ID</th>";                    
            echo "</tr>";
        while($row = $Fulltable->fetch()){
            echo "<tr>";
                echo "<td>" . $row['FruitName'] . "</td>";
                echo "<td>" . $row['FruitDesc'] . "</td>";
                echo "<td>" . $row['FruitPrice'] . "</td>";
                echo "<td>" . $row['FruitID'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
      ?>
    </main>
    
    <form action="" method="post">
        <br>
        <br>
        <label>Fruit ID: </label><input type="number" name="fruitID">
        <br>
        <label>Fruit Name: </label><input type="text" name="fruitname">
        <br> 
        <label>Fruit Description: </label><input type="text" name="fruitDesc">
        <br>
        <label>Fruit Price: </label><input type="text" name="fruitPrice">
        <br>
        <br>
        <input type='submit' name='submit' value="add to database">
    </form>
      
</body>
</html>