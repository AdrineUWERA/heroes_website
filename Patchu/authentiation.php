<?php
if($_POST){
    $host="localhost";
    $user="root";
    $pass="";
    $db="crude_operation";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn=mysqli_connect($host,$user,$pass,$db);
    $query="SELECT * from heroes where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
       session_start();
       $_SESSION['crude_operation']='true';
       header('location:auth.php');

    }
    else{
        echo 'wrong username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Authentication </title>
</head>
<body>
<h1>Login</h1>
<form method="POST">
username:<br>
<input type='text' name='username'><br>
password:<br><input type='password' name='password'><br>
<input type='submit' value='Login'>
</form>
</body>
</html>