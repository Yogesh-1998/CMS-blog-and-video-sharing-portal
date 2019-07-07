<!DOCTYPE html>
<html>
<head>
	<title>The Player Page</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body>
	<?php include "../includes/nav.php"	?>
	<?php include "includes/video_nav.php"	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="player-container">
					<video width="100%" controls>
						<source src="videos/vid1.mp4" type="video/mp4">
					</video>
				</div>
				<div class="row">
					<div class="col-md-8">
						<h2>How to drive a car</h2>
					</div>
					<div class="col-md-4 text-right"><span class="label label-primary">29 views</span></div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="col-md-6 user-image-container">
							<img src="../images/brainwash-41.jpg" class="img-responsive">
						</div>
						<div class="col-md-6">
							<a href="#" class="user-name-player-page"></a>>TechGuy</a>
							<a href="#" class="btn btn-primary">Subscribe</a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="pull-right text-center col-md-2"><span class="fa fa-level-down fa-3x"></span>
							<div>24 dislikes</div>
						</div>
						<div class="pull-right text-center col-md-2"><span class="fa fa-heart fa-3x"></span>
							<div>24 likes</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12 video-description">
		
							<h3>Description</h3>
						
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="pull-right">
							<a href="#" class="btn btn-default">Share</a>
							<a href="#" class="btn btn-default">Embed</a>
							<a href="#" class="btn btn-default">Report</a>
						</div>
						<div class="clearfix"></div>
						<br>
						<div class="well wel-md "><strong>https://www.google.com/</strong>
						</div>
						<div class="pull-right">
							<div class="text-center">
								<a href="#"><span style="color:#3b5998" class="fa fa-facebook-official fa-2x"></span></a>  
								<a href="#"><span style="color:#0077b5"class="fa fa-linkedin fa-2x"></span></a> 
								<a href="#"><span style="color:#dc4e41"class="fa fa-google-plus-square fa-2x"></span></a>  
								<a href="#"><span style="color:#211f1f" class="fa fa-github fa-2x"></span></a> 
								<a href="#"><span style="color:#b92b27" class="fa fa-quora fa-2x"></span></a> 
								<a href="#"><span style="color:#ff4500" class="fa fa-reddit fa-2x"></span></a> 
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<h3>Comments</h3>
						<form>
							<textarea class="form-control"></textarea><br>
							<button class="btn btn-primary pull-right">Submit</button>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<img src="../images/brainwash-41.jpg" class="img-responsive img-circle" style="width:60px ">
					</div>
					<div class="col-md-10">
						<div class="row">
							<h4 style="margin-bottom: 0px">John Doe</h4>
							<div style="margin-bottom: 10px">2 months</div>
						</div>
						<div class="row">
							<p style="padding-right: 20px;line-height: 20px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
							<a href="#"><strong>Reply</strong></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<img src="../images/brainwash-41.jpg" class="img-responsive img-circle" style="width:60px ">
					</div>
					<div class="col-md-10">
						<div class="row">
							<h4 style="margin-bottom: 0px">John Doe</h4>
							<div style="margin-bottom: 10px">2 months</div>
						</div>
						<div class="row">
							<p style="padding-right: 20px;line-height: 20px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
							<a href="#"><strong>Reply</strong></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<img src="../images/smapleadd.jpg">
				</div><br><hr>
				<div class="row sidebar-videos" >
					<div class="col-md-6">
						<a href="#" class="play-button"></a>
						<img src="../images/img4.png" class="img-responsive">
					</div>
					<br>
					<div class="col-md-6" style="margin: 0;padding: 0;"><a href="#">
						<h4 class="sidebar-videos-title" style="margin-bottom: 0;padding-bottom: 0">How to drive a car</h4>
						<strong style="display: block;">Techguy</strong>
						<p>uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident</p></a>
					</div>
				</div>
			<!-- </div>
			<div class="col-md-4"> -->
				<div class="row sidebar-videos" >
					<div class="col-md-6">
						<a href="#" class="play-button"></a>
						<img src="../images/img4.png" class="img-responsive">
					</div>
					<div class="col-md-6" style="margin: 0;padding: 0;"><a href="#">
						<h4 class="sidebar-videos-title" style="margin-bottom: 0;padding-bottom: 0">How to drive a car</h4>
						<strong style="display: block;">Techguy</strong>
						<p>uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident</p></a>
					</div>
				</div>
			<!-- </div>
			<div class="col-md-4"> -->
				<div class="row sidebar-videos" >
					<div class="col-md-6">
						<a href="#" class="play-button"></a>
						<img src="../images/img4.png" class="img-responsive">
					</div>
					<div class="col-md-6" style="margin: 0;padding: 0;"><a href="#">
						<h4 class="sidebar-videos-title" style="margin-bottom: 0;padding-bottom: 0">How to drive a car</h4>
						<strong style="display: block;">Techguy</strong>
						<p>uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident</p></a>
					</div>
				</div>
			<!-- </div>
			<div class="col-md-4"> -->
				<div class="row sidebar-videos" >
					<div class="col-md-6">
						<a href="#" class="play-button"></a>
						<img src="../images/img4.png" class="img-responsive">
					</div>
					<div class="col-md-6" style="margin: 0;padding: 0;"><a href="#">
						<h4 class="sidebar-videos-title" style="margin-bottom: 0;padding-bottom: 0">How to drive a car</h4>
						<strong style="display: block;">Techguy</strong>
						<p>uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident</p></a>
					</div>
				</div>
			<!-- </div>
			<div class="col-md-4"> -->
				<div class="row sidebar-videos">
					<div class="col-md-6">
						<a href="#" class="play-button"></a>
						<img src="../images/img4.png" class="img-responsive">
					</div>
					<div class="col-md-6 " style="margin: 0;padding: 0;"><a href="#">
						<h4 class="sidebar-videos-title" style="margin-bottom: 0;padding-bottom: 0">How to drive a car</h4>
						<strong style="display: block;">Techguy</strong>
						<p>uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident</p></a>
					</div>
				</div>
			</div>

		</div>
	</div>
	<?php include '../includes/footer.php'?>
</body>
</html>