 
<?php
//this is used to enter questions in the database.
$ques=$_GET['ques'];
$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');
$qry="insert into ques (question, count) values('".$ques."',0);";
$qry1=mysql_query($qry) or die ("query error".mysql_error());
?>
<div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Your question was submitted!
  </div>
<?php include 'ask and answer.php';?>