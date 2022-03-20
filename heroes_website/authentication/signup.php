<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Signup</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<?php require_once('operations.php') ?>
				<div class="alert alert-danger mb-3">
					<?php echo$errror?>
				</div>
				<form class="row" method="POST"> 
					<div class="col-lg-12">
						<label>Full Names</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="col-lg-12">
						<label>User Name</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="col-lg-12">
						<label>Email</label>
						<input type="text" class="form-control" name="email">
					</div>
					<div class="col-lg-12">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="col-lg-12">
						<label>Confirm Password</label>
						<input type="password" class="form-control" name="c_password" >
					</div>
					<div class="col-lg-12">
						 <button type="submit" name="Signup" class="btn btn-primary">Signup</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>