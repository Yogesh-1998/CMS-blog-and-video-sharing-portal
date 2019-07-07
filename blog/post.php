<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
</head>
<body>
	<?php
		include '../includes/nav.php'
	 ?>
	<header>
		<div class="text-center">
			<h1>The Blog</h1>
			<p>A simple blog that make our lives easier.</p>
		</div>
	</header>
 
	<div class="container-fluid">
		<?php
			include "includes/blog-nav.php";
		?>

		<div class="col-md-8">
			<div class="post ">
				<?php 
					if( isset($_GET['post_id']) ) {
						$sql="SELECT * FROM blog_data WHERE blog_id = '$_GET[post_id]' ";
						$run_sql=mysqli_query($conn,$sql);
						if($run_sql == FALSE) { 
    				die(mysqli_error($conn)); // TODO: better error handling
				 }
						while( $rows = mysqli_fetch_assoc($run_sql)){
							$blogtitle=ucwords($rows['blog_title']);
							$cat_sql="SELECT * FROM categories WHERE cat_id='$rows[blog_category]'";
							$cat_r= mysqli_query($conn,$cat_sql);
							while($cat_rows=mysqli_fetch_assoc($cat_r)){
								$cat_data=ucwords($cat_rows['cat_data']);
								$cat_id=$cat_rows['cat_id'];
							}
							echo "
							<h1><a href='#' class='post-title'>$blogtitle</a></h1>
							<div class='meta small-text'>
								<a href='#'>$rows[blog_date]</a> | <a href='#'>$rows[blog_author]</a> | <a href='menu.php?cat_id=$cat_id'>$cat_data</a> 
							</div>
							<p class='lead'>$rows[blog_description]</p>

							<a class='label label-default'>What is Technology</a>
							<a class='label label-default'>Related Technology</a>
							";
						}
					}
					else{
						?>
							<script type="text/javascript">window.location="index.php"</script>
						<?php
					}
				?>
				
			</div>
		</div>
			<?php
				include "includes/blog-sidebar.php";
			?>
	</div>
	<?php
	include "../includes/footer.php"
	?>
</body>
</html>