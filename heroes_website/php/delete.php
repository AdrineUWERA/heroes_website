<?php
    if (isset($_GET['id'])) {
        include '../db_connect.php';
        function validate($data) {
            $data= trim($data);
            $data = stripslashes($data);
            $data =htmlspecialchars($data);
            return $data;
        }

        $id = validate($_GET['id']);

        $sql = "DELETE FROM heroes_table WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result){
            header("Location: ../modify.php?success=Successfully deleted");
        } else {
            header("Location: ../modify.php?error=unknown error occured&$userdata");
        }

    } else{
        header("Location: ../modify.php");
    }
?>