<?php
//include_once "admin/includes/dbcon.php";
?>
<!DOCTYPE html>
<!--
As Always, Awesomness from Jimmy Joe
-->
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->

		<title></title>
		<meta name="description" content="" />
		<meta name="keywords" content="">
		<meta name="author" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW, ARCHIVE" />

		<link rel="stylesheet" href="/css/reset.css" type="text/css">
		<link rel="stylesheet" href="/css/foundation.css" type="text/css">
		<link rel="stylesheet" href="/css/animate.css" type="text/css">

		<script src="/js/foundation.min.js"></script>
		<script src="/js/jquery-1.8.2.min.js"></script>
		<script src="/js/scrollto.js"></script>

		<link rel="stylesheet/less" href="./less/promo-g.less"/>
		<script src="/js/less-1.3.0.min.js"></script>
		<script src="./js/fullscreen.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>

		<style>
			.handwrite {
				font-family: 'Patrick Hand', cursive;
			}
		</style>
	</head>

	<body >

		<!-- main section -->
		<section class="main" id="section-main">
			<!--
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
			-->
			<div class="row">
				<div class="small-12 large-7 columns hero" style="padding:0;">

					<div class="lead-message">
						<h2>Healthy & Delicious Snacks
						<br>
						Delivered To Your Door</h2>
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
					<p>
						Start today and pay only <span class="retail">$19.95</span> $9.95 <!--
						<br><span class="offer-ends">Offer ends soon.</span>
						-->
					</p>
					<div class="media">
						<img src="./img/media-417.png" alt="As Featured In"/>
					</div>
					<!--
					<img src="./img/guarantee.png" alt="satisfaction guarantee">
					-->
					<div class="signup-form">
						<div class="wrap-handwrite">
							<p class="handwrite">
								A Healthier You Starts Here
							</p>
						</div>
						<img src="./img/down-pointer-orange.png"/ class="down-pointer">
						<form class="landing-handler" method="post" action="http://naturebox.com/landing/cms/handler">
							<fieldset>
								<input type="hidden" name="sku" id="sku" value="savvy_snacker">
								<input type="hidden" name="promo" id="promo" value="">
								<div class="large-6 columns">
									<label>Input Label</label>
									<input type="text" placeholder="First Name">
								</div>
								<div class="large-6 columns">
									<label>Input Label</label>
									<input type="text" placeholder="Last Name">
								</div>
								<div class="large-12 columns">
									<label>Input Label</label>
									<input type="text" placeholder="Email">
								</div>
							</fieldset>
						</form>
						<a href="#" class="large button cta-orange expand">Get Started</a>
					</div>
					<!-- end of signup-form -->
					<div class="wrap-free-shipping">
						Free Shipping Always
					</div>
				</div>
				<!-- end of cta -->
			</div>
			<div class="row">
				<div class="small-12 large-7 columns"></div>
				<div class="small-12 large-5 columns">
					<div class="hero-shadow hide-for-small">
						<img src="./img/hero-shadow-417.png" alt="hero shadow"/>
					</div>
				</div>
			</div>

			<div class="half-round">
				<a href="#section-value"><img src="./img/half-round-e.png" alt="more below"/></a>
			</div>
		</section>
		<!-- // feature section - 3 values -->
		<section class="value" id="section-value">
			<br>
			<h2> NatureBox Makes It Easy To Snack Healthy </h2>
			<div class="row">
				<div class="large-8 columns large-offset-2 fs-item">
					<div class="row wrap-item">
						<div class="large-6 columns">
							<h5>What Is In Your NatureBox</h5>
							<ul>
								<li>
									<p>
										5 full-size bags for $19.95/month
									</p>
								</li>
								<li>
									<p>
										100% Nutritionist Approved
									</p>
								</li>
								<li>
									<p>
										Choose your snacks after the first month
									</p>
								</li>
							</ul>
						</div>
						<div class="large-6 columns">
							<h5>100% Satisfaction Guaranteed</h5>
							<ul>
								<li>
									<p>
										Full refund if you are not satisfied
									</p>
								</li>
								<li>
									<p>
										Pause or cancel anytime
									</p>
								</li>
								<li>
									<p>
										Free shipping always
									</p>
								</li>
							</ul>
						</div>
						<a class="large button success expand" href='#page-top'>Order and save 50% now!</a>
						<p>
							Get your first box for $10.
						</p>
					</div>
				</div>
			</div>
			<!--
			<div class="row">
			<div class="large-4 columns fs-item">
			<div class="wrap-item">
			<img src="./img/media333.png"/>
			<h5>Plans Start at $19.95 per month</h5>
			<p>
			5 full-size bags at $19.95 per month. 100% nutritionist approved to keep your heart happy.
			</p>
			</div>
			</div>
			<div class="large-4 columns fs-item" >
			<div class="wrap-item">
			<img src="./img/media333.png"/>
			<h5>New Snacks Delivered Monthly</h5>
			<p>
			Every month you’ll receive a selection of delicious snacks in a curated mix of nutritionist-approved choices.
			</p>
			</div>
			</div>
			<div class="large-4 columns fs-item">
			<div class="wrap-item">
			<img src="./img/media333.png"/>
			<h5>Risk Free. Satisfaction Guaranteed.</h5>
			<p>
			Pause or cancel anytime. If you are not 100% satisfied, we will refund you. It’s that simple.
			</p>
			</div>
			</div>
			-->
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
							We are so confident that you will love NatureBox that if for any reason you are not happy or satisfied , we will refund you. No questions asked.
						</p>
						<a class="large button success expand" href='#page-top'>Start Your Risk Free Trial</a>
					</div>
				</div>
		</section>
		<footer>
			<p>
				&copy; NatureBox, Inc. 2013
			</p>
		</footer>
		<script></script>

	</body>
</html>