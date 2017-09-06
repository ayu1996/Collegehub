
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

<div class="container">


	
    <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		 <form method="POST" action="submitcollege.php" >
		 	<fieldset>
		 		
		        <p> <label for="name">
		            College name:</label><br/>
		        	<input type="text" name="collegename" class="form-control" value="" required>
		        </p>
                <p> <label for="fee">
		            Fee:</label><br/>
		        	<input type="text" name="fee" class="form-control" value="" required>
		        </p>
		        <p> <label for="name">
		            Accredition:</label><br/>
		        	<input type="text" name="acc" class="form-control" value="" required>
		        </p>
                <p> <label for="name">
		            Establishment year:</label><br/>
		        	<input type="text" name="est" class="form-control" value="" required>
		        </p>
                <p> <label for="name">
		            Colleges that visit for placement:</label><br/>
		        	<input type="text" name="placement" class="form-control" value="" required>
		        </p>
                <p> <label for="name">
		            Infrastructure details:</label><br/>
		        	<input type="text" name="infra" class="form-control" value="" required>
		        </p>
                <p> <label for="name">
		            Location:</label><br/>
		        	<input type="text" name="loc" class="form-control" value="" required>
		        </p>
                <p> <label for="name">
		            Academic ratings:</label><br/>
		        	<input type="text" name="acr" class="form-control" value="" required>
		        </p>
                <p> <label for="name">
		            College recognition:</label><br/>
		        	<input type="text" name="colrec" class="form-control" value="" required>
		        </p>
                <p> <label for="name">
		            Faculty ratings:</label><br/>
		        	<input type="text" name="facr" class="form-control" value="" required>
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
