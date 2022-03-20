<?php
include  'connect.php'  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
          <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Heroes</a>
          </button>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">real_name</th>
      <th scope="col">short_bio</th>
      <th scope="col">long_bio</th>
      <th scope="col">operation</th>
 
 
    </tr>
  </thead>
  <tbody>
      <?php
      $sql= "select * from heroes";
      $result=mysqli_query($con,$sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
              $name=$row['name'];
              $real_name=$row['real_name'];
              $short_bio=$row['short_bio'];
              $long_bio=$row['long_bio'];
              echo '<tr>
              <th scope="row">'.$name.'</th>
              <td>'.$name.'</td>
              <td>'.$real_name.'</td>
              <td>'.$short_bio.'</td>
              <td>'.$long_bio.'</td>
              <td>
              <button class="btn btn-primary"><a href ="update.php? update_name='.$name.'"class="text-light">Update</a></button>
              <button class="btn btn-danger"><a href="delete.php? delete_name='.$name.'"class="text-light">Delete</a></button> 
           </td>

            </tr>';
          }
      }
?>
   <!-- <td>
       <button><a href="">Update</a></button>
       <button><a href="">Delete</a></button> 
    </td> -->
  </tbody>
</table>
  </body>
  </html> 