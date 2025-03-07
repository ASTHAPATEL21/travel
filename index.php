<?php include "includes/db.php" ?>



<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Travelspinz</title>
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
					<li class="nav__list-item  active-nav"><a href="index.html">Explore</a></li>
					<li class="nav__list-item"><a href="contact.php">Contact</a></li>
					<li class="nav__list-item"><a href="blog.html">About</a></li>
					<li class="nav__list-item"><a href="contact.html">Sign Up</a></li>
					<li class="nav__list-item"><a href="admin/index.php">Admin</a></li>
				</ul>
			</div>
			<div class="nav__footer">
				<p>admin@travelspinz.com- <a href="contact.html">drop us a line</a></p>
			</div>
		</div>	
	
	<!-- Primary Page Layout
	================================================== -->
	
	<div class="section padding-page-top padding-bottom-big">			
		<div class="container">
			<div class="row">
				<div class="col-md-12 parallax-fade-top">
					<h3 class="page-title text-center">Explore</h3>
					<p class="page-title text-center">A place to explore your nearby travel destinations!</p>
				</div>
			</div>
		</div>	
</div>

<div class="row justify-content-center">
	<form class="form-inline input-lg col-6" method="post">
    	<input class="form-control col-lg input-lg" name="search" type="search" placeholder="Search" aria-label="Search">
    	<button class="btn btn-outline-success my-2 my-sm-0 ml-2" type="submit" name="submit"><i class="fa fa-search p-2"></i></button>
    </form>
	</div>
    </div>


<div class="container">
	<?php
	if(isset($_POST["submit"])){
		$search_keyword = $_POST["search"];

		$query = "SELECT * FROM posts WHERE post_title LIKE '%$search_keyword%' OR post_tags LIKE '%$search_keyword%' OR post_author LIKE '%$search_keyword%' OR post_image LIKE '%$search_keyword%' OR post_content LIKE '%$search_keyword%'";

		$search_result = mysqli_query($connection, $query);

		if(!$search_result){
			echo "Failed";
		}

		$count = mysqli_num_rows($search_result);
		if($count == 0){
			echo "<h3 class='h3'>Sorry, No Result Found</h3>";
		}else{
			echo "<h3 class='h3'>{$count} Result Found</h3>";
			while($row = mysqli_fetch_assoc($search_result)){
				$post_id = $row["post_id"];
				$post_tags = $row["post_tags"];
				$post_status = $row["post_status"];
				$post_category_id = $row["post_category_id"];
				$post_title = $row["post_title"];
				$post_author = $row["post_author"];
				$post_date = $row["post_date"];
				$post_image = $row["post_image"];
				$post_content = $row["post_content"]; 

		?>

		
				<div class="row">
				<div class="col-md-4" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<div class="blog-wrap background-grey pb-4">
						<a href="post.php?post_id=<?php echo $post_id;?>"><img src="img/uploads/<?php echo $post_image ?>" alt="<?php echo $post_title ?>"></a>
						<p class="px-4 pt-4 primary-text-color"><small><?php echo $post_author ?></small></p>
						<a href="post.php?post_id=<?php echo $post_id;?>"><h6 class="px-4"><?php echo $post_title ?></h6></a>
						<p class="px-4"><?php echo $post_content; ?></p>
						<a href="post.php?post_id=<?php echo $post_id;?>"><div class="go-post pl-4 pt-4"><i class="fa fa-long-arrow-right"></i></div></a>
					</div>
				</div>
				</div>

				<?php
			
			}
			
		}
	}
	?>
	




	<!-- <div class="row justify-content-center">
    <div class="col-md-6 mb-4">
    	<div class="input-group md-form form-sm form-1 pl-0">
        	<div class="input-group-prepend">
        		<span class="input-group-text bg-success" id="basic-text1"><i class="fa fa-search text-white" aria-hidden="true"></i></span>
        	</div> 
        	<input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
    	</div>
    </div>
	</div> -->
