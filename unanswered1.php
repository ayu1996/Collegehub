<?php
	   include "iframe.php";
 $connect=mysql_connect("localhost","root","") or die("Connection Error".mysql_error());
mysql_select_db('college hub');

	$id=$_GET['id'];
	$ques=$_GET['ques'];

$qry="select *from ques where count = 0";
$qry1=mysql_query($qry) or die ("query error".mysql_error());
while($row=mysql_fetch_array($qry1))
	{
		
		echo"<div class='well'>";
		 
		echo "<b>".$row[1]."</b>";
		
	
		if($row[0]!=$id)
		{  ?>
		<form action="unanswered1.php" method="get">
		<input type="hidden" name="id" value="<?php echo $row[0]?>">
		<input type="hidden" name="ques" value="<?php echo $row[1]?>">
		<input type="hidden" name="page" value="1">
		 <button  type="submit"   class="btn btn-info "  style="float:right;" >Answer this!</button>
       </form>
	    	
		<?php }
		else
		{ ?>
  
    <form action="insert_ans.php">
	<div class="form-group">
	<label for="ans"></label>
    <input type="text" class="form-control" id="ans" name="ans"><br>
	<label for="id"></label>
   <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>" >
   <input type="hidden" name="page" value="1">
    <button type="submit" class="btn btn-primary btn-success">Submit</button>
	<button type="submit" class="btn btn-primary btn-warning" name="cancel">Cancel</button>
	</form>	</div>  
        
        <?php } ?>
		<br></div>
		<?php
	}?> 
