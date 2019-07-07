<?php
	$server="localhost";
	$username="Yogesh";
	$password="";
	$dbname="videoblog";

	$conn=mysqli_connect($server,$username,$password,$dbname)  or die ("<script language='javascript'>alert('Unable to connect to database')</script>");

?>