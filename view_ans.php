<?php include "everypageboot.html"?>
<?php

$id=$_GET['id'];
 
$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');

$qry="select *from ques where ques_id=".$id.";";
$qry1=mysql_query($qry) or die ("query error".mysql_error());
echo "<br><br><div class='container'><div class='jumbotron'>";
echo "<button type='button' class='btn btn-info'>Question</button><br><br>";

while($row=mysql_fetch_array($qry1))
	{
		echo $row[1]."<br><br>";
	}
	$qry="select *from ans where ques_id=".$id.";";
	echo"</div></div>";
$qry1=mysql_query($qry) or die ("query error".mysql_error());
echo "<div class='container'> ";
while($row=mysql_fetch_array($qry1))
	{
		echo $row[2]."<br><br>";
	}
  echo "</div>";
	?>
	