<?php
    $sname = 'localhost';
    $uname = 'root';
    $password = '';
    $dbname = 'heroes_website_database';

    $conn = mysqli_connect($sname, $uname, $password, $dbname);

    if(!$conn){
        echo 'Connection failed';
    }
?>