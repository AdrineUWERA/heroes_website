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
          <button class="btn btn-primary my-5"><a href="authTable.php" class="text-light">Add user</a>
          </button>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">User_name</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql= "SELECT * FROM user_table";
      $result=mysqli_query($con,$sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
              $User_name=$row['User_name'];
              $Password=$row['Password'];
              echo '<tr>
              <th scope="row">'.$User_name.'</th>
              <td>'.$User_name.'</td>
              <td>'.$Password.'</td>
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