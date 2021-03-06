<?php
//include_once "admin/includes/dbcon.php";
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->

		<title>NatureBox</title>
		<meta name="description" content="" />
		<meta name="keywords" content="">
		<meta name="author" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW, ARCHIVE" />

		<link rel="stylesheet" href="./css/reset.css" type="text/css">
		<link rel="stylesheet" href="./css/foundation.css" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>
		<style>
			.handwrite {
				font-family: 'Patrick Hand', cursive;
			}
		</style>
	</head>

	<body >
		<nav class="top-bar" id="page-top">
			<ul>
				<li class="right">
					Join our growing community of more than 100,000 healthy snackers.
				</li>
				<li class="name">
					<h1>NatureBox</h1>
					<img src="./img/logo.1359458608.png" width="323" height="24" alt="logo"/>
				</li>
				
			</ul>
		</nav>
	<!-- main section -->
		<section class="main" id="section-main">
			<div class="row">
				<div class="small-12 large-7 columns hero" style="padding:0;">
					<img class="" src="./img/hero-x2.jpg" alt="hero"/>
					<div class="lead-message">
						<h2>Healthy & Delicious Snacks<br> Delivered To Your Door</h2>
					</div>
					<!-- 
						background:red url(/img/hero-x.jpg) 50% 0 no-repeat;
					<img class="show-for-landscape hide-for-portrait" src="./img/hero-x.jpg" alt="hero"/>
					<img class="show-for-portrait hide-for-landscape" src="./img/hero-y.jpg" alt="hero"/>
					-->
				</div>
				<div class="hero-shadow small-12 columns show-for-small">
					<img src="./img/hero-shadow-992.png" alt="hero shadow"/>
				</div>
				<!-- form -->
				<div class="small-12 large-5 columns wrap-cta" >
					<h2>Save 50% On Your First Box</h2>
					<p>Start today and pay only <span class="retail">$19.95</span> $9.95. 
						<!--
						<br><span class="offer-ends">Offer ends soon.</span>
						-->
					</p>
					<img src="./img/guarantee.png" alt="satisfaction guarantee">

					<div class="signup-form">
						<div class="wrap-handwrite">
							<p class="handwrite">
								A Healthier You Starts Here
							</p>
						</div>
						<img src="./img/down-pointer-f90.png"/ class="down-pointer">
						<form class="landing-handler" method="post" action="http://naturebox.com/landing/cms/handler">
							<fieldset>
								<input type="hidden" name="sku" id="sku" value="savvy_snacker">
								<input type="hidden" name="promo" id="promo" value="">
								<div class="large-6 columns">
									<label>Input Label</label>
									<input type="text" placeholder="First Name" id="first-name">
								</div>
								<div class="large-6 columns">
									<label>Input Label</label>
									<input type="text" placeholder="Last Name" id="last-name">
								</div>
								<div class="large-12 columns">
									<label>Input Label</label>
									<input type="text" placeholder="Email" id="email">
								</div>
							</fieldset>
						</form>
						<a href="#" class="large button cta-orange expand button-cta-1">Get Started</a>
					</div>
					<!-- end of signup-form -->
					<div class="wrap-free-shipping">
						Free Shipping Always
					</div>
				</div>
				<!-- end of cta -->
			</div>
			<div class="hero-shadow hide-for-small">
				<img src="./img/hero-shadow-992.png" alt="hero shadow"/>
			</div>
			<div class="media">
				<img src="./img/media.png" alt="As Featured In"/>
			</div>
			<div class="half-round">
				<a href="#section-value"><img src="./img/half-round-e.png" alt="more below"/></a>
			</div>
		</section>
	<!-- // feature section - 3 values -->
		<section class="value" id="section-value">
			<br>
			<h2>
				NatureBox Makes It Easy To Snack Healthy
			</h2>
			<div class="row">
				<div class="large-8 columns large-offset-2 fs-item">
					<div class="row wrap-item">
						<div class="large-6 columns">
							<h5>What Is In Your NatureBox</h5>
							<ul>
								<li>
									<p>5 full-size bags for $19.95/month</p>
								</li>
								<li>
									<p>100% nutritionist approved</p>
								</li>
								<li>
									<p>NEW snacks delivered monthly</p>
								</li>
							</ul>
						</div>
						<div class="large-6 columns">
							<h5>100% Satisfaction Guaranteed</h5>
							<ul>
								<li>
									<p>Your satisfaction comes first</p>
								</li>
								<li>
									<p>Pause or cancel anytime</p>
								</li>
								<li>
									<p>Free shipping always</p>
								</li>
							</ul>
						</div>
						<a class="large button success expand button-cta-2" href='#page-top'>Order and save 50% now!</a>
						<p>If you don't like a snack, we will replace it for free.</p>
					</div>
				</div>
			</div>
		</section>
	<!-- feature section - nutrition -->
		<section class="nutrition" id="section-nutrition">
			<div class="row">
				<div class="small-12 large-7 columns"  style="">
					<h2 class="hide-for-small">Discover A Healthier You</h2>
					<h4 class="show-for-small">Discover A Healthier You</h4>
				</div>
				<div class="small-8 large-5 columns fs">
					<div class="fs-nutrition">
						<h3 >100% Nutritionist Approved</h3>
						<ul>
							<li>
								<p><img src="./img/checkbox.png"/><span>NO</span> Partially Hydrogenated Oils
								</p>
							</li>
							<li>
								<p><img src="./img/checkbox.png"/><span>NO</span> Artificial Flavors or Colors
								</p>
							</li>
							<li>
								<p><img src="./img/checkbox.png"/><span>NO</span> High Fructose Corn Syrup
								</p>
							</li>
							<li>
								<p><img src="./img/checkbox.png"/><span>NO</span> MSG
								</p>
							</li>
							<li>
								<p><img src="./img/checkbox.png"/><span>0g</span> Trans Fat
								</p>
							</li>
						</ul>
					</div>
					<div class="fs-guarantee">
						<h3>The NatureBox Guarantee</h3>
						<p>
							We are so confident that you will love NatureBox that if for any reason you are not happy or satisfied , we will replace it for free. No questions asked.
						</p>
						<a class="large button success expand button-cta-3" href='#page-top'>Start Snacking</a>
					</div>
				</div>
		</section>
		<footer>
			<p>
				&copy; NatureBox, Inc. 2013. All Rights Reserved
			</p>
		</footer>

		<script src="./js/foundation.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<!-- // use cdn //
		<script src="./js/jquery-1.8.2.min.js"></script>
		-->
		<script src="./js/scrollto.js"></script>
		<link rel="stylesheet/less" href="./less/promo-f.less"/>
		<script src="./js/less-1.4.1.min.js"></script>
		<script src="./js/app.js"></script>

	</body>
</html>