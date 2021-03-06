<?php
function DatabaseLoad(){
    require_once('database.php');
}

//Pulls full fruit table
function FruitPuller($db){
    $FillTable = "SELECT * FROM fruits";   
    $Fulltable = $db->query($FillTable);

    return $Fulltable;
}

//prints user view of fruit table
function UserLookup($Fulltable){
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
}


//prints admin view of fruit table
function Adminlookup($Fulltable){
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
}

?>