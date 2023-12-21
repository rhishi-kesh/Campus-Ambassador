<?php

	ob_start();
	$conn = mysqli_connect('localhost','root','','campusambassador');
	session_start();
	if(isset($_POST['submit'])){
		if(empty($_POST['email']) && empty($_POST['password'])){
			$empty = "Email & Password feild cannot be empty";
		}else{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			
			$sql = "SELECT * FROM `admin` WHERE email = '$email' and password = '$password'";
			$query = mysqli_query($conn, $sql);
			$result = mysqli_fetch_assoc($query);
			$if_match = mysqli_num_rows($query);
			if($if_match){
				$_SESSION['userName'] = $result['name'];
        		header("Location: index.php");
			}else{
				$not_match = "Email & Password Not Match";
			}
		}
	}

	if(isset($_SESSION['userName'])){
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-4 mt-5 pt-5">
					<div class="card">
						<div class="card-body">
							<form action="" method="POST">
								<?php
									if(!empty($empty)){
										?>
											<b class="text-danger text-center d-block"><?= $empty ?></b>
										<?php
									}
								?>
								<?php
									if(!empty($not_match)){
										?>
											<b class="text-danger text-center d-block"><?= $not_match ?></b>
										<?php
									}
								?>
								<h2 class="fs-3 text-uppercase text-center mb-4">Admin Login</h2>
							  <div class="mb-3">
							    <label for="exampleInputEmail1" class="form-label">Email address</label>
							    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Password</label>
							    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
							  </div>
							  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>