
<html>
<head>
<title>Create New User</title>
<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:#b0aff1;">
<div style="width: 50%; margin-top: 40px; margin-left:auto;margin-right:auto;height:439px;">
<!-- <h4><a href="index.php" style="margin-right:5px;margin-top:-16;border-radius:2px;color:#fff;font-size:20px;border:2px solid white;background-color:ghostwhite;color:darkblue;float:right;padding:14px;width:163px;text-align:center;" >BACK</a></h4> -->

<h4 style="font-size:30px;height:35px;text-align:center;margin-top:80px;color: rgba(44,44,175,0.7411764705882353);" >Insert User Details</h4>

<form method="post" action="newuser.php" >
<table style="margin-left:auto;margin-right:auto;">
<!--<tr>
<th class="tableHead">Id</th>
<td><input type="number" name="id" class="inputStyle" placeholder="Enter your ID" required /></td>
</tr>
-->

<tr>
<th class="tableHead" style="color: rgba(44,44,175,0.7411764705882353); ">Name</th>
<td><input type="text" name="name" class="inputStyle" placeholder="Enter Your Name" required /></td>
</tr>

<tr>
<th class="tableHead" style="color: rgba(44,44,175,0.7411764705882353); ">Email</th>
<td><input type="email" name="email" class="inputStyle" placeholder="Enter Your Email" required /></td>
</tr>


<tr>
<th class="tableHead" style="color: rgba(44,44,175,0.7411764705882353); ">Credits</th>
<td><input type="number" name="std" class="inputStyle" placeholder="Enter Your Credits" required /></td>
</tr>


<tr>
<td colspan="2" align="center" style="padding-left: 45px;"><input type="submit" name="submit" value="Submit" style="color: rgba(44,44,175,0.7411764705882353); " class="createUserBtn ">
<button onclick="document.location.href='index.php'" style="color: rgba(44,44,175,0.7411764705882353); " class="createUserBtn ">Back</button></td>
</table>
</form>
</body>
</html>
</div>
<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	//$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$credits=$_POST['std'];
	$id=rand(1,1000000000);
	
	$query="insert into user_deatil(id,user,email,credits) values('$id','$name','$email','$credits')";
	$run=mysqli_query($con,$query);
	echo $run;
	if($run==true)
	{
	
		
?>
		
<script>
confirm('Data inserted Successfully');
</script>
<?php
	}


}
?>





