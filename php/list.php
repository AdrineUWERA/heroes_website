<?php
    include 'db_connect.php';
    $sql = "SELECT * FROM heroes_table ORDER BY id DESC";
    $result = mysqli_query($conn, $sql)
?>