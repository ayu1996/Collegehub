<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="utf-8">
<link href="indexdes.css" rel="stylesheet" type="text/css"><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college hub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





$sql1 = mysqli_query($conn, "SELECT * FROM college hub WHERE id='".$_POST['id']."'");


$dynamicList = "";
while($row = mysqli_fetch_array($sql1))
{
	
		echo $dynamicList = '<table class="table table-hover" >
	

	<tr>
	<th>Fee(per year)</th>
	<td>'.$row[1].'</td>
	</tr>
	
	<tr>
	<th>Accredition</th>
	<td>'.$row[2].'</td>
	</tr>
	
	<tr>
	<th>Establishment year</th>
	<td>'.$row[3].'</td>
	</tr>
	
	<tr>
	<th>Placement(Frequenty Visited companies)</th>
<td>'.$row[4].'</td>
	<tr>
	
	<tr>
	<th>Infrastructure</th>
	<td>'.$row[5].'</td>
	<tr>
	
	<tr>
	<th>Location</th>
	<td>'.$row[6].'</td>
	<tr>
	
	<tr>
	<th>Academic Ratings</th>
<td>'.$row[7].'</td>
	<tr>
	
	<tr>
	<th>Recognition</th>
	<td>'.$row[8].'</td>
	<tr>
	
	<tr>
	<th>Faculty Ratings</th>
<td>'.$row[9].'</td>
	<tr>
		
	</table>';
}

	
?>



</body>
</html>
