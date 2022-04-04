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
        <span>Test Text</span>
        <table>
        <tr>
          <td>Assessment</td>
          <td>Number of Assessment</td>
          <td>Max Points per Assessment</td>
        </tr>

        <tr>
          <td>Lab Assignment</td>
          <td><input type="number" id="LabAssignment"></td>
          <td>25</td>
        </tr>

        <tr>
            <td>Quiz</td>
            <td><input type="number" id="Quiz"></td>
            <td>10</td>
          </tr>

          <tr>
            <td>Exam</td>
            <td><input type="number" id=Exam></td>
            <td>100</td>
          </tr>

          <tr>
            <td>Project</td>
            <td><input type="number" id= Proj></td>
            <td>100</td>
          </tr>

          <tr>
            <td>Extra Credit</td>
            <td><input type="number" id= ExtraCred></td>
            <td>25</td>
          </tr>

          <tr>
            <td>Participation</td>
            <td><input type="number" id=Part></td>
            <td>5</td>
          </tr>
      </table>

    </main>                                                                                                          
</body>
</html>