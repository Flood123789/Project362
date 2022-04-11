<?php
function DatabaseLoad(){
    require_once('database.php');
}

function UserLookLoad($db){
    $FillTable = "SELECT * FROM fruits";   
    $Fulltable = $db->query($FillTable);

    return $Fulltable;
}

function Adminlookup(){
    
}

?>