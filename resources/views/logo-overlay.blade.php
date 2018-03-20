<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Suisse View</title>
	<meta name="keywords" content="Suisse View" />
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	<link href="css/jquery.simplyscroll.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/font/flaticon.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	<link href="fonts/ic-style.css" rel="stylesheet">
	<link href="fonts/scrollbar-style.css" rel="stylesheet">
	<link href="css/main-style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="header-bg"> 
		<div class="navigation" data-spy="affix" data-offset-top="50">
			<div class="container">
				<div class="row">				
					<nav class="navbar navbar-inverse">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span> 
							</button>
							<a class="navbar-brand" href="url_homepage"><img src="images/logo.png" alt="Logo"></a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="url_homepage">Home</a></li>
								<li><a href="url_editplaylist">Edit Playlist</a>
									<ul class="nav-submenu">
										<li><a href="url_createplaylist">Create Playlist</a></li>
										<li><a href="url_editplaylist">Edit Playlist</a></li>
									</ul><!--nav-submenu-->
								</li>
								<li><a href="url_projectlist">Project List</a></li>
								<li><a href="url_logooverlay">Logo Overlay</a></li>
								<li><a href="url_playlistmsg">Messages</a></li>
								<li><a href="#" class="user-button"><img src="images/user-top-ic.png"> Justin B</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<section class="contaneSection">
		<div class="container">				
			<div class="row">
			<h1 class="titleh1">Logo Overlay</h1>					
				<div class="col-sm-12 select-box create-playlist">
					<div class="row edit-playlist-section">
						<div class="col-xs-7 col-sm-5 col-md-5">
							<select class="form-control" id="#">
								<option>Select Project</option>
								<option>Select Project 1</option>
								<option>Select Project 2</option>
								<option>Select Project 3</option>
								<option>Select Project 4</option>
								<option>Select Project 5</option>
								<option>Select Project 6</option>
							</select>
						</div><!--col-5-->
						<div class="col-xs-5 col-sm-3 col-md-3 upload-logo-btn">
							<a class="activate-playlist-button" href="#">
								<span>Upload Logo</span>
							</a>
						</div><!--col-3-->
						<div class="col-xs-12 col-sm-4 col-md-4">
							<select class="form-control" id="#2">
								<option>Select Position</option>
								<option>Select Position 1</option>
								<option>Select Position 2</option>
								<option>Select Position 3</option>
								<option>Select Position 4</option>
								<option>Select Position 5</option>
								<option>Select Position 6</option>
							</select>
						</div><!--col-5-->
					</div><!--row | edit-playlist-section-->
				</div><!--col-12-->
				<div class="col-sm-12 select-box">
					<div class="row edit-playlist-options">										
						<div class="col-xs-6 col-sm-3 col-md-3">
							<span>Ofset X-Position</span>
							<input type="text" placeholder="10" class="text-center" >
						</div><!--col-3-->
						<div class="col-xs-6 col-sm-3 col-md-3">
							<span>Ofset Y-Position</span>
							<input type="text" placeholder="10" class="text-center" >
						</div><!--col-3-->	
					</div><!--row | edit-playlist-options-->
				</div><!--col-12-->
			</div><!--row-->
			<div class="col-sm-12 col-md-12 myVideo-box">
				<div class="add-logo-img">
					<img src="images/add-logo-img.png">
				</div>
				<video id="myVideo">
					<source src="mov_bbb.mp4" type="video/mp4">
					<source src="mov_bbb.ogg" type="video/ogg">
				</video>
			</div>
			<div class="col-sm-12 bottom-btns logo-overlay-video-btns">
				<a href="#" class="add-video-btn"><i class="fa fa-download"></i></a>
				<a onclick="playVid()" type="button" class="del-video-btn"><i class="fa fa-play"></i></a>
				<a onclick="pauseVid()" type="button" class="save-btn"><i class="fa fa-square"></i></a>
			</div><!--col-12-->
			<div class="col-sm-12 col-md-12 bottom-btns logo-overlay-bottom">
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3 span-title">
					<span>Select Message</span>				
				</div><!--col-3-->
				<div class="col-xs-8 col-sm-3 col-md-3 select-box">
					<select class="form-control" id="#3">
						<option>No Messages</option>
						<option>No Messages 1</option>
						<option>No Messages 2</option>
						<option>No Messages 3</option>
					</select>				
				</div><!--col-3-->
				<div class="col-xs-6 col-sm-3 col-md-3 btn-full">
					<a href="#" class="add-video-btn ic-start-preview"><span>Start Preview</span></a>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3 btn-full">
					<a href="#" class="del-video-btn ic-stop-preview"><span>Stop Preview</span></a>
				</div>
			</div><!--row-->
			</div><!--col-12-->
		</div><!--container-fluid-->
	</section><!--sectionhome-->
	
	<footer class="servicefooter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12 copynote wow fadeInDown">
					Copyright 2018
				</div>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/filterable.pack.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.simplyscroll.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scrollbar.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		new WOW().init();
		$("#scroller").simplyScroll();
	</script>
	<!--Video Option-->
	<script> 
		var vid = document.getElementById("myVideo"); 
		function playVid() { 
		    vid.play(); 
		} 
		function pauseVid() { 
		    vid.pause(); 
		}
	</script>
	<!--Video Option end-->
</body>
</html>