<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "college hub";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$id=($_POST["id"]);
	$type=($_POST["type"]);
	
	if(isset($_COOKIE['vote'."_".$id]))
		echo 0;
	else{
	    if($type=='yes'){
        	$fieldName='up_votes';
	    }elseif($type=='no'){
			$fieldName='down_votes';
	    }else{
	       die();
	    }
	    $query="update  reviews set $fieldName=$fieldName+1 where review_id='$id'";
	    $res=mysqli_query($conn,$query);
	    $expire=time()+60*60*24*365;
	    setcookie("vote"."_".$id, "vote"."_".$id, $expire);
	    $sql="SELECT * FROM reviews WHERE review_id=".$id;
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		echo 1;
	    echo "<div class='well'><div class ='bg-info div1'><b><br><h5 style=text-align:'center';><strong>".$row['college_name']." </strong></b><br/></h5><br>
						   		      ".$row['review']." <br><br> <strong>User rating :</strong> '".$row['rating']."' &nbsp; &nbsp; &nbsp; <strong>Uploaded On:</strong> '".$row['review_date']."'<br/> <strong>Upvotes:</strong>".$row['up_votes']." &nbsp; &nbsp; &nbsp; <strong>Downvotes:</strong> ".$row['down_votes']."<br/>";
	   		echo"          
	                            <br> &nbsp; &nbsp; &nbsp; <i>Is This Review Helpful? </i>&nbsp; &nbsp; &nbsp;
	                         	<a href='javascript:;'  onclick='vote_up_down(".$row['review_id'].",`yes`);' id='".$row['review_id']."'><i>Yes</a>
	                         	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	              				<a href='javascript:;'  onclick='vote_up_down(".$row['review_id'].",`no`);' id='".$row['review_id']."'>No</a></i>
            				</div></div>";

		}

		
?>

