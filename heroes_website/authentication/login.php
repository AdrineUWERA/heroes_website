
<?php 
session_start();
if (isset($_SESSION['Logged_user'])) {
	header('Location:./index.php');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="../css/login.css" rel="stylesheet">
		<title>Heroes Website Login</title>
		<script src="https://kit.fontawesome.com/3c5d2d689a.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="navbar-container">
			<nav class="navbar navbar-expand-lg mt-5">
				<div class="logo-container">
					<a class="navbar-brand" href="#"><img src="../images/logo.png" class="img-thumbnail bg-none border-0 bg-0" alt="logo"/></a>
				</div>
				<div class="nav-link">
					<a href="../index.php"><button class="btn">View List</button></a>
				</div>	
			</nav>
		</div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-6 mt-1 mb-5"> 
					<div class="card mt-5 shadow-lg rounded">
						<div class="card-body p-5">
							<h2 class="text-center mb-2">Login into your account</h2>
							<?php require_once('operations.php') ?> 
							<?php if($errror):?>
							<div class="alert alert-danger mb-3">
								<?php echo$errror?>
							</div>
							<?php endif?>
							<form class="row" method="POST">  
								<div class="col-lg-12"> 
								<div class="col-lg-12 mt-3">
									<label><strong>User Name</strong></label>
									<input type="text" class="form-control m-2 me-0 ms-0" name="username">
								</div> 
								<div class="col-lg-12 mt-3">
									<label><strong>Password</strong></label>
									<input type="password" class="form-control m-2 me-0 ms-0" name="password">
								</div> 
								<div class="col-lg-12 card-bottom text-center">
									<div class="row">
										<div class="col-lg-12 mt-3">
											<button type="submit" name="Login" class="btn btn-sm p-2">Sign in </button>
										</div>
										<div class="col-lg-12 mt-3">
											<strong>Don’t have an account yet?</strong>	
										</div>
										<div class="col-lg-12 mt-3"> 
											<a href="signup.php" class="btn btn-block btn-sm p-2">Sign up  </a> 
										</div>
									</div>
									
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	</body>

	<footer class="footer">
        <div class="footer-content">
            <div class="footer-icons">
                <a href="https://www.instagram.com " target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
            </div>
            <p>&copy;2022 Heroes Evolved. All rights reserved</p>
        </div>
    </footer>
</html>