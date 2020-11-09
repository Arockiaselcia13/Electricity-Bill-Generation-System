<html>
<head>
<style>
	*{
		margin:0;
		padding: 0;
	}
	.colo{
	
	padding:25px;
	color:white;
	border:1px solid white;
	border-style:outset;
	border-collapse: collapse;
	

}
h1{
	background: blue;
	padding:25px;
	color:white;
	margin:0;
	

}
table,th,td{
	border:2px solid black;
	width:400px;
	margin: 40px;
	margin-top:200px;
	padding:20px;
    color:black;
	text-align: center;
    border-collapse: collapse;
    background-image: url('electric.jpg');
}
</style>
</head>
<body>
<?php
$c = mysqli_connect("localhost","root","","test");
$consumerno = $_GET['a']; 
$r = "SELECT * FROM login WHERE consumerno='$consumerno' ";
$qry = mysqli_query($c,$r);
?>
<form action="" method="post">
	<center>
<table class='colo' border=1>
<?php while($row = mysqli_fetch_array($qry))
{
	?>
	<h1>Consumer Electric Bill Updation</h1>
	<tr><th>Consumerno</th>
	<th>BillAmount</th>
    <th>DueDate</th>
    <th>Unitsconsumed</th>
    <th>Status</th>
    <th>Select</th></tr>
	<tr><td><input type="show" name='consumerno' value="<?php echo $row['consumerno'];?> "></td>
	<td><input type="text" name='billamount' value="<?php echo $row['billamount'];?>"></td>
	<td><input type="text" name='duedate' value='<?php echo $row['duedate'];?>'></td>
	<td><input type="text" name='unitsconsumed' value='<?php echo $row['unitsconsumed'];?>'></td>
	<td><input type="text" name='status' value='<?php echo $row['status'];?>'></td>
	<td><input type='submit' name='submit' value='Update'></td></tr>
	
<?php
}?>
</center></table></form>
<?php
if(isset($_POST['submit']))
{
	$billamount = $_POST['billamount'];
	$duedate = $_POST['duedate'];
	$unitsconsumed = $_POST['unitsconsumed'];
	$status = $_POST['status'];
	$consumerno = $_POST['consumerno'];
	$con = mysqli_connect("localhost","root","","test");
	$up = "UPDATE login SET billamount='$billamount' , duedate='$duedate' , unitsconsumed='$unitsconsumed',status='$status' WHERE consumerno = '$consumerno' ";
	if($con->query($up))
	echo "<script>window.location.href='admin.php'</script>";
}
?>
</body></html>