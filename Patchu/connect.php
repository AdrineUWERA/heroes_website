<?php
    $con = new mysqli('localhost', 'root', '','crude_operation');
    if($con){
        echo "connection successfully";
    }
    else{
        die(mysqli_error($con)); 
    }
?>