<!-- <?php
 include 'connect.php';
 if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $real_name = $_POST['real_name'];
  $short_bio = $_POST['short_bio'];
  $long_bio = $_POST['long_bio'];
 
  $sql="insert into 'Heroes' (name,email,mobile,password)
   values('$name',$real_name,$short_bio,$long_bio)";
   $result=mysqli_query($con,$sql);
   if($result){
       echo 'data inserted successfully';
   }else{
       die(mysqli_error($con));
 }
}
?> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >

    <title>CRUD OPERATION</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control"
    placeholder="Enter your name" name="name" autocomplete="off">
   </div>
   <div class="mb-3">
    <label>real_name</label>
    <input type="text" class="form-control"
    placeholder="Enter your real_name" name="real_name" autocomplete="off">
   </div>
   <div class="mb-3">
    <label>short_bio</label>
    <input type="text" class="form-control"
    placeholder="Enter your short-bio" name="short_bio">
   </div>
   <div class="mb-3">
    <label>long_bio</label>
    <input type="text" class="form-control"
    placeholder="Enter your long_bio" name="long_bio">
   </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </body>
  </html>