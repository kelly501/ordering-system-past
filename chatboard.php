<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Chatboard</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link href="main.css" type="text/css" rel="stylesheet"> 

<link rel="stylesheet" href="css/bootstrap.min.css">

<!--Fonts-->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' rel='stylesheet' type='text/css'>

<!--owl-carousel css-->
<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
<link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">

<!--CSS for Progress Bars-->
<link href="css/progress_animate.css" rel="stylesheet">
<link href="css/progress_style.css" rel="stylesheet">
<link href="css/progress_responsive.css" rel="stylesheet">

<link rel="stylesheet"  href="css/animations.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/color1.css">

<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="ajax.js" type="text/javascript"></script>
</head>

<body id="page-top" class="index about_body">
<!-- Preloader -->
<div class="preloader"></div>
<header>
	<!-- Navigation -->
	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a style="display: none" class="navbar-brand page-scroll" href="#page-top"><img src="images/logos/logo.png" alt=""></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav text-center">
					<li><a href="index.html">Home</a></li>
					<li><a href="login2.php">Login</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="shopping_cart.php">Shopping Cart</a></li>
					<li><a href="chatboard.php">Chatboard</a></li>
					<li><a href="billboard.php">Billboard</a></li>
					<li><a href="services.html">Services</a></li>
					<li class="logo-holder">                        
						<a href="index.html"><img src="images/logos/heart.png" alt=""></a>
					</li>
					<!--<li><a href="contact.html">Contact Us</a></li>-->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	<div id="page_header">
		<div class="page_title">
			<h3>Chatboard</h3>
			<ol class="breadcrumb"><li><a href="#">Shopping Cart</a></li><li class="active">Billboard</li></ol>
		</div>
	</div>
</header>
<!-- Aboutus page header -->

<section id="about_page" class="about_page text-center">
	<div class="container">
		<!--<div class="img_part">
			<img src="images/about/about11.png" alt="">
		</div>-->
		<div class="content_area">
			<h3>Chatboard</h3>
			<!--<h4>Hello customer !</h4>-->
			<head>
				<meta charset="utf-8">
			</head>
				
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
  
<body> 
<div id="thread" style="background-color:mistyrose;width:300px;margin:0 auto;"> 
<?php
include("conn.php"); 
$sql = "select * from `bbs_post` where `threadid` ='1' order by id asc"; 
$query =mysql_query($sql); 
while($row = mysql_fetch_array($query)){  
?> 
 <div class="post" id="post<?php echo $row['id'];?>"> 
    <div class="post_title"><?php echo $row['title'];?> [<?php echo $row['username'];?>]</div> 
    <div class="post_content"><pre><?php echo $row['content'];?></pre></div> 
   </div> 
<?php
} 
?> 
</div> 
<br>
<br>
<div style="background-color:mistyrose;width:300px;height:500px;margin:0 auto;">      
<table style="border:3px ;width:300px;" cellpadding="10" border='1'> 
<tr> 
 <td colspan="2" style="background-color:lightpink;height:50px;font-family:Microsoft JhengHei strong;">留言板<input type="hidden" name="threadid" id="threadid" value="1"></td> 
</tr> 
<tr> 
 <td><br>姓名</td>     
 <td><br><br><input style="background-color:pink;border:2px black solid; type="text" name="username" id="username"><br><br></td>
</tr> 
<tr> 
 <td><br>標題</td>   
 <td><br><br><input style="background-color:pink;border:2px black solid; type="text" name="post_title" id="post_title"><br><br></td>
</tr> 
<tr> 
 <td><br>內容</td>     
 <td><br><br><textarea style="background-color:pink;border:2px black solid; name="post_content" id="post_content"></textarea><br><br></td> 
</tr> 
<tr> 
 <td colspan="2"><input style="background-color:pink;border-radius:10px;border:2px black solid;width:50px;height:40px;" type="button" onclick="submitPost()" value="提交"></td> 
</tr> 
</table> 
</div>
</body> 
</html>

			
		</div>
	</div>
</section>


<!--<section id="demo1">
	<div class="container">
		<h4 class="section-heading">OUR SKILL</h4>
		<div class="demo1 col-md-6">
			<div class="skill">
				<!-- progress start -->
				<!--<div class="progress">
					<div class="lead">PHOTOSHOP</div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 70%;" data-progress="95%" class="progress-bar wow slideInLeft"> <span>70%</span></div>
				</div>
				<!-- progress end -->
				<!-- progress start -->
				<!--<div class="progress">
				<div class="progress">
					<div class="lead">ILLUSTRATOR</div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 30%;" data-progress="90%" class="progress-bar wow slideInLeft"><span>30%</span> </div>
				</div>
				<!-- progress end -->
				<!-- progress start -->
				<!--<div class="progress">
				<div class="progress">
					<div class="lead">PREMIRE PRO</div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 90%;" data-progress="85%" class="progress-bar wow slideInLeft"><span>90%</span> </div>
				</div>
				<!-- progress end -->
				<!-- progress start -->
				<!--<div class="progress">
				<div class="progress">
					<div class="lead">DREAMWAVER</div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 60%;" data-progress="80%" class="progress-bar wow slideInLeft"><span>60%</span> </div>
				</div>
				<!-- progress end -->                                
				<!--<div class="progress">
			</div>
		</div>
		<div class="demo1 col-md-6">
			<div class="skill">
				<!-- progress start -->
				<!--<div class="progress">
				<div class="progress">
					<div class="lead">AFTER EFECTS</div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 80%;" data-progress="95%" class="progress-bar wow slideInLeft"> <span>80%</span></div>
				</div>
				<!-- progress end -->
				<!-- progress start -->
				<!--<div class="progress">
				<div class="progress">
					<div class="lead">EDEG CSS</div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 50%;" data-progress="90%" class="progress-bar wow slideInLeft"><span>50%</span> </div>
				</div>
				<!-- progress end -->
				<!-- progress start -->
				<!--<div class="progress">
				<div class="progress">
					<div class="lead">INDESIGN</div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 75%;" data-progress="85%" class="progress-bar wow slideInLeft"><span>75%</span> </div>
				</div>
				<!-- progress end -->
				<!-- progress start -->
				<!--<div class="progress">
				<div class="progress">
					<div class="lead">FIREWORKS</div>
					<div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 95%;" data-progress="80%" class="progress-bar wow slideInLeft"><span>95%</span> </div>
				</div>
				<!-- progress end -->                                
				<!--<div class="progress">
			</div>
		</div>
	</div>
