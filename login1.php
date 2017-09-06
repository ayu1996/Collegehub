<!DOCTYPE html>
<html lang="en">
<head>
	<title>Write Review</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="homed.css" rel="stylesheet" type="text/css">
	<link href="logincss.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
   <div class="row">
    <div class="col-lg-3">
    <a href="home2.html">
    <img src="CB LOGO AND NAME 1.png" height="100" alt="" />
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
            <form>
                 <h2 class="text-center">Login Administrator</h2>
                <br/>
                <br>
                
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                
                    </div>
                    <br/>
                   <div class="align-center">
                <button type="submit" class="btn btn-default" name="button" value="Submit">Login</button>
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
	
else 
{
echo '<script language="javascript">';
echo 'alert("Incorrect Password")';
echo '</script>';
}
?>
