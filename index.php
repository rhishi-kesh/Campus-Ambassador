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
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="index">
	<section>
		<div class="card">
			<div class="index-icon">
				<div class="text-center">
					<img src="assets/img/logo.png" alt="rayhan's ICT" width="150">
				</div>
				<h3 class="text-white text-uppercase text-center display-2">I am a</h3>
				<a href="university.php" class="index-btn" style="--clr:#FDFF00">
				    <span>University Student</span>
				    <i></i>
				</a>
				<a href="collage.php" class="index-btn" style="--clr:#FDFF00">
				    <span>College Student</span>
				    <i></i>
				</a>
				<a href="school.php" class="index-btn" style="--clr:#FDFF00">
				    <span>School Student</span>
				    <i></i>
				</a>
				<a href="diploma.php" class="index-btn" style="--clr:#FDFF00">
				    <span>Diploma Student</span>
				    <i></i>
				</a>
			</div>
		</div>
	</section>
	<div class="working_with">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-5">
					<h2 class="h1 text-center text-uppercase">Our Partners</h2>
					<span class="title-border-dark"></span>
				</div>
			</div>
			<div class="row py-2 owl-carousel owl-theme">
				<div class="col-12 text-center align-self-center text-center">
					<img src="assets/img/interior.png" alt="" style="width: 120px; object-fit:cover; margin: auto;">
				</div>
				<div class="col-12 text-center align-self-center text-center">
					<img src="assets/img/creative.png" alt="" style="width: 120px; object-fit:cover; margin: auto;">
				</div>
				<div class="col-12 text-center align-self-center text-center">
					<img src="assets/img/boinama.png" alt="" style="width: 120px; object-fit:cover; margin: auto;">
				</div>
				<div class="col-12 text-center align-self-center text-center">
					<img src="assets/img/teavine.png" alt="" class="mb-3" style="width: 120px; object-fit:cover; margin: auto;">
				</div>
			</div>
		</div>
	</div>
	<?php include 'include/footer.php' ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script>
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