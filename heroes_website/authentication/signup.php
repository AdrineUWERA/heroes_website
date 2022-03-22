<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>Signup</title>
		<link href="../css/signup.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/3c5d2d689a.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="navbar-container">
			<nav class="navbar navbar-expand-lg mt-4 mb-2">
				<div class="logo-container">
					<a class="navbar-brand" href="#"><img src="../images/logo.png" class="img-thumbnail bg-none border-0 bg-0" alt="logo"/></a>
				</div>
				<div class="nav-link">
					<a href="../index.php"><button class="btn">View List</button></a>
				</div>	
			</nav>
		</div>

		<div class="container">
			<div class="row ">
				<div class="col-lg-7 mt-4 mb-4">
					<div class="card p-4 pb-0 shadow-lg  ml-3">
						<div class="card-body">
							<h2 class="text-center">Sign Up</h2> 
								<?php require_once('operations.php') ?>
							<?php if($errror):?>
								<div class="alert alert-danger mb-3">
									<?php echo$errror?>
								</div>
							<?php endif;?>
							<form class="row" method="POST"> 
								<div class="col-lg-12 ">
									<label><strong>Full Names</strong></label>
									<input type="text" class="form-control" name="name">
								</div>
								<div class="col-lg-12 mt-3">
									<label><strong>User Name</strong></label>
									<input type="text" class="form-control" name="username">
								</div>
								<div class="col-lg-12 mt-3">
									<label><strong>Email</strong></label>
									<input type="text" class="form-control" name="email">
								</div>
								<div class="col-lg-12 mt-3">
									<label><strong>Password</strong></label>
									<input type="password" class="form-control" name="password">
								</div>
								<div class="col-lg-12 mt-3">
									<label class=""><strong>Confirm Password</strong></label>
									<input type="password" class="form-control" name="c_password" >
								</div>
								<div class="col-lg-12 mt-3">
									<div class="row card-bottom">
										<div class="col-lg-12 mt-3">
											<button type="submit" name="Signup" class="btn btn-sm p-2 pe-0 ps-0">Sign up</button>
										</div>
										<div class="col-lg-12 mt-3">
											<strong>Already have an account?</strong>	
										</div>
										<div class="col-lg-12 mt-3 mb-3">
											<a href="login.php" class="btn btn-block btn-sm p-2 pe-0 ps-0">Sign in </a>
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