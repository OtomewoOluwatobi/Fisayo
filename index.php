<?php $conx = mysqli_connect("localhost", "root", "", "fisayofunds_dbase"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ataba Oluwafisayo - [SAU 17/18 Alumin]</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">


	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	
    <script src="https://js.paystack.co/v1/inline.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Ataba Oluwafisayo </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item cta"><a href="#donate" class="nav-link">Donate</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap js-fullheight">
		<div class="home-slider js-fullheight owl-carousel">
			<div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
				<div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center">
						<div class="col-md-10 col-lg-7 ftco-animate">
							<div class="text w-100">
								<h2>Lets Help </h2>
								<h1 class="mb-3">One of our own sister whole again</h1>
								<div class="d-flex meta">
									<div class=""><p class="mb-0"><a href="#donate" class="btn btn-secondary py-3 px-2 px-md-4">Donate Now</a></p></div>
									<a href="#" class="d-flex align-items-center button-link">
										<div class="button-video d-flex align-items-center justify-content-center">
											<span class="fa fa-play"></span>
										</div>
										<span>Watch our video</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" id="donate">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 order-md-last d-flex align-items-stretch">
					<div class="donation-wrap">
						<form class="appointment">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Full Name</label>
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-user"></span></div>
											<input type="text" class="form-control" id="name" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Email Address</label>
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-paper-plane"></span></div>
											<input type="email" class="form-control" id="email" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Mobile Contact</label>
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-phone"></span></div>
											<input type="mobile" class="form-control" id="mobile" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Amount</label>
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-money"></span></div>
											<input type="number" class="form-control" id="price" value="1000" min="1000">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">No amount is too small</label>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="button" value="Donate Now" id="makePayment" class="btn btn-secondary py-3 px-4">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-7 wrap-about py-3">
					<div class="heading-section pr-md-5 pt-md-5">
						<h2 class="mb-4">Welcome</h2>
						<p>This page aims to support one of our own, Fisayo Ataba, that just lost her mother today, as most of us are aware she lost her dad last year. So this is a time for us to come together to support her as this is a very trying time for her, no amount is too small.</p>
					</div>
					<div class="row my-md-5">
						<div class="col-md-6 d-flex counter-wrap">
							<div class="block-18 d-flex">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-volunteer"></span>
								</div>
								<div class="desc">
									<div class="text">
										<strong class="number" data-number="<?php
											$getV = mysqli_query($conx, "SELECT * FROM `tranz_tb`");
											$result = mysqli_num_rows($getV);
											if($result < 1){
												echo '0';
											}else{
												echo $result;
											}
										?>">0</strong>
									</div>
									<div class="text">
										<span>Volunteers</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex counter-wrap">
							<div class="block-18 d-flex">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-piggy-bank"></span>
								</div>
								<div class="desc">
									<div class="text">
										<strong class="number" data-number="<?php
											$getS = mysqli_query($conx, "SELECT sum(`price`) AS totalSum FROM `tranz_tb`");
											$row = mysqli_fetch_assoc($getS);
											if($row['totalSum'] < 1){
												echo '0';
											}else{
												echo $row['totalSum'];
											}
										?>">0</strong>
									</div>
									<div class="text">
										<span>Amount Raised</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<footer class="footer py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="copyright">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://danoitech.com" target="_blank">danoitech.com</a>
					</p>
				</div>
			</div>
		</footer>

		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>

		<script>
			$(document).ready(function(){
				$('#makePayment').click(function(){
					var name = $('#name').val(); 
					var email = $('#email').val();
					var mobile = $('#mobile').val();
					var price = $('#price').val();
					var transRef = 'SAU1718'+Math.floor((Math.random() * 1000000099) + 1); 
	
					var handler=PaystackPop.setup({
						// key: "pk_live_c442d2527d74dc98987d3a4ce431d9b0091db20f",
						key: "pk_test_8bf3d1be62d63924b7149c85416de7b567b34a38",
						email: email,
						amount: (price*100)+(0.075*price),
						currency: "NGN",
						ref: transRef,
						fullName: name,
						callback: function(response){
							$.ajax({
								type: 'POST',
								url: 'fundAccount.php',
								data: 'name='+name+'&email='+email+'&amount='+price+'&transRef='+transRef+'&mobile='+mobile,
									success: function(result){
									var jResult = JSON.parse(result);
									if (jResult.success == 1) {
										var r = confirm("Transaction Successful");
										if (r == true) {
										   window.location = "index.php";
										} else {
											
										}
									}else{
										alert(jResult.success);
									}
								}   
							});
						}, 
						onClose: function(){
							alert('window closed');
						}
					});
					handler.openIframe();
				});
			});
		</script>
		
	</body>
	</html>