<?php
 include 'connect.php';
 if(isset($_POST['submit'])){
  $User_name = $_POST['User_name'];
  $Password= $_POST['Password'];

  $sql="INSERT INTO user_table(User_name,Password)
   VALUES('$User_name','$Password')";
   $result=mysqli_query($con,$sql);
   if($result){
    //    echo 'data inserted successfully';
    header('location:auth.php');
   }else{
       die(mysqli_error($con));
 }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD OPERATION</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>User_name</label>
    <input type="text" class="form-control"
    placeholder="Enter your User_name" name="name" autocomplete="off">
   </div>
   <div class="mb-3">
    <label>Password</label>
    <input type="number" class="form-control"
    placeholder="Enter your Password" name="Password" autocomplete="off">
   </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </body>
</html>