</section>-->

<!-- Team Section -->
<!--<section id="team" class="our-team">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Our Team</h2>
			</div>
		</div>
		<div class="row">
			<div id="owl-demo" class="owl-carousel">
				<div class="col-sm-4">
					<div class="team-member item">
						<div class="team-hover">
							<div class="team-hover-content">
								<h4>Betty Chen</h4>
								<p class="text-muted">Lead Designer</p>
								<ul class="list-inline social-buttons">
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<img src="images/team/1.jpg" class="img-responsive lazyOwl" alt="">

					</div>
				</div>
				<div class="col-sm-4">
					<div class="team-member item">
						<div class="team-hover">
							<div class="team-hover-content">
								<h4>Eden Hsieh</h4>
								<p class="text-muted">Lead Designer</p>
								<ul class="list-inline social-buttons">
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<img src="images/team/2.jpg" class="img-responsive lazyOwl" alt="">

					</div>
				</div>
				<div class="col-sm-4">
					<div class="team-member item">
						<div class="team-hover">
							<div class="team-hover-content">
								<h4>Kelly Huang</h4>
								<p class="text-muted">Lead Designer</p>
								<ul class="list-inline social-buttons">
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<img src="images/team/3.jpg" class="img-responsive lazyOwl" alt="">

					</div>
				</div>
				<div class="col-sm-4">
					<div class="team-member item">
						<div class="team-hover">
							<div class="team-hover-content">
								<h4>Yue Lai</h4>
								<p class="text-muted">Lead Designer</p>
								<ul class="list-inline social-buttons">
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<img src="images/team/1.jpg" class="img-responsive lazyOwl" alt="">

					</div>
				</div>
				<!--<div class="col-sm-4">
					<div class="team-member item">
						<div class="team-hover">
							<div class="team-hover-content">
								<h4>Kay Garland</h4>
								<p class="text-muted">Lead Designer</p>
								<ul class="list-inline social-buttons">
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<img src="images/team/2.jpg" class="img-responsive lazyOwl" alt="">

					</div>
				</div>-->
				<!--<div class="col-sm-4">
					<div class="team-member item">
						<div class="team-hover">
							<div class="team-hover-content">
								<h4>Kay Garland</h4>
								<p class="text-muted">Lead Designer</p>
								<ul class="list-inline social-buttons">
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<img src="images/team/3.jpg" class="img-responsive lazyOwl" alt="">

					</div>
				</div>-->
				<!--<div class="col-sm-4">
					<div class="team-member item">
						<div class="team-hover">
							<div class="team-hover-content">
								<h4>Diana Pertersen</h4>
								<p class="text-muted">Lead Developer</p>
								<ul class="list-inline social-buttons">
									<li><a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<img src="images/team/3.jpg" class="img-responsive lazyOwl" alt="">

					</div>
				</div>-->
			</div>
		</div>
	</div>
</section>


<!--<section id="facts" class="fun-facts">

	<div class="container animatedParent">

		<div class="row">

			<div class="col-lg-12 text-center col-sm-12">

				<h2 class="section-heading">Fun facts</h2>

			</div>

		</div>

		<div class="row wow fadeInUp slower">

			<div class="col-md-3">

				<div class="fact-box hide-bar">

					<i class="icon-awards"></i>
					<h4>Awwards </h4>
					<P>56</P>
				</div>                    

			</div>

			<div class="col-md-3">

				<div class="fact-box pro">

					<i class="icon-customers"></i>
					<h4>Happy Customers </h4>
					<P>32</P>
				</div>                    

			</div>

			<div class="col-md-3">

				<div class="fact-box">

					<i class="icon-codes"></i>
					<h4>Line of Codes </h4>
					<P>66</P>
				</div>                    

			</div>

			<div class="col-md-3">

				<div class="fact-box pro">

					<i class="icon-cup"></i>
					<h4>Cup of cofee </h4>
					<P>97</P>
				</div>                    

			</div>

		</div>

	</div>

</section>-->

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="list-inline social-buttons">
					<li><a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-youtube"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-vimeo"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-md-12">
				<span class="copyright"> <em>Copyright &copy; 2017.Company name All rights reserved.<!--<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>--></em></span>
			</div>
		</div>
	</div>
</footer>



<!-- jQuery -->
<script src="js/vendor/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/vendor/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/vendor/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/vendor/jqBootstrapValidation.js"></script>
<script src="js/vendor/contact_me.js"></script>
<script src="js/vendor/owl.carousel.min.js"></script>
<script src="js/vendor/prettify.js"></script>
<script type="text/javascript" src="js/vendor/css3-animate-it.js"></script>

<!-- Theme JavaScript -->
<script src="js/vendor/agency.min.js"></script>
<script src="js/vendor/jquery.mixitup.js"></script>
<script src="js/vendor/wow.min.js"></script>
<!---<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/vendor/gmaps.js"></script>--->
<script src="js/main.js"></script>
<script src="js/script.js"></script>

</body>
</html>
