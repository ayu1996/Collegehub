
<?php
// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "college hub";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
// mysql select query
$query = "SELECT * FROM `college`";

// for method 1

$result1 = mysqli_query($connect, $query);

?>
<!doctype html>
<html lang="en">
<html>
<head>
<title>The responsive Bootstrap grid</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link href="css/homed.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/js/jq2.js"></script>


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
<br><br><br><br><br><br><br><br><br><br>
<div class="container-fluid">
<h3><center>Select college:</center></h3>
<center>
<br>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" >
     <select name="choice1" id="choice1" class="form-control">
     
      <option value="" disabled selected>Select 1st College</option>
    <?php while($row1 = mysqli_fetch_array($result1)):;?>
<div id='content".$row1[10]."'>
            <option value="<?php echo $row1[10];?>"><?php echo $row1[0];?></option>
</div>
            <?php endwhile;?>
      </select>
      </div>
      <div class="col-md-4"></div>
      </div>
      <br>
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-sm-4" id="display_area">
</div>
<div class="col-md-4"></div>

</div>

  <input type='button'  value='DELETE' class='btn btn-primary' id="choice2"> 
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	
	  
	  $('#choice2').click(function(){ 
			$.ajax({
				method:"POST",
				url:"deletecollege1.php",
				data:'id='+id,
				success:function(){
					alert("College has been deleted");
					location.reload('true');
				}
			});
		
});
});
	  </script>
      