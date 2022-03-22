<?php 
session_start();
if (!isset($_SESSION['Logged_user'])) {
	header('Location:login.php');
}	
?>

<form method="post">
	<?php require_once('operations.php') ?>
	<button type="submit" name="logout" class="btn btn-danger">Logout</button>
</form>