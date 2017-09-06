<!DOCTYPE html>
<html>
<head>
	<title>Submit Review</title>
</head>
<body>
   <?php
	
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  $name = test_input($_POST["name"]);
		  $email = test_input($_POST["email"]);
		  $college = test_input($_POST["college"]);
		  $rating = test_input($_POST["rating"]);
		  $review = test_input($_POST["review"]);
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "college hub";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sqlid= "SELECT `id` FROM `college` WHERE `college name`= '".$college."' ";
		$resultid = mysqli_query($conn,$sqlid);
		$id = mysqli_fetch_array($resultid);
		$sql= "INSERT INTO reviews (college_id,college_name, rating, review, reviewer_name,reviewer_email) 
			VALUES (
			'".$id['id']."',
			'".$college."',
			'".$rating."',
			'".$review."',
			'".$name."',
			'".$email."'
			)";
		if($conn->query($sql)==TRUE){
			echo"<center><p><h2>THANKYOU for your review.</h2></p></center>";
		}else {
        echo "<center><p><h2>Error submitting the review. Please Try Again.</h2></p></center>";
        }
        $readsql="SELECT AVG(rating) as avg,college_id FROM reviews GROUP BY college_id";
        $readresult= mysqli_query($conn,$readsql);
        $count=0;
        while($row= mysqli_fetch_array($readresult)){
        	$updatesql="UPDATE `college` SET `academic ratings`= '" . $row['avg'] . "' WHERE id='".$row['college_id']."' ";
        	if($conn->query($updatesql)==TRUE){
        		$count=$count+1;
				$flag=1;
        	}
			else
			{$flag=0;
			break;
			}
        }
        if($flag==1){
        	echo"<center><p><h2>Response Recorded Successfully.</h2></p></center>";
        }else{
        	echo"<center><p><h2>Response not recorded Successfully.Please Try Again.</h2></p></center>";
        }

        echo"</br></br><a href='home.html'>Go to home page</a>";
	?>
</body>
</html>