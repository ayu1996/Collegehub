<!doctype html>
<html lang="en">
<head>
<title>The responsive Bootstrap grid</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="bootstrap-theme.min.css">
  <link href="css/homed.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/alice:n4:default.js" type="text/javascript"></script>

</head>
<link href="css/logincss.css" rel="stylesheet" type="text/css">
<link href="css/homed.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
   <div class="row">
    <div class="col-lg-3">
    <a href="home.html">
    <img src="images/CB LOGO AND NAME 1.png" height="100" alt="" />
    </a> 
    </div>
    
    <div class="col-lg-9">
    </div>
    </div>
    </div>
    </div>
    </nav>

<div class="container">
<div class="row">
        <div class="form_bg">

<h2 class="text-center">Login Administrator</h2>
<br>
<br>

<form action="login.php" method="post">
<input type="password" class="form-control" name="password" placeholder="Password"><br><br>
<div class="align-center">
<button type="submit" class="btn btn-primary" name="button" value="Submit">Login</button>
</div>
</form>


</div>
</div>
</div>
</body>
<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "college hub";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
 if(isset($_POST['button']))
{
$pass=$_POST['password'];
$qry ="select *from admin";
$qry1=mysqli_query( $conn,$qry);
$row=mysqli_fetch_array($qry1);
if($row[0]==$pass)
{
	echo '<script>window.location.href = "admin.php";</script>';
}	
else echo '<script language="javascript">';
echo 'alert("Incorrect password")';
echo '</script>';
}
?>