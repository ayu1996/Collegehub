<!DOCTYPE html>
<html lang="en">
<head>
	<title>Write Review</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css/homed.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		 <form method="POST" action="submit_review.php" >
		 	<fieldset>
		 		
		        <p> <label for="name">
		            Enter Your Name:</label><br/>
		        	<input type="text" name="name" class="form-control" value="" required>
		        </p>
		        <p> <label for="email">
		        	Enter Your E-mail ID:</label><br/>
		        	<input type="email" name="email" class="form-control" value="" required>
		        </p>
		        <p>
		        <div class="form-group">
		        <label for="college">
		        Select Your College: </label> <br/>
		        <?php

		        	$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "college hub";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					$sql = "SELECT `college name` FROM `college`";
			$result = mysqli_query($conn,$sql);

			echo "<select name='college' value='Select' required>";
			while ($row = mysqli_fetch_array($result)) {
   		    echo "<option value='" . $row['college name'] ."'>" . $row['college name'] ."</option>";
			}
			echo "</select>";

					
				?>
				</div>
		        </p>
		 		<p>
			 		<label type="text" for="rating">Academic Rating:</label><br/>
			 		<div class="radio-inline"><label><input type="radio" name="rating" value="10" required/> 10 </label></div>
			 		<div class="radio-inline"><label><input type="radio" name="rating" value="9" /> 9 </label></div>
			 	    <div class="radio-inline"><label><input type="radio" name="rating" value="8" /> 8 </label></div>
			 	    <div class="radio-inline"><label><input type="radio" name="rating" value="7" /> 7 </label></div>
			 	    <div class="radio-inline"><label><input type="radio" name="rating" value="6" /> 6 </label></div>
                    <div class="radio-inline"><label><input type="radio" name="rating" value="5" /> 5 </label></div><div class="radio-inline"><label><input type="radio" name="rating" value="4" /> 4 </label></div><div class="radio-inline"><label><input type="radio" name="rating" value="3" /> 3 </label></div><div class="radio-inline"><label><input type="radio" name="rating" value="2" /> 2 </label></div><div class="radio-inline"><label><input type="radio" name="rating" value="1" /> 1 </label></div>
		 		</p>
			    <p>
		    		<label type="text" for="review" >Review:</label><br/><textarea name="review" rows="8" cols="40" class="form-control" required></textarea>
		    	</p>
		    	<p>
		    		<input type="submit" class="form-control" value="Submit Review" style="color:white;background-color:blue;">
		    	</p>
		 	</fieldset>
		 </form>
		 </div>
		 <div class="col-md-3"></div>
	</div>
</div> 
</body>
</html>