</div>

    <div class="section my-5">
		<div class="container">
			<div class="h5 ml-2 font-weight-bold">CATEGORIES</div>
			<?php 
			$query = "SELECT * FROM categories";
			$select_all_categories = mysqli_query($connection, $query);

		    while($row = mysqli_fetch_assoc($select_all_categories)){
				$cat_id = $row["cat_id"];
				$cat_title = $row["cat_title"];
				?>
				<a href="#" class="badge badge-info p-3 mx-2"><?php echo $cat_title; ?></a>
				<?php
			}
			?>
				<!-- <a href="#" class="badge badge-secondary p-3 mx-2">Secondary</a>
				<a href="#" class="badge badge-success p-3 mx-2">Success</a>
				<a href="#" class="badge badge-danger p-3 mx-2">Danger</a>
				<a href="#" class="badge badge-warning p-3 mx-2">Warning</a>
				<a href="#" class="badge badge-info p-3 mx-2">Info</a>
				<a href="#" class="badge badge-light p-3 mx-2">Light</a>
				<a href="#" class="badge badge-dark p-3 mx-2">Dark</a> -->
			</div>
		</div>
	</div>
							

	
	<div class="section">			
		<div class="container">
			<?php 

			$query = "SELECT * from posts ";
			$select_all_posts = mysqli_query($connection, $query);
			while($row = mysqli_fetch_assoc($select_all_posts)){
				$post_id = $row["post_id"];
				$post_tags = $row["post_tags"];
				$post_status = $row["post_status"];
				$post_category_id = $row["post_category_id"];
				$post_title = $row["post_title"];
				$post_author = $row["post_author"];
				$post_date = $row["post_date"];
				$post_image = $row["post_image"];
				$post_content = $row["post_content"]; 

				if($post_status == "Published" || $post_status == "published"){
?>
				<div class="row">
				<div class="col-md-4" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<div class="blog-wrap background-grey pb-4">
						<a href="post.php?post_id=<?php echo $post_id;?>"><img src="img/uploads/<?php echo $post_image ?>" alt="<?php echo $post_title ?>"></a>
						<p class="px-4 pt-4 primary-text-color"><small><?php echo $post_author ?></small></p>
						<a href="post.php?post_id=<?php echo $post_id;?>"><h6 class="px-4"><?php echo $post_title ?></h6></a>
						<p class="px-4"><?php echo $post_content; ?></p>
						<a href="post.php?post_id=<?php echo $post_id;?>"><div class="go-post pl-4 pt-4"><i class="fa fa-long-arrow-right"></i></div></a>
					</div>
				</div>
				<div class="col-md-4" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<div class="blog-wrap background-grey pb-4">
					<a href="post.php?post_id=<?php echo $post_id;?>"><img src="img/uploads/<?php echo $post_image ?>" alt="<?php echo $post_title ?>"></a>
						<p class="px-4 pt-4 primary-text-color"><small><?php echo $post_author ?></small></p>
						<a href="post.php?post_id=<?php echo $post_id;?>"><h6 class="px-4"><?php echo $post_title ?></h6></a>
						<p class="px-4"><?php echo $post_content; ?></p>
						<a href="post.php?post_id=<?php echo $post_id;?>"><div class="go-post pl-4 pt-4"><i class="fa fa-long-arrow-right"></i></div></a>
					</div>
				</div>
				<div class="col-md-4" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<div class="blog-wrap background-grey pb-4">
					<a href="post.php?post_id=<?php echo $post_id;?>"><img src="img/uploads/<?php echo $post_image ?>" alt="<?php echo $post_title ?>"></a>
						<p class="px-4 pt-4 primary-text-color"><small><?php echo $post_author ?></small></p>
						<a href="post.php?post_id=<?php echo $post_id;?>"><h6 class="px-4"><?php echo $post_title ?></h6></a>
						<p class="px-4"><?php echo $post_content; ?></p>
						<a href="post.php?post_id=<?php echo $post_id;?>"><div class="go-post pl-4 pt-4"><i class="fa fa-long-arrow-right"></i></div></a>
					</div>
				</div>
				</div>			
		<?php	}else{
			echo "No post found, Sorry";
		}
			}
			?>
				<!-- <div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.4s">
					<div class="blog-wrap background-grey pb-4">
						<a href="post.php"><img src="img/Travel Images/Gujarat/aQU5M37jwM.jpg" alt=""></a>
						<p class="px-4 pt-4 primary-text-color"><small>by Anna Kulis</small></p>
						<a href="post.html"><h6 class="px-4">Sleep, code, eat, travel. Repeat.</h6></a>
						<p class="px-4">Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor.</p>
						<a href="post.php"><div class="go-post pl-4 pt-4"><i class="fa fa-long-arrow-right"></i></div></a>
					</div>
				</div> -->
			</div>
		</div>						
	</div>
	
	<div class="section">		
		<div class="container padding-top">
			<div class="row">
				<div class="col-md-12" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
					<ul class="blog-pagination">
						<li>
							<div class="arrow-icons curent"><span class="fa-long-arrow-left"></span></div>
						</li>
						<li>
							<p class="curent">1</p>
						</li>
						<li>
							<a href="#"><p>2</p></a>
						</li>
						<li>
							<a href="#"><p>3</p></a>
						</li>
						<li>
							<p class="no-shadow">...</p>
						</li>
						<li>
							<a href="#"><p>7</p></a>
						</li>
						<li>
							<a href="#"><div class="arrow-icons"><span class="fa-long-arrow-right"></span></div></a>
						</li>
					</ul>
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
	<script src="js/custom.js"></script>  
<!-- End Document
================================================== -->
</body>
</html>