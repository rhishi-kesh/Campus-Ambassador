<?php

	ob_start();
	$conn = mysqli_connect('localhost','root','','campusambassador');
	session_start();
	if(isset($_SESSION['userName'])){
        $user = $_SESSION['userName'];
    }else{
        header('location: admin_login.php');
    }

    $sql = "SELECT * FROM `ambassadors`";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashbord</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php
		if(!empty($user)){
			?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Welcome! <?= $user ?></strong>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php
		}
	?>
	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Total Campus Ambassador - 102</h2>
					<div class="card">
						<div class="card-body">
								<div class="text-end">
									<a href="export.php" class="btn btn-info">Export Data</a>
									<form onsubmit="return confirm('Are your sure you want to Logout?')" method="POST" class="text-end mb-2 d-inline-block">
										<input type="submit" name="logout" class="btn btn-danger text-uppercase" value="Logout">
									</form>
								</div>
							<div class="table-responsive">
							  <table class="table text-center table-striped table-hover">
							  	<thead>
							  		<tr>
							  			<th>Sl</th>
								  		<th>Name</th>
								  		<th>Email</th>
								  		<th>Number</th>
								  		<th>Gender</th>
								  		<th>Name of university|College|School</th>
								  		<th>action</th>
							  		</tr>
							  	</thead>
							    <tbody>
							    	<?php 

							    		$count = 1;
							    		if($rows){
							    			foreach ($query as $item) {
							    	
							    	?>
								    	<tr>
								    		<td><?= $count++ ?></td>
								    		<td><?= $item['name'] ?></td>
								    		<td><?= $item['email'] ?></td>
								    		<td><?= $item['number'] ?></td>
								    		<td><?= $item['gender'] ?></td>
								    		<td><?= $item['UCS_name'] ?></td>
								    		<td>
								    			<a href="#modal<?= $item['id'] ?>" style="text-decoration: none" data-bs-toggle="modal">
								    				<img src="img/eye.svg" alt="">
								    			</a>
								    			<a href="mailto:<?= $item['email'] ?>" style="text-decoration: none" class="ms-1">
								    				<img src="img/mail.svg" alt="">
								    			</a>
								    		</td>
								    	</tr>
								    	<div class="modal fade" id="modal<?= $item['id'] ?>">
										  <div class="modal-dialog modal-lg">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title"><?= $item['name'] ?></h5>
										        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										      </div>
										      <div class="modal-body">
										        <p><b>Name:</b> <?= $item['name'] ?></p>
										        <p><b>Email:</b> <?= $item['email'] ?></p>
										        <p><b>Number:</b> <?= $item['number'] ?></p>
										        <p><b>Gender:</b> <?= $item['gender'] ?></p>
										        <p><b>Name of your University/College/School:</b> <?= $item['UCS_name'] ?></p>
										        <p><b>Year of study:</b> <?= $item['year_of_study'] ?></p>
												<p><b>Resume/CV:</b> <?php if(!empty($item['cv'])){ ?> <a href="download.php?id=<?= $item['id'] ?>">Download CV</a> <?php }else{ ?> CV Not Uploaded <?php } ?> </p>
										        <p><b class="d-block">How did you come to know about Rayhan's ICT?:</b> <?= $item['how_know_rict'] ?></p>
										        <p><b class="d-block">Why do you want to be a Campus Knight?:</b> <?= $item['why_campus_knight'] ?></p>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										      </div>
										    </div>
										  </div>
										</div>

							    	<?php
							    		}
							    		}else{
							    				?>
								    				<tr>
								    					<td class="text-danger text-center" colspan="20">
								    						No Data Found
								    					</td>
								    				</tr>
							    				<?php
							    			}
							    	?>
							    </tbody>
							  </table>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php

	if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("location: admin_login.php");
        exit();
	}

?>