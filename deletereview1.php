<html lang="en">
<head>
<style>
h3{
	 
	padding:8px;
	font-size:28px;
	background-color:rgba(255,0,0,0.2);
}
.div1{
	text-align: left;	
	
}
</style>
	<title>Read Reviews</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="homed.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <body>
  

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "college hub";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$id=$_POST['id'];
	
	$query="DELETE FROM reviews WHERE review_id='$id'";
	$res=mysqli_query($conn,$query);
?>