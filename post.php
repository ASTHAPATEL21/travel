<?php include "includes/db.php" ?>

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
<!-- <body class="royal_preloader">	 -->
<body>
	
	<!-- <div id="royal_preloader"></div> -->

	
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
					<li class="nav__list-item"><a href="index.html">Explore</a></li>
					<li class="nav__list-item"><a href="studio.html">Contact</a></li>
					<li class="nav__list-item active-nav"><a href="blog.html">About</a></li>
					<li class="nav__list-item"><a href="contact.html">Sign Up</a></li>
					<li class="nav__list-item"><a href="admin/index.php">Admin</a></li>
				</ul>
			</div>
			<div class="nav__footer">
				<p>admin@travelspinz.com - <a href="contact.html">drop us a line</a></p>
			</div>
		</div>	
	
	<!-- Primary Page Layout
	================================================== -->
	<?php

	if(isset($_GET["post_id"])){
		$post_id = $_GET["post_id"];

		$query = "SELECT * FROM posts WHERE post_id = $post_id";
		$select_all_posts = mysqli_query($connection, $query);

		while($row = mysqli_fetch_assoc($select_all_posts)){
			$post_id = $row["post_id"];
			$post_tags = $row["post_tags"];
			$post_comment_count = $row["post_comment_count"];
			$post_status = $row["post_status"];
			$post_category_id = $row["post_category_id"];
			$post_title = $row["post_title"];
			$post_author = $row["post_author"];
			$post_date = $row["post_date"];
			$post_image = $row["post_image"];
			$post_content = $row["post_content"]; 
		}
	}

	?>
	<div class="section padding-page-top padding-bottom-big">			
		<div class="container">
			<div class="row">
				<div class="col-md-12 parallax-fade-top">
					<h3 class="page-title text-center"><?php echo $post_title; ?></h3>
					<p class="page-title text-center"><?php echo $post_author; ?></p>
				</div>
			</div>
		</div>						
	</div>
	
	<div class="section">			
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section drop-shadow rounded">
						<div class="blog-box background-white over-hide">
							<img src="img/uploads/<?php echo $post_image; ?>" alt="" class="blog-home-img"/>
							<div class="padding-in">
								<p class="mt-4"><?php echo $post_content; ?>
						
								<div class="separator-wrap pt-4 pb-4">	
									<span class="separator"><span class="separator-line dashed"></span></span>
								</div>
								<a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1"><span><?php echo $post_tags; ?></span></a>
								<div class="separator-wrap pt-4 pb-4">	
									<span class="separator"><span class="separator-line dashed"></span></span>
								</div>
								<div class="author-wrap">
									<img  src="img/team2.jpg" alt="" />
									<p> by <a href="#"><?php echo $post_author; ?></a></p>
								</div>
							</div>
						</div>
					</div>

