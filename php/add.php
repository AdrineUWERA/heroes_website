<?php
    if (isset($_POST['create'])){
        include "../db_connect.php";
        function validate($data) {
            $data= trim($data);
            $data = stripslashes($data);
            $data =htmlspecialchars($data);
            return $data;
        }

        $name = validate($_POST['name']);
        $real_name = validate($_POST['real_name']);
        $short_bio = validate($_POST['short_bio']);
        $long_bio = validate($_POST['long_bio']);
        $last_seen = validate($_POST['last_seen']);

        $userdata = "name".$name." & real_name=".$real_name."& last_seen=".$last_seen." & short_bio=".$short_bio."& long_bio=".$long_bio;

        if (empty($name)){
            header("Location: ../add_hero.php?error=Name is required&$userdata");
        } else if (empty($real_name)) {
            header("Location: ../add_hero.php?error=Real Name is required&$userdata");
        } else if (empty($short_bio)) {
            header("Location: ../add_hero.php?error=Short bio is required&$userdata");
        } else if (empty($long_bio)) {
            header("Location: ../add_hero.php?error=Long bio is required&$userdata");
        }else{
            $sql = "INSERT INTO heroes_table(name, real_name, last_seen, short_bio, long_bio) VALUES('$name','$real_name', '$last_seen', '$short_bio', '$long_bio')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                header("Location: ../list_heroes.php?success=Successfully created");
            } else {
                header("Location: ../add_hero.php?error=unknown error occured&$userdata");
            }
        }

    }
?>