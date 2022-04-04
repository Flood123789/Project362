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
    <main>
        <p> We are a small staff that is dedicated to ensuring that all people are equally able to access the freshest produce around.
            Our staff works Tirelessly to move product from shore to shore in reccord times to guarentee freshness fresh from the farm.
            Let our staff treat you to the freshest fruits our modern world can provide!
        </p>
    </main>

    <form>
        <label>Staff Login</label>
        <br>
        <label>User Name:  </label> <input type='text' name='User'>
        <label>Password:  </label> <input type='password' name='password'>
        <button type='submit' name='submit' value="Login">

    </form>
</body>
</html>