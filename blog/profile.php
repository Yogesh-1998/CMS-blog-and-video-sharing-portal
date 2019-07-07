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
		<?php include "includes/blog-nav.php";	?>
		<div class="col-md-8">
				<?php
					$sql = "SELECT * FROM author";
					$run = mysqli_query($conn,$sql);
					while($rows=mysqli_fetch_assoc($run)){
						$author_name = ucwords($rows['author_first_name'].' '.$rows['author_last_name']);
						echo "
							<div class='page-header'>
								<h4>$author_name</h4>
							</div>
							<div class='col-md-6'>
								<img src='../images/$rows[author_image]' class='img-responsive img-thumbnail'>
							</div>
							<div class='col-md-6'>
								<table class='table table-stripped table-bordered'>
									<tbody>
										<tr>
											<th>Name</th>
											<td>$author_name</td>
										</tr>
										<tr>
											<th>Email</th>
											<td>$rows[author_email]</td>
										</tr>
										<tr>
											<th>Contact No.</th>
											<td>$rows[author_cell]</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class='col-md-12'>
								<p style='margin=20px'>$rows[author_about]</p>
							</div>

						";
					}
				 ?>
			</div>
		<?php include "includes/blog-sidebar.php"; ?>
	</div>
	<?php include "../includes/footer.php"; ?>
</body>
</html>