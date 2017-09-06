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
$result2 = mysqli_query($connect, $query);

?>
<!doctype html>
<html lang="en">
<head>
<title>The responsive Bootstrap grid</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="file:///C|/xamp/htdocs/form/jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="bootstrap-theme.min.css">
  <link href="css/homed.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/alice:n4:default.js" type="text/javascript"></script>

</head>
<body>

 
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
    <div class="row">
    <div class="col-lg-3">
    <a href="home.html">
    <img src="images/CB LOGO AND NAME 1.png" width="480" height="100" alt="" />
    </a> 
    </div>
    <div class="col-lg-2">
    </div>
    

    
    <div class="col-lg-2 k " >
    <a href="comparecollege.php">
    <button class="btn btn-primary navbar-btn button1">Compare Colleges</button>
    
    </a>
    </div>
    
    
   <div class="col-lg-2 k ">
   <a href="ask and answer.php">
    <button class="btn btn-primary navbar-btn button1 "> Ask and Answer Q</button>
    </a>
    </div>
    
    <div class="col-lg-2 k dropdown">
   
    <button class="btn btn-primary navbar-btn button1 dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">College Reviews
    
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="read_review.php">Read Reviews</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="write_review.php">Write Reviews</a></li>
      </ul>
    </div>
    <div class="col-lg-1 k dropdown">
    <a href="login.php">
    <button  class="btn btn-primary navbar-btn button1 ">Login as Admin</button>
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
<div class="container-fluid">
   <div class="row">
   
   <div class="col-sm-5">
    <h3><p class="text-center h">Select First college:<p></h3>
    </div>
    
    <div class="col-sm-2">
    <h3><p class="text-center h"><strong>College comparison</strong></p></h3>
    </div>
    
    <div class="col-sm-5">      
    <h3><p class="text-center h">Select Second college : </p><h3>
    </div>
    
    </div>
    <br>
    
 <div class="row">
    
    <div class="col-sm-5">
     <select name="choice1" id="choice1" class="form-control">
      <option value="" disabled selected>Select 1st College</option>
    <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[10];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>
      </select>
</div>

<div class="col-sm-2">
  <img src="images/vs.jpg" class="center-block" width="100" height="80" alt=""/> </div>

<div class="col-sm-5">
<select name="choice2" id="choice2" class="form-control">
<option value="" disabled selected>Select 2nd College</option>
        <?php while($row2 = mysqli_fetch_array($result2)):;?>

        <option value="<?php echo $row2[10];?>"><?php echo $row2[0];?></option>

            <?php endwhile;?>

      </select>
    </div>
        </div>

<div class="row">
 
      <div class="col-sm-5" id="display_area">
</div>
<div class="col-sm-2">
</div>
  
<div class="col-sm-5" id="display_area1">
</div>
</div>
  
</div>
</body>
</html>

<script type="text/javascript" src="/js/jq2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
<!-- $(window).load(function() can also be used -->
$(document).ready(function(){
	var id,id1;
	<!-- The change event occurs when the value of an element has been changed (only works on <input>, <textarea> and <select> elements).The change() method triggers the change event, or attaches a function to run when a change event occurs.-->
      $('#choice1').change(function(){  
           id = $(this).find(":selected").val();
		   if(id==id1){
			   alert("Please Select a Different College.");
		   }
		   else{
           $.ajax({  
                url:"ajax.php",  
                method:"POST",  
                data: {id:id},  
                success:function(data){  
                     $('#display_area').html(data);  
                }  
				
           });  
		   }
      }); 
	  
	   $('#choice2').change(function(){  
           id1 = $(this).find(":selected").val();
	       if(id==id1){
			   alert("Please Select a Different College.");
		   }
		   else{
           $.ajax({  
                url:"ajax1.php",  
                method:"POST",  
                data: {id:id1},  
                success:function(data){  
                     $('#display_area1').html(data);  
                }  
				
           });
		   }
		
      }); 
	   
 });


</script>

