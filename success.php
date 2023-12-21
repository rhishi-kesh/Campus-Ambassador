<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Campus ambassador</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background: #242424;
			color: #FDFF00;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			width: 100%;
		}
		.center{
			width: 500px;
			height: auto;
			text-align: center;
		}
		.box{
			background: #000;
			border-radius: 10px;
			width: 70%;
			margin: auto;
		}
		.success-btn{
			text-decoration: none;
			text-transform: uppercase;
			background: #FDFF00;
			color: #000;
			transition: 0.6s;
			margin-top: 10px;
			display: inline-block;
			margin-top: 12px;
		}
		@media screen and (max-width: 767px){
			.box{
				width: 100%;
			}	
		}
	</style>
</head>
<body>
	<div class="center">
		<img src="assets/img/congratulations.png" alt="img" class="img-fluid" width="100">
		<h3 class="mt-3 h1 mb-0">Congratulations!!!</h3>
		<h3 class="h4 mb-0">You have completed 1st step of</h3>
		<h3 class="h4 mb-0">Campus Knight.</h3>
		<div class="p-3 box mt-3">
			<p class="mb-0 lead">Our team will contact with you soon keep eyes on your phone and email.</p>
		</div>
		<a href="index.php" class="btn success-btn shadow-none">Go Back</a>
		<button id="shareBtn">Share This!</button>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script>
		var shareButton = document.getElementById('shareBtn');
		shareButton.addEventListener("click", async () => {
		try {
			await navigator.share({ title: "Example Page", url: "http://ca.rayhansict.com/" });
			console.log("Data was shared successfully");
		} catch (err) {
			console.error("Share failed:", err.message);
		}
		});
	</script>
</body>
</html>