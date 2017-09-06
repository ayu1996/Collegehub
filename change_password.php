<?php
include "navadmin.html";
include "changepassword1.php";

$connect=mysql_connect("localhost","root","");
mysql_select_db('college hub');

if(isset($_POST['submit']))
{
$old=$_POST['old'];
$new1=$_POST['new1'];
$new2=$_POST['new2'];
$ctr = 2;
$qry="select *from admin;";
$qry1=mysql_query($qry);
$row=mysql_fetch_array($qry1) or die("An error occured while updating you password");
$pass=$row[0];

if($old==$pass)
{
	if($new1==$new2)
	{
		$qry="update admin set password='".$new1."';";
		$qry1=mysql_query($qry);
		echo "<br><br><center>password updated successfully</center>";
	}
	else 
	{
		echo "entered passwords donot match";
	}
}else echo "old password entered is incorrect";
}
?> 
  