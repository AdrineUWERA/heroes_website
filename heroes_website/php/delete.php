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
            header("Location: ../list_heroes.php?success=Successfully deleted");
        } else {
            header("Location: ../list_heroes.php?error=unknown error occured&$userdata");
        }

    } else{
        header("Location: ../list_heroes.php");
    }
?>