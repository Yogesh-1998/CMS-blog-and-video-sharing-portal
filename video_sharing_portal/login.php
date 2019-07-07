<!DOCTYPE html>
<html>
<head>
	<title>Get Logged In</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body>
	<?php include "../includes/nav.php"	?>
	<?php include "includes/video_nav.php"	?>
	<div class="container-fluid" style="background-image: url('../images/registerform.jpg');background-size: 100%;height: 100vh">

		<form class="register_form col-md-6">
			<div class="page-header">
				<h2>Login</h2>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control">
			</div>
			
			<div class="form-group">
				<button class="btn btn-primary btn-block">Login</button>
			</div>
		</form>
	</div>
	<?php include '../includes/footer.php'?>
</body>
</html>