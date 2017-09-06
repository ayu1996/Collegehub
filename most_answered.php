 <?php
include "iframe.php";
$connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');
$qry="select *from ques where count >0 order by count DESC limit 5";
$qry1=mysql_query($qry) or die ("query error".mysql_error());
while($row=mysql_fetch_array($qry1))
	{
		if($row[2]==1)
			$string=" view answer";
		else $string="view answers";
		 echo"<div class='well'>";
		echo "<b>".$row[1]."</b> ";
		?>
		<form method="get" action="view_ans.php" target="_blank">
	<input type="hidden" name="id" value="<?php echo $row[0]?>">
	<input type="hidden" name="page" value="2">
	<button type="submit" name="button" value="<?php echo $row[0];?>" onclick="view_ans()" class='btn btn-primary' style='float:right;'>
	<?php echo $string; ?> <span class='badge'><?php echo $row[2]; ?></span></button> 
	</form><br>
		<form action="most_answered1.php" method="get">
		<input type="hidden" name="id" value="<?php echo $row[0]?>">
		<input type="hidden" name="ques" value="<?php echo $row[1]?>">
		<input type="hidden" name="page" value="2">
		<button type='submit' name="ans" class='btn btn-info' style='float:right;'>Answer this!</button>
		</form>
	
		<br></div>
<?php
	}
?>
  
