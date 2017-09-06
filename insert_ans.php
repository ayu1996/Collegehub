<?php
$page=$_GET['page'];
if(isset($_GET['cancel']))
{
	if($page == 0)
	include "answered.php";
else if($page==1)
	include "unanswered.php";
else include "most_answered.php";
}
else if(isset($_GET['ans']))
{
$id=$_GET['id'];
$ans=$_GET['ans'];
$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');
$qry="insert into ans (answer,ques_id) values ('".$ans."',".$id.");";
$qry1=mysql_query($qry) or die ("query error".mysql_error());
$qry2=" update ques set count=count+1 where ques_id=".$id.";";
$qry3=mysql_query($qry2) or die ("query error".mysql_error());

if($page == 0)
	include "answered.php";
else if($page==1)
	include "unanswered.php";
else include "most_answered.php";
}
?>