<?php 

			$query = "SELECT * FROM comments WHERE comment_post_id = $post_id ";
			$query .= "AND comment_status = 'approved' ORDER BY comment_id DESC";
			// echo "<pre>";print_r($query);exit;
			$select_all_comments = mysqli_query($connection, $query);

			if(!$select_all_comments){
				die("Query Failed!" . mysqli_error($connection));
			}else{
		$count = mysqli_num_rows($select_all_comments);
		if($count > 0){
			// echo "<h3 class='h3'>{$count} Result Found</h3>";
			while($row = mysqli_fetch_assoc($select_all_comments)){
				$comment_author = $row["comment_author"];
				$comment_date = $row["comment_date"];
				$comment_content = $row["comment_content"];
				?>
					<div class="section drop-shadow rounded mt-4">			 
						<div class="post-comm-box background-white over-hide">
							<!-- <h4><?php echo $count;?> comments</h4> -->
							<!-- <div class="separator-wrap pt-3 pb-4">	
								<span class="separator"><span class="separator-line dashed"></span></span>
							</div> -->
							<div class="section">	
								<img  src="img/team2.jpg" alt="" />
								<h6><?php echo $comment_author; ?><small><?php echo $comment_date; ?></small></h6>
								<p class="mt-2"><?php echo $comment_content; ?></p>
								<a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mt-3 mb-1"><span>reply</span></a>
							</div>
							<!-- <div class="separator-wrap pt-4 pb-4">	
								<span class="separator"><span class="separator-line dashed"></span></span>
							</div>	 -->
							<!-- <div class="section pl-5">	
								<img  src="img/team1.jpg" alt="" />
								<h6><?php echo $comment_author; ?><small><?php echo $comment_date; ?></small></h6>
								<p class="mt-2"><?php echo $comment_content; ?></p>
								<a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mt-3 mb-1"><span>reply</span></a>
							</div>
							<div class="separator-wrap pt-4 pb-4">	
								<span class="separator"><span class="separator-line dashed"></span></span>
							</div>		 -->
						</div>
					</div>

	<?php
			}}}
	?>





					<!-- <div class="section drop-shadow rounded mt-4">			 
						<div class="post-comm-box background-white over-hide">
							<h4>Leave a comment</h4>	
							<div class="subscribe-box mt-3">
								<input type="text" value="" placeholder="Your Name *" class="form-control" />
							</div>
							<div class="subscribe-box mt-4">
								<input type="text" value="" placeholder="Email *" class="form-control" />
							</div>	
							<div class="subscribe-box mt-4">
								<input type="text" value="" placeholder="Website" class="form-control" />
							</div>	
							<div class="subscribe-box mt-4">
								<textarea name="message"  placeholder="Comment *" class="for-textarea form-control" ></textarea>
							</div>	
							<button class="btn btn-primary btn-round btn-long mt-4" type="button"><span>submit comment</span></button>
						</div>	
					</div> -->

					<?php
					if(isset($_POST["create_comment"])){
						$post_id = $_GET["post_id"];
						$comment_author = $_POST["comment_author"];
						$comment_email = $_POST["comment_email"];
						$comment_content = $_POST["comment_content"];

						$query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
						$query .= "VALUES ($post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved', now()) ";
						// echo "<pre>";print_r($query);exit;

						$result = mysqli_query($connection, $query);

						if(!$result){
							die("Query Failed" . mysqli_error($connection));
						}else{
							$query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
							$query .= "WHERE post_id = $post_id";

							$update_comment_count = mysqli_query($connection, $query);
							
						}
					}
					?>


					<div class="section drop-shadow rounded mt-4">			 
						<div class="post-comm-box background-white over-hide">
							<h4>Leave a comment</h4>
							<form action="" method="post">
							<div class="subscribe-box mt-3">
								<input type="text" name="comment_author" value="" placeholder="Your Name *" class="form-control" />
							</div>
							<div class="subscribe-box mt-4">
								<input type="email" name="comment_email" value="" placeholder="Email *" class="form-control" />
							</div>	
							<div class="subscribe-box mt-4">
								<textarea name="comment_content" placeholder="Comment *" class="form-textarea form-control" ></textarea>
							</div>	
							<button class="form-control btn btn-primary btn-round btn-long mt-4" type="submit" name="create_comment"><span>submit comment</span></button>
							</form>	
						</div>	
					</div>
					<!-- <div class="section drop-shadow rounded mt-4">
					<form action="" method="post">		 
						<input type="text" name="comment_author">
						<input type="email" name="comment_email">
						<input type="text" name="comment_content">
						<input type="submit" name="create_comment" value="create_comment">
					</form>	
					</div> -->
				</div>
				<div class="col-lg-4 mt-4 mt-lg-0">
					<div class="sidebar-box background-white drop-shadow rounded">
						<div class="subscribe-box">
							<input type="text" value="" placeholder="type here" class="form-control" />
							<button class="btn btn-primary subscribe-1" type="submit" value="">
								<span>search</span>
							</button>
						</div>	
						<div class="separator-wrap my-5">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>
			
						<h6 class="mb-3">Categories</h6>
						<ul class="list-style circle pl-4 pb-0">
			<?php 
			$query = "SELECT * FROM categories";
			$select_all_categories = mysqli_query($connection, $query);

		    while($row = mysqli_fetch_assoc($select_all_categories)){
				$cat_id = $row["cat_id"];
				$cat_title = $row["cat_title"];
				?>
							<li>
								<a href="#" class="btn-link btn-primary pl-0"><?php echo $cat_title; ?></a>
							</li>
				
				<?php
			}
			?>
			</ul>
						
						<!-- <div class="separator-wrap my-5">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>
						<h6 class="mb-3">Latest Video</h6>
						<div class="video-section">
							<figure class="vimeo tipped" data-title="<em><small>play</small></em>" data-tipper-options='{"direction":"top","follow":"true","margin":5}' > 
								<a href="https://player.vimeo.com/video/219627581">
									<img src="img/video-cover-1.jpg" alt="image"/>
								</a>
							</figure>
						</div> -->
						<div class="separator-wrap my-5">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>	
						<h6 class="mb-3">Tags</h6>
						<a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1"><span><?php echo $post_tags; ?></span></a>
						
						
						<div class="separator-wrap my-5">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>
					</div>
				</div>
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
							<a href="#"><p>36</p></a>
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