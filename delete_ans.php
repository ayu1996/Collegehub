<?php include("navadmin.html")?>
<head>
<style>
h4
{
	background-color:rgba(230,230,230,0.5);
	padding:10px;
}
</style>
<script>
function showAnswer(ques)
{
	 
   var xmlhttp=new XMLHttpRequest();
   
  xmlhttp.onreadystatechange=function() {
	  
    if (this.readyState==4 && this.status==200) {
      document.getElementById("show_answers").innerHTML=this.responseText;
  }
  }
  xmlhttp.open("GET","delete_ans1.php?id="+ques,true);
  xmlhttp.send();
}
</script>
</head>
<?php
$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');
$qry="select *from ques";
$qry1=mysql_query($qry);

?>



<br><br><br><br><br><br><br><br><br><center>
<?php 
echo"<select style='padding:10px' name='sel' onchange='showAnswer(this.value)'>";
while($row=mysql_fetch_array($qry1))
{
	if($row[2]!=0)
	echo"<option value='".$row[0]."'>".$row[1]."</option>";
}
echo"</select>";
?>
<br><br><br></center>
<div id="show_answers">
</div>


	 