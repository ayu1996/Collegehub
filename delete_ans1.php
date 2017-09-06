<div class="container">
<fieldset style="font-size=25px">
<legend><i>Select an answer</i></legend>
<?php
$id=$_GET['id'];
$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');
$qry="select *from ans where ques_id=".$id.";";
$qry1=mysql_query($qry);
echo"<form action='delete_ans2.php' method='post'>";
while($row=mysql_fetch_array($qry1))
{
	echo"<br><input type='radio' name='ans_id' value='".$row[0]."' checked>".$row[2];
}
?><br><br>
<input type="hidden" name="ques_id" value="<?php echo $id;?>">
<button type="submit" class="button btn-md btn-primary" name="button"><i>Delete</i></button>
</form></fieldset></div>
