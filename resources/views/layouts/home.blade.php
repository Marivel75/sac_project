
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Standard Athletic Club</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="./assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="./assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="./assets/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="./assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="./assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">

     <x-navbar />

		<div id="fh5co-main">

       <x-home-header />

			 {{-- SAC bbrief description --}}
			 <div class="fh5co-narrow-content">

				 <div class="row row-bottom-padded-md">
					 <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="fh5co-heading-colored">The Standard Athletic Club</h2>
						<p><strong>The Standard Athletic Club is hidden in the forest of Meudon just minutes from the Etoile.</strong><br>
							It is Paris's premier International English-speaking Sports and Social Club, the perfect place for all the family to play sports casually or competitively or just relax and enjoy the social life.</br>
							If you'd like to know more, just call us on 01 46 26 16 09 or email contact@saclub.org.</p>
							<p class="fh5co-heading-colored"> We look forward to seeing you soon.</p>
							<hr class="divider">
					 </div>
				 </div>
			 </div>

			 {{-- Latest news --}}
		   <div class="fh5co-narrow-content">
		     <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Latest news</h2>
		     <div class="row row-bottom-padded-md">
		       @foreach ($posts as $key => $post)
		         <x-card :post="$post" />
		       @endforeach
		     </div>

				 <div class="row">
					 <div class="col-md-12 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
						 <p><a href="/posts" class="btn btn-primary">Browse the news</a></p>
					 </div>
				 </div>
				 <hr class="divider">


		   </div>

			 {{-- Sports sections grid --}}
			 <div class="fh5co-narrow-content">
			   <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Sports & Activities at the SAC</h2>
			   <div class="row row-bottom-padded-md">
			     @foreach ($sports as $key => $sport)
			       <x-photo-grid :sport="$sport" />
			     @endforeach
			   </div>
				 <hr class="divider">
			 </div>

			 {{-- Get in touch --}}
			<div id="get-in-touch">
				<div class="fh5co-narrow-content">
					<div class="row">
						<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
							<h1 class="fh5co-heading-colored">Get in touch</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="#" class="btn btn-primary">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="./assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="./assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="./assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="./assets/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="./assets/js/jquery.flexslider-min.js"></script>


	<!-- MAIN JS -->
	<script src="./assets/js/main.js"></script>

	</body>
</html>
