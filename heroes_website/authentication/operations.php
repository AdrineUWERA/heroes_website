<?php 
 
	$errror="";
	$conn=mysqli_connect("localhost","root","","heroes_website_database");
	if ($conn) {
		//signup
		if (isset($_POST['Signup'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$c_password = $_POST['c_password'];

			if (!empty($name)) {
				if (!empty($username)) {
					if (!empty($email)) {
						if (!empty($password)) {
								if (strlen($password) >= 4) { 
									if (!empty($c_password)) { 
										if ($password == $c_password) { 
										$password=hash('sha1',$c_password);

										$sqlSelect=mysqli_query($conn, "SELECT * from users_table where username='$username' or email='$email'");
											if ($sqlSelect) {
												// echo(mysqli_num_rows($sqlSelect));
												if (mysqli_num_rows($sqlSelect) <= 0) { 
													$create=mysqli_query($conn, "
											INSERT INTO users_table (id,name,username,email,password,role) VALUES ('','$name','$username','$email','$password','user')");
													if ($create) {
														header("Location:login.php");
													}else{
													$errror="error creating user";
													}

												}else{
													$errror="User already exists";
												}
											}else{
												$errror="error creating user";
												}
										}
										else{
											$errror="Two password are not equal";
										}
								}else{
									$errror="Passwords confirmation must match";
								}
							}else{
								$errror="Password must be at least 4 characters";
							}  
						}else{
							$errror="Password field must not be empty";
						}
					}else{
						$errror="Email field must not be empty";
					}
				}else{
					$errror="Username field must not be empty";
				} 	 
			}else{
				$errror="Name field must not be empty";
			}
		}


		//login
		else if (isset($_POST['Login'])) { 
			$username = $_POST['username'];
			$password = $_POST['password']; 
			if (!empty($username)) { 
					if (!empty($password)) {  
						$password=hash('sha1',$password);
						$sqlSelect=mysqli_query($conn, "SELECT * from users_table where username='$username'");
							if ($sqlSelect) {
								if (mysqli_num_rows($sqlSelect) > 0) {  
									if($mysqli_fect_user=mysqli_fetch_array($sqlSelect)){
										if ($mysqli_fect_user['password'] == $password) {
											$_SESSION['Logged_user']=$mysqli_fect_user;
											if ($mysqli_fect_user['role']== "admin"){
												header("Location:../list_hereos.php");
											} else {
												header("Location:../read.php");
											}
										}else{
											$errror="User password doesn't match";
										}
									}
								}else{
									$errror="User doesn't exists";
								}
							}else{
								$errror="error searching for user";
								} 
					}else{
						$errror="Password field must not be empty";
					} 
			}else{
				$errror="Username field must not be empty";
			}  
		}


		//logout
		if (isset($_POST["logout"])) {
			session_destroy();
			header("Location:authentication/login.php");
		}

	}else{
		$error="error".$conn->error();
	}
?>