<?php
    // Will check Database avalability.
    require_once('database.php');
    require_once('Functions.php');
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
        $Fulltable = FruitPuller($db);
        Adminlookup($Fulltable);
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