<?php
    // Will check Database avalability.

    require_once('database.php');
    /*$FillTable = "SELECT * FROM students";   
    $Fulltable = $db->query($FillTable);
    $id1 = $_POST['IDRange1'];
    $id2 = $_POST['IDRange2'];*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    

    <form>
        <label>Staff Login</label>
        <br>
        <label>User Name:  </label> <input type='text' name='User'>
        <label>Password:  </label> <input type='password' name='password'>
        <button type='submit' name='submit'>

    </form>
</body>
</html>