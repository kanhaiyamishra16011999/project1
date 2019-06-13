<?php
ob_start();
if(isset($_POST['submit']))
{
ob_start();    
include('dbcon.php');
$credits=$_POST['std'];
$sid=$_GET['sid'];
$rid=$_GET['rid'];
$query1="select * from user_deatil where id='$sid'";
$run1=mysqli_query($con,$query1);
if(mysqli_num_rows($run1)>0)
{
$data=mysqli_fetch_assoc($run1);
$da=$data['credits'];
$da=$da-$credits;
$sn=$data['user'];
}
$query2="select * from user_deatil where id='$rid'";
$run2=mysqli_query($con,$query2);
if(mysqli_num_rows($run2)>0)
{
$dat=mysqli_fetch_assoc($run2);
$daa=$dat['credits'];
$daa=$daa+$credits;
$rn=$dat['user'];
}
$ii=rand(1,100000);
$query3="update user_deatil set credits='$da' where id='$sid'";
$query4="update user_deatil set credits='$daa' where id='$rid'";
$run3=mysqli_query($con,$query3);
$run4=mysqli_query($con,$query4);
$query="insert into credits(id,sender,receiver,transfer) values('$ii','$sn','$rn','$credits')";
$run=mysqli_query($con,$query);
header("Location:users.php");
}
ob_end_flush();
?>
<html> 
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:#b0aff1;">
<div style="width: 50%; margin-top: 40px; margin-left:auto;margin-right:auto;height:439px;">
<!-- <h4><a href="senderreceiver.php" style="margin-right:5px;margin-top:-16;border-radius:2px;color:#fff;font-size:20px;border:2px solid white;background-color:ghostwhite;color:darkblue;float:right;padding:14px;width:163px;text-align:center;" >BACK</a></h4> -->
<!--<button onclick="document.location.href='senderreceiver.php?sid="+<?echo $_GET['sid'];?>+"'" class="createUserBtn" style="float: right;color: rgba(44,44,175,0.7411764705882353);">Back</button>-->

<h4 style="font-size:30px;height:35px;text-align:center;margin-top:80px;color:rgba(44,44,175,0.7411764705882353)" >Enter Credits to Transfer</h4>

<form method="post" action="process.php?sid=<?php echo $_GET['sid']; ?>&rid=<?php echo $_GET['rid']; ?>" >
<table style="margin-left:auto;margin-right:auto;">
<tr>
<th class="tableHead" style="color: rgba(44,44,175,0.7411764705882353);" >Sender ID</th>
<td><input type="text" name="id"  value=<?php echo $_GET['sid']; ?> readonly /></td>
</tr>
<tr>
<th class="tableHead" style="color: rgba(44,44,175,0.7411764705882353);" >Receiver ID</th>
<td><input type="text" name="name" value=<?php echo $_GET['rid']; ?> readonly /></td>
</tr>
<tr>
<th class="tableHead" style="color: rgba(44,44,175,0.7411764705882353);">  Credits</th>
<td><input type="number" name="std" placeholder="Enter Your Credits" required /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" style="color: rgba(44,44,175,0.7411764705882353); " value="Submit" class="createUserBtn">
<!--<td colspan="2" align="center"><input type="submit" name="submit" value="Submit">-->
<!--<td><a href="transfer.php?sid=<?php// echo $_GET['sid']; ?>&rid=<?php //echo $_GET['rid']; ?>">Transfer</a></td>-->
</tr>
</table>
</form>
</div>
</body>
</html>