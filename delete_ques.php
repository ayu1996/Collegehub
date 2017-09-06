
<!doctype html>
<html lang="en">

<head>
	<title>Write Review</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css/homed.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
h4
{
	background-color:rgba(230,230,230,0.5);
	padding:10px;
}
</style>


</head>


<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
   <div class="row">
    <div class="col-lg-3">
    <a href="admin.php">
    <img src="images/CB LOGO AND NAME 1.png" height="100" alt="" />
    </a> 
    </div>
    
    <div class="col-lg-2">
    </div>
    

    
   
    
    <div class="col-lg-2 k dropdown">
   
    <button width="100%" class="btn btn-primary navbar-btn button1 dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Add/Delete Colleges
    
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="addcollege.php">Add College</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="deletecollege.php">Delete college</a></li>
      </ul>
      
    </div>
    
    <div class="col-lg-2 k dropdown">
   
    <button width="100%" class="btn btn-primary navbar-btn button1 dropdown-toggle" type="button" id="menu2" data-toggle="dropdown">Delete  &nbsp &nbsp Q/A  &nbsp &nbsp
    
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="delete_ques.php">Delete Question</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="delete_ans.php">Delete Answer</a></li>
      </ul>
      
    </div>
    
    <div class="col-lg-2 k ">
   <a href="deletereview.php">
    <button width="100%" class="btn btn-primary navbar-btn button1 ">Delete reviews</button>
    </a>
    </div>
    
     <div class="col-lg-1 k dropdown">
     <a href="change_password.php">
    <button  class="btn btn-primary navbar-btn button1 ">Change password</button>
   </a>
   </div>
   </div>
  </div>
  </div>
  </nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');
		$qry="SELECT *FROM ques";
		$qry1=mysql_query($qry) or die ("query error".mysql_error());






while($row=mysql_fetch_array($qry1))
{
	
	echo "<div class ='well'>";
echo "<b>Question :".$row[1]." ?</b>";
if($row[2]==0)
	echo "<br>no Answers exist for this ques.";
else 
{ echo "<br> <i>Answers: </i>";
$qry2="select *from ans where ques_id=".$row[0].";";
$qry3=mysql_query($qry2);
while ($row1=mysql_fetch_array($qry3))
{
echo $row1[2];
echo "<br>";
}//end of while
}//end of else
	echo "<form action='delete_ques.php'><input type='hidden' name='id' value=".$row[0].">";
	echo" <button type='submit'   class='btn btn-info'  style='float:right;' name='del'>Delete</button></form>";
	echo "<br><br></div>";
	
}
?>
</div>
<?php 
if(isset($_GET['del']))
{
	$id=$_GET['id'];
	$qry4="delete from ques where ques_id=".$id.";";
	$qry6="delete from ans where ques_id=".$id.";";
	$qry7=mysql_query($qry6);
	$qry5=mysql_query($qry4) or die(mysql_error());
	
	echo '<script>window.location.href = "delete_ques.php";</script>';
}
?>
</html>
