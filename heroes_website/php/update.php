<?php
    if (isset($_GET['id'])) {
        include 'db_connect.php';
        function validate($data) {
            $data= trim($data);
            $data = stripslashes($data);
            $data =htmlspecialchars($data);
            return $data;
        }

        $id = validate($_GET['id']); 

        $sql = "SELECT * FROM heroes_table WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);

        } else {
            header("Location: list_heroes.php");
        }

    } else if (isset($_POST['update'])){
        include "../db_connect.php";
        function validate($data) {
            $data= trim($data);
            $data = stripslashes($data);
            $data =htmlspecialchars($data);
            return $data;
        }

        $id = validate($_POST['id']);
        $name = validate($_POST['name']);
        $real_name = validate($_POST['real_name']);
        $short_bio = validate($_POST['short_bio']);
        $long_bio = validate($_POST['long_bio']);
        $last_seen = validate($_POST['last_seen']);

        if (empty($name)){
            header("Location: ../update.php?id=$id&error=Name is required");
        } else if (empty($real_name)) {
            header("Location: ../update.php?id=$id&error=Real Name is required");
        } else if (empty($short_bio)) {
            header("Location: ../update.php?id=$id&error=Short bio is required");
        } else if (empty($long_bio)) {
            header("Location: ../update.php?id=$id&error=Long bio is required");
        }else if (empty($last_seen)) {
            header("Location: ../add_hero.php?id=$id&error=Last seen is required");
        }else{
            $sql = "UPDATE heroes_table SET name='$name', real_name='$real_name', last_seen='$last_seen', short_bio='$short_bio', long_bio='$long_bio' WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            if ($result){
                header("Location: ../list_heroes.php?success=Successfully updated");
            } else {
                header("Location: ../update.php?id=$id&error=unknown error occured");
            }
        }

    } else {
        header("Location: list_heroes.php");
    }
?>