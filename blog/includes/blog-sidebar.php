<div class="col-md-4">
	<div class="row">
		<div class="page-header">
			<h2>Latest Posts</h2>
		</div>
		<div class="custom-sidebar-list">
			<?php 
				$side_sql= "SELECT * FROM blog_data ORDER BY blog_id DESC LIMIT 5";
				$side_run = mysqli_query($conn,$side_sql);
				while($side_rows = mysqli_fetch_assoc($side_run)){
					$blogt=ucwords($side_rows['blog_title'])
			?>
						<a href="post.php?post_id=<?php echo $side_rows['blog_id'] ?>"class="list-group-item custom-sidebar-list-item"><?php echo $blogt ?></a>			
					<?php }
			?>
						
		</div>
	</div>
	<div class="row">
		<div class="page-header">
			<h2>Post Of The Day</h2>
		</div>
		<div class="day-post">
			<h4>The Second Post</h4>
			<div class="meta small-text"><a href="#">06-2017</a> | <a href="#">Technology</a> | <a href="#">Yogesh</a></div>
			<p>qww ds qdjhq;d q;ldihc  dmjbwyfut284r92 fnho48y9d ewfihwf982fnklef   flwfiw9pffn wflwifu84p2 dmdneoiu</p>
			<a href="#" class="label label-default">What is tech</a>
			<a href="#" class="label label-default">How it works</a>
			<a href="#" class="label label-default">abcccc</a>
		</div>
	</div>
	<div class="row">
		<div class="page-header">
			<h2>About Yogesh Murarka</h2>
		</div>
		<div class="col-md-4">
			<img src="../images/brainwash-41.jpg" class="img-responsive">
		</div>
		<div class="col-md-8">
			<a href="profile.php" class="lead">Profile</a><br>
			<a href="#" class="lead">Website</a><br>
			<a href="#" class="lead">FanPAge</a><br>
		</div>
	</div>
	<div class="row">
		<div class="page-header">
			<h2>Social Links</h2>
		</div>				
		<div class="text-center">
			<a href="#"><span style="color:#3b5998" class="fa fa-facebook-official fa-4x"></span></a>
			<a href="#"><span style="color:#0077b5"class="fa fa-linkedin fa-4x"></span></a>
			<a href="#"><span style="color:#dc4e41"class="fa fa-google-plus-square fa-4x"></span></a>
			<a href="#"><span style="color:#211f1f" class="fa fa-github fa-4x"></span></a> 
			<a href="#"><span style="color:#b92b27" class="fa fa-quora fa-4x"></span></a>
			<a href="#"><span style="color:#ff4500" class="fa fa-reddit fa-4x"></span></a>
		</div>
	</div>
</div>