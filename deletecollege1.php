<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "college hub";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$id=$_POST['id'];
	
	$query="DELETE FROM college WHERE id='$id'";
	$res=mysqli_query($conn,$query);
?>