<head>
<style>
h1
{
	background-color:rgba(230,230,230,0.5);
	padding:10px;
}
table {
	border-spacing: 5px;
	border-collapse: collapse;
	margin-left: 500px;
}
td
{
	padding:50px;
	font-size:25px;
	text-align:center;
	height:90px;
	
}
tr:hover{background-color:#f5f5f5;}
</style>
</head>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table>
<tr>&nbsp &nbsp &nbsp <td colspan='2' style="background-color:rgba(128,128,128,0.4);">
 <center><button type="button"class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal">Change Password</button></center>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
	
	<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change your password</h4>
        </div>
        <div class="modal-body">
          <form action="change_password.php" method="POST" style="background-color:lightblue">
		 <br> old password <input type="password" name="old"><br><br>
		  new password <input type="password" name="new1"><br><br>
		  new password <input type="password" name="new2"><br><br>
		  
		 </div>
        <div class="modal-footer">
          <input type ="submit" name="submit"></input>
        </div>
		</form>
      </div>

</td></tr>
</table>
</div>
</center>