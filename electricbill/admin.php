<html>
<head>
	
	<style>
		.colo{
	background: linear-gradient(57deg, #00c6a7, #1e4d92);
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
	margin:0px;
}
table,th,td{
	border:3px solid black;
	width:100%;
	padding:20px;
    margin:20px;
    border-collapse: collapse;

}

.search{
	background: green;
	color:white;
}
  .button1{
  	background-color: red;
  	border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
   
    cursor: pointer;
  }
	</style>

</head>
<body>
	

  	<button  class ='button1' onclick="location.href='login.html'">Logout</button>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","test");
$result = "SELECT * FROM admin WHERE email='$email' AND password='$password' ";
$query = mysqli_query($con,$result);
$row = mysqli_fetch_array($query);
if($row['email'] == $email && $row['password'] == $password)

{?>
		<form  method="POST"  action ="" >
		<center>
			<h1>Admin Bill Generation</h1><br>
		<input type='text' name='consumerno'>
		<input type='submit' class='search' name='search' value='search'>
	</center>
	</form>
	
		<?php 
		
		$connection = mysqli_connect("localhost","root","","test");
		if(isset($_POST['search']))
		{
			$consumerno = $_POST['consumerno'];
			$_SESSION['consumerno'] = $_POST['consumerno'];
			$query1 ="SELECT * from login WHERE consumerno='$consumerno' ";
			$query_run = mysqli_query($connection,$query1);
			if(mysqli_num_rows($query_run)>0)
            {
            	

			while($row = mysqli_fetch_array($query_run))
			{

				?><br><br>
				<center><table style="border:1px solid black;width:800px;">
				<tr>
					<th>consumer.no</th>
			        <th>name</th>
			        <th>BillAmount</th>
			        <th>DueDate</th>
			        <th>Address</th>
			        <th>Email</th>
			        <th>UnitsConsumed</th>
			        <th>Status</th>
			        <th>Select</th></tr>
			        <tr>
					<td><?php echo $row['consumerno'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['billamount'];?></td>
					<td><?php echo $row['duedate'];?></td>
					<td><?php echo $row['address'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['unitsconsumed'];?></td>
					<td><?php echo $row['status'];?></td>
					<td><a href="update.php?a=<?php echo $row['consumerno'];?>">Update</a></td>
				</tr></table>
			</center>
	    <?php
            }
            }
        }
    }
	?>

</body></html>