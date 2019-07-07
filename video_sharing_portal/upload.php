<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
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
				<h2>Upload</h2>
			</div>
			<div class="form-group">
				<label>Select File</label>
				<input type="file" class="form-control">
			</div>
			<div class="form-group">
				<label>Title</label>
				<input type="password" class="form-control">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Select Playlist</label>
				<select class="form-control">
					<option selected>Select a playlist</option>
					<option>Playlist 1</option>
					<option>Playlist 2</option>
				</select>
			</div>
			<div class="form-group">
				<label>Status</label>
				<select class="form-control">
					<option selected>Public</option>
					<option>Unlisted</option>
					<option>Private</option>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-block">Login</button>
			</div>
		</form>
	</div>
	<?php include '../includes/footer.php'?>
</body>
</html>