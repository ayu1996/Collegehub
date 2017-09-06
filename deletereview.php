
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
            				
							<div>
							<br>

	                            &nbsp; &nbsp; &nbsp; <i>Want to delete this review? </i>&nbsp; &nbsp;
								
	                         	<input type='button'  value='DELETE' class='btn btn-default' onclick='deletereview(".$row['review_id'].")'>
								
	                    </div>
						<br>
            				</div>
							</div>
     			 </div>";
			}
		?></center></div>
	
	<script type="text/javascript">
		function deletereview(id){
			$.ajax({
				type:'POST',
				url:'deletereview1.php',
				data:'id='+id,
				success:function(){
					alert("Review has been deleted");
					location.reload('true');
				}
			});
		}
	</script>

</body>
</html>
