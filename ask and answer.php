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


<div class="container">
<br><br><br>
  <div class="jumbotron">
    <h3>Ask a question</h3><h4>(0-50 characters)</h4>      
    <form name="form1" action="Ques.php">
	<div class="form-group">
	<label for="question"></label>
    <input type="text" class="form-control" id="ques" name="ques"><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </div>
   <div class="row">
    <div class="col-sm-3 col-md-9" >
       
	   <iframe src="iframe.php" style="border:none;" height="1500" width="800"></iframe>
	    
		</div>
    <div class="col-sm-9 col-md-3">
       <iframe src="info.php" style="border:none;" height="1500"></iframe>
    </div>
  </div> 
</div>

</body>
</html>
