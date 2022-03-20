<?php
 include 'connect.php';
 $name=$_GET['update_name'];
 $sql = "SELECT * FROM heroes where name = '$name'";
 $result = mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 $name=$row['name'];
 $real_name=$row['real_name'];
 $short_bio=$row['short_bio'];
 $long_bio=$row['long_bio'];
 if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $real_name = $_POST['real_name'];
  $short_bio = $_POST['short_bio'];
  $long_bio = $_POST['long_bio'];
 
  $sql="UPDATE heroes SET name='$name', real_name='$real_name', short_bio='$short_bio', long_bio='$long_bio' where name='$name'";
      $result=mysqli_query($con,$sql);
   if($result){
    //    echo 'data inserted successfully';
    header('location:display.php');
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
    <label>name</label>
    <input type="text" class="form-control"
    placeholder="Enter your name" name="name" autocomplete="off"  value=<?php echo $name;?>>
   </div>
   <div class="form-group">
    <label>real_name</label>
    <input type="text" class="form-control"
    placeholder="Enter your real_name" name="real_name" autocomplete="off" value=<?php echo $real_name;?>>
   </div>
   <div class="form-group">
    <label>short_bio</label>
    <input type="text" class="form-control"
    placeholder="Enter your short-bio" name="short_bio">  autocomplete="off" value=<?php echo $short_bio;?>>
   </div>
   <div class="form-group">
    <label>long_bio</label>
    <input type="text" class="form-control"
    placeholder="Enter your long_bio" name="long_bio">  autocomplete="off" value=<?php echo $long_bio;?>>
   </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
  </body>
</html>