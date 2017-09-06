<?php
$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');
if(isset($_POST['button']))
{
	$ans_id=$_POST['ans_id'];
	$ques_id=$_POST['ques_id'];
	$qry="delete from ans where ans_id=".$ans_id.";";
	$qry1=mysql_query($qry) or die(mysql_error());
	$qry="update ques set count= count -1 where ques_id=".$ques_id.";";
	$qry1=mysql_query($qry) or die(mysql_error());
	echo '<script>window.location.href = "delete_ans.php";</script>';
	
}?>