


<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Sender</title>
<style>
</style>
</head>
<body style="background-color:#b0aff1;">
<div style="width: 80%; margin-left:auto;margin-right:auto;margin-top:40px;">
<!-- <h4><a href="../logout.php" style="margin-right:5px;margin-top:-16;border-radius:2px;color:#fff;font-size:20px;border:2px solid white;background-color:black;color:aliceblue;float:right;padding:14px;width:163px;text-align:center;" >BACK</a></h4> -->
<button onclick="document.location.href='index.php'" class="createUserBtn" style="float: right;color: rgba(44,44,175,0.7411764705882353);">Back</button>
<h4 style="font-size:29px;color:rgba(44,44,175,0.7411764705882353);height:35px;text-align:center;margin-top:80px;">Choose Sender from following Users</h4>


<table align="center" width="80%" style="margin-top:10px;" >
<tr style="background-color:#fff;color:rgba(44,44,175,0.7411764705882353);">
<th>Id</th>

<th>Name</th>               
<th>Email</th>
<th>Credits</th>
<th>Choose Sender</th>
</tr>

<?php

	include('dbcon.php');
	$query="select * from user_deatil";
	$run=mysqli_query($con,$query);

	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='5' style='text-align:center;font-size:35px;padding-top:20px;'>No User found</td></tr>";
	}

	else
	{
		
		while($data=mysqli_fetch_assoc($run))
		{
			
			?>


<tr align="center" >
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['user']; ?></td>
<td><?php echo $data['email']; ?></td>

<td><?php echo $data['credits']; ?></td>
<td><a href="senderreceiver.php?id=<?php echo $data['id']; ?>">Select</a></td>
</tr>


		<?php
	}
	}
?>

</table>




<h4 style="font-size:29px;color:rgba(44,44,175,0.7411764705882353);height:35px;text-align:center;margin-top:80px;">Credits History</h4>


<table align="center" width="80%" style="margin-top:10px;" >
<tr style="background-color:#fff;color:rgba(44,44,175,0.7411764705882353);">
<th>Transaction ID</th>

<th>Sender</th>
<th>Receiver</th>
<th>Credits</th>

</tr>

<?php

	include('dbcon.php');
	$query="select * from credits";
	$run=mysqli_query($con,$query);

	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='5' style='text-align:center;font-size:35px;padding-top:20px;'>No Credits found</td></tr>";
	}

	else
	{
		
		while($data=mysqli_fetch_assoc($run))
		{
			
			?>


<tr align="center" >
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['sender']; ?></td>
<td><?php echo $data['receiver']; ?></td>
<td><?php echo $data['transfer']; ?></td>

</tr>


		<?php
	}
	}
?>

</table>