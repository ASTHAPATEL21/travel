<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Eirene</title>
	<meta name="description"  content="Professional Creative Template" />
	<meta name="author" content="IG Design">
	<meta name="keywords"  content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
	<meta property="og:title" content="Professional Creative Template" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="Professional Creative Template" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
	<meta name="twitter:domain" content="http://ivang-design.com/" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="Professional Creative Template" />
	<meta name="twitter:image" content="http://ivang-design.com/" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/>	
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/colors/color.css"/>
	<link rel="stylesheet" href="css/retina.css"/>
			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	
</head>
<body class="royal_preloader">	
	
	<div id="royal_preloader"></div>

	
	<!-- Nav and Logo
	================================================== -->

		
	<!-- Nav and Logo
	================================================== -->

		<header class="cd-header">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12 ml-3 mr-md-3">
						<div class="logo-wrap">
						<a href="index.php"><h2 class="page-title text-center">TRAVELSPINZ</h2></a>
						</div>
						<div class="nav-but-wrap">
							<div class="menu-icon">
								<span class="menu-icon__line menu-icon__line-left"></span>
								<span class="menu-icon__line"></span>
								<span class="menu-icon__line menu-icon__line-right"></span>
							</div>					
						</div>
					</div>
				</div>
			</div>		
				
		</header>

		<div class="nav">
			<div class="nav__content">
				<ul class="nav__list">
					<li class="nav__list-item"><a href="index.php">Home</a></li>
					<li class="nav__list-item active-nav"><a href="contact.php">contact</a></li>
				</ul>
			</div>
			<div class="nav__footer">
				<p>admin@travelspinz.com - <a href="contact.html">drop us a line</a></p>
			</div>
		</div>	
	
	<!-- Primary Page Layout
	================================================== -->
	
	<div class="section padding-page-top padding-bottom-big">			
		<div class="container">
			<div class="row">
				<div class="col-md-12 parallax-fade-top">
					<h3 class="page-title text-center">Contact</h3>
					<p class="page-title text-center">Get in touch!</p>
				</div>
			</div>
		</div>						
	</div>
	
	<div class="section padding-bottom">			
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
						<div class="row">
							<div class="col-lg-6">
								<label for="name"> 
									<span class="error" id="err-name">please enter name</span>
								</label>
								<input name="name" id="name" type="text"   placeholder="Your Name: *"/>
							</div>
							<div class="col-lg-6 mt-4 mt-lg-0">
								<label for="email"> 
									<span class="error" id="err-email">please enter e-mail</span>
									<span class="error" id="err-emailvld">e-mail is not a valid format</span>
								</label>
								<input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
							</div>
							<div class="col-lg-12 mt-4">
								<label for="message"></label>
								<textarea name="message" id="message" placeholder="Tell Us Everything"></textarea>
							</div>
							<div class="col-lg-12 mt-4">
								<div id="button-con"><button class="send_message js-tilt" id="send" data-lang="en"><span>submit</span></button></div>					
							</div>	
							<div class="col-lg-12 mt-4">
								<div class="error" id="err-form"><span>There was a problem validating the form please check!</span></div>
								<div class="error" id="err-timedout">The connection to the server timed out!</div>
								<div class="error" id="err-state"></div>
								<div id="ajaxsuccess">Successfully sent!!</div>
							</div>	
						</div>	
					</form>	
				</div>
			</div>
		</div>						
	</div>
	
	<div class="section">			
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<div class="dv-light"></div>
				</div>
			</div>
		</div>						
	</div>
	
	<div class="section padding-top-bottom">			
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<h6>drop a line</h6>
					<p>admin@travelspinz.com</p>
					
				</div>
				<div class="col-md-3 mt-4 mt-md-0 text-center" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.4s">
					<h6>call us</h6>
					<p>+91 234 78364236</p>
				</div>
				<div class="col-md-3 mt-4 mt-md-0 text-center" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.6s">
					<h6>find us</h6>
					<p>travelspinz</p>
				</div>
			</div>
		</div>						
	</div>
	
	<div class="section">			
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<div class="dv-light"></div>
				</div>
			</div>
		</div>						
	</div>
	
	<div class="section padding-top">			
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<div class="subscribe">
						<input type="text" placeholder="subscribe"/>
						<button data-lang="en"><span class="fa-long-arrow-right"></span></button>
					</div>
					<div class="subscribe-text">
						<p>* we promise that we won´t spam you, never.</p>
					</div>
				</div>
			</div>
		</div>						
	</div>
	
	
	<div class="section">		
		<div class="container padding-top-big padding-bottom">
			<div class="row">
				<div class="col-md-12 footer" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<p>2021 © <a href="https://themeforest.net/user/ig_design/portfolio?ref=IG_design">Travelspinz</a></p>
				</div>
			</div>
		</div>	
	</div>
		
	
		
	<div class="social-fixed-left">
		<a href="#">twitter</a>
		<a href="#">facebook</a>
		<a href="#">behance</a>
		<a href="#">github</a>
	</div>
	
	<div class="scroll-to-top">to top</div>

	
	<!-- JAVASCRIPT
    ================================================== -->
	<script src="js/jquery.min.js"></script>
	<script src="js/royal_preloader.min.js"></script> 
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script> 
	<script src="js/contact.js"></script>
	<script src="js/custom.js"></script>  
<!-- End Document
================================================== -->
</body>
</html>