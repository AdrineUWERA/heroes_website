<?php
    include 'connect.php';
    if(isset($_GET['delete_name'])){
        $name=$_GET['delete_name'];

        $sql="DELETE FROM heroes where name= $name";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Deleted successfully";
            header("Location:display.php");
        }else{
            die(mysqli_error($con));
        }
    }
?>