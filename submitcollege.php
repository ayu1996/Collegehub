<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college hub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$collegename = $_POST['collegename'];
$fee = $_POST['fee'];
$accredition =  $_POST['acc'];
$establishmentyear =  $_POST['est'];
$placement =  $_POST['placement'];
$infrastructure =  $_POST['infra'];
$location =  $_POST['loc'];
$academicratings =  $_POST['acr'];
$collegerecognition =  $_POST['colrec'];
$facultyratings =  $_POST['facr'];

$sql = "INSERT INTO college (`college name`, fee, accredition, `establishment year`, placement, infrastructure, location, `academic ratings`, recognition, `faculty ratings`)
VALUES ( '$collegename','$fee','$accredition','$establishmentyear','$placement','$infrastructure','$location','$academicratings', '$collegerecognition', '$facultyratings')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 