<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="assets/img/logo.png">
	<title>Campus ambassador</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="school">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-bs-theme="dark">
		  <div class="container">
		    <a class="navbar-brand" href="school.php">
		    	<img src="assets/img/logo.png" alt="logo" width="140">
		    </a>
		    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarColor02">
		      <ul class="navbar-nav ms-auto">
		        <li class="nav-item">
		          <a class="nav-link" href="https://rayhansict.com/" target="_blank">Our Company</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#get">What will you get</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#do">What will you do</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link custom-btn" href="#apply">
		          	Apply Now
		      		<i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
		          </a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<div id="myCarousel" class="carousel slide carousel-fade myCarousel" data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <div class="container">
		      	<div class="row justify-content-start">
		      		<div class="col-12 col-md-8 col-lg-6">
		      			<h1 class="display-4">Do you want to be a <b>campus hero?</b></h1>
		      			<a href="#apply" class="custom-btn">
		      				Apply Now
		      				<i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
		      			</a>
		      		</div>
		      	</div>
		      </div>
		    </div>
		    <div class="carousel-item item-2">
		    	<div class="container">
		      	<div class="row justify-content-start">
		      		<div class="col-12 col-md-8 col-lg-6">
		      			<h1 class="display-4">Do you want to be a <b>campus hero?</b></h1>
		      			<a href="#apply" class="custom-btn">
		      				Apply Now
		      				<i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
		      			</a>
		      		</div>
		      	</div>
		      </div>
		    </div>
		  </div>
		</div>
	</header>
	<!-- header-end -->
	<?php include 'include/about.php' ?>
	<!-- end-about -->
	<?php include 'include/get.php' ?>
	<!-- end-get -->
	<?php include 'include/do.php' ?>
	<!-- end-do -->
	<section class="apply py-5" id="apply">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<h2 class="h1 text-uppercase text-center">Apply to be a Campus Knight</h2>
					<span class="title-border"></span>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-12 col-lg-10">
					<form method="POST" id="contact_form" name="contact_form" enctype="multipart/form-data">
						<div class="row">
							<div class="col-12 col-lg-6">
								<div class="mt-3 mb-3">
									<label for="name" class="text-white">Name *</label>
								  	<input type="text" required class="form-control shadow-none" id="name" name="name">
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="mt-3 mb-3">
								  <label for="email" class="text-white">Email *</label>
								  <input type="email" required class="form-control shadow-none" id="email" name="email">
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="mt-3 mb-3">
								  <label for="number" class="text-white">Number *</label>
								  <input type="number" class="form-control shadow-none" id="number" required name="number">
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="mt-3 mb-3">
									<p class="text-white mb-0">Gender</p>
									<label for="male" class="radio text-white">
										<input type="radio" class="form-check-input" id="male" value="Male" required name="gender">
										<span class="ms-2">Male</span>
									</label>
									<label for="female" class="radio text-white">
										<input type="radio" class="form-check-input" id="female" value="Female" required name="gender">
										Female
									</label>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="mt-3 mb-3">
								  <label for="number" class="text-white">Name of your School *</label>
								  <input type="text" class="form-control shadow-none" id="number" required name="name_of_university">
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="mt-3 mb-3">
								  <label for="y_o_s" class="text-white">Year of study *</label>
								  <input type="text" class="form-control shadow-none" id="y_o_s" required name="y_o_s">
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="mt-3 mb-3">
								  <label for="know_rict" class="text-white"> How did you come to know about Rayhan's ICT? *</label>
								  <input type="text" class="form-control shadow-none" id="know_rict" required name="know_rict">
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="mt-3 mb-3">
								  <label for="why_choose" class="text-white">Resume/CV (If any)</label>
								  <input type="file" accept=".pdf" class="form-control shadow-none" id="why_choose" name="cv">
								</div>
							</div>
							<div class="col-12">
								<div class="mt-3 mb-3">
								  <label for="why_choose" class="text-white">Why do you want to be a Campus Knight? *</label>
								  <textarea class="form-control shadow-none" id="why_choose" rows="5" required name="why_choose"></textarea>
								</div>
							</div>
							<div class="col-12">
								<input type="submit" name="submit" class="custom-btn shadow-none border-0" value="SUBMIT">
								<p id="thank_you_msg"></p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- end-apply -->
	<?php include 'include/footer.php' ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script>	
		$(document).ready(function(){
			$('#contact_form').on('submit', function(e){
				e.preventDefault();

				var data = new FormData(this);
				$.ajax({
					url: "server.php",
					type: "POST",
					dataType: 'json',
					data: data,
					contentType: false,
					processData: false,
					success: function(respons){
						jQuery('#thank_you_msg').addClass('success').html(respons.message);
						// jQuery('#contact_form')['0'].reset();
						jQuery('.submit-btn').val('Submit');
						jQuery('.submit-btn').attr('disabled',false);
					}
				});
			});
		});
	</script>
	<script>
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			dots: false,
			autoplay:true,
			lazyLoad: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		})
	</script>
</body>
</html>