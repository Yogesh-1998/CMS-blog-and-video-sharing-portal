<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Advance CMS2</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
</head>
<body>
	<?php
		include "../includes/nav.php";
	?>
	<header>
		<div class="text-center">
			<h1>The CMS Blog</h1>
			<p>A simple blog that make life easier</p>
		</div>
	</header>
 
	<div class="container-fluid">
		<?php
			include "includes/blog-nav.php";
		?>
		<div class="col-md-8">

 			<?php
 				// $select_db=mysqli_select_db($conn,$dbname); 
				$sql = "SELECT * FROM blog_data ORDER BY blog_id desc LIMIT 3" ;
				$run = mysqli_query($conn,$sql);
				// if($run == FALSE) { 
    // 				die(mysqli_error($conn)); // TODO: better error handling
				// }
				while($rows=mysqli_fetch_assoc($run)){	
					$blogtitle=ucwords($rows['blog_title']);
					$blogd=substr($rows['blog_description'],0,390);
					$blog_category=$rows['blog_category'];
					$sql_query="SELECT * FROM categories WHERE cat_id='$blog_category'";
					$cat_run=mysqli_query($conn,$sql_query);
					while($cat_rows=mysqli_fetch_assoc($cat_run)){
						$category=ucwords($cat_rows['cat_data']);
						$cat_id=$cat_rows['cat_id'];
					}
					?>
					<div class="post">
						<?php echo "<h1><a href='post.php?post_id=$rows[blog_id]' class='post-title'> $blogtitle</a></h1>"; ?>
						<div class="meta small-text">
							<a href="menu.php?cat_id=<?php echo $cat_id?>"><?php echo $category ?></a> | 
							<a href="#"><?php echo $rows['blog_author'] ?></a> | <a href="#"><?php echo $rows['blog_date'] ?></a>
						</div>
						<p class="lead"><?php echo $blogd ?>...<a href="post.php?post_id=<?php echo $rows['blog_id']?>" class="cr">Continue Reading</a></p>

						<a class="label label-default">What is Technology</a>
						<a class="label label-default">Related Technology</a>
					</div>	
				<?php	}
			?>
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