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
  <link href="css/homed.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
  <div class="container-fluid">
    <div class="navbar-header ">
   <div class="row">
    <div class="col-lg-3">
    <a href="home3.html">
    <img src="CB LOGO AND NAME 1.png" height="100" alt="" />
    </a> 
    </div>
    
    <div class="col-lg-2">
    </div>
    

    
    <div class="col-lg-2 k " >
    <a href="index1.php">
    <button class="btn btn-primary navbar-btn button1">Compare Colleges</button>
    
    </a>
    </div>
    
    
   <div class="col-lg-2 k ">
   <a href="myModule.php">
    <button width="100%" class="btn btn-primary navbar-btn button1 "> Ask and Answer Q</button>
    </a>
    </div>
    
    <div class="col-lg-2 k dropdown">
   
    <button width="100%" class="btn btn-primary navbar-btn button1 dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">College Reviews
    
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="read6.php">Read Reviews</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="write_review1.php">Write Reviews</a></li>
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

	<center><br><br><br><br><br><br><div class ="container">
	
		<?php 	
		$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');
		$qry="SELECT *FROM reviews ORDER BY review_date DESC";
		$qry1=mysql_query($qry) or die ("query error".mysql_error());
while($row=mysql_fetch_array($qry1))
	{
			echo"<div  id='content".$row['review_id']."'>";
						   		echo "<div class='well'><div class ='bg-info div1'><b><br><h5 style=text-align:'center';><strong>".$row['college_name']." </strong></b><br/></h5><br>
						   		      ".$row['review']." <br><br> <strong>User rating :</strong> '".$row['rating']."' &nbsp; &nbsp; &nbsp; <strong>Uploaded On:</strong> '".$row['review_date']."'<br/> <strong>Upvotes:</strong>".$row['up_votes']." &nbsp; &nbsp; &nbsp; <strong>Downvotes:</strong> ".$row['down_votes']."<br/>";
	   		echo"          
	                            <br> &nbsp; &nbsp; &nbsp; <i>Is This Review Helpful? </i>&nbsp; &nbsp; &nbsp;
	                         	<a href='javascript:;'  onclick='vote_up_down(".$row['review_id'].",`yes`);' id='".$row['review_id']."'><i>Yes</a>
	                         	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	              				<a href='javascript:;'  onclick='vote_up_down(".$row['review_id'].",`no`);' id='".$row['review_id']."'>No</a></i>
            				</div>
							</div>
     			 </div>";
			}
		?></center></div>
	
	<script type="text/javascript">
		function vote_up_down(id,type){
			$.ajax({
				type:'POST',
				url:'review_rating.php',
				data:'id='+id+'&type='+type,
				success:function(msg){
					if(msg[0]==0){
						alert('You have alredy voted.');
					}else{
						$("#content"+id).html(msg.slice(1,));
					}
				}
			});
		}
	</script>

</body>
