<html>
	<head>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style>
			table,th,td{
	           border:3px solid white;
	           width:1000px;
	           border-collapse: collapse;
	           
            }
            td{
	
               padding-left:30px;
               border-collapse: collapse;
            }
            .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
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
  margin: 2px 2px;
  cursor: pointer;
  }
  body{
  	height:100%;
	width:100%;
	color:#fff;
	background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(electric1.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}
</style>
  
</head>

<body>
	<div class="topright">

  	<button  class ='button1' onclick="location.href='login.html'">Logout</button></div>
<?php
session_start();
$con=mysqli_connect("localhost","root","","test");
$consumerno=$_POST['consumerno'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM login WHERE consumerno='$consumerno' AND email='$email' AND password='$password' ";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count>0){
	while($row = mysqli_fetch_array($result))
			{ ?>  <h1><center>Electricity Bill Payment</center></h1><br>
				<center>
				<h3>Consumer.No:<?php echo $row['consumerno'];?><br><br>
				Name:<?php echo $row['name'];?><br><br>
				Bill Amount:<?php echo $row['billamount'];?><br><br>
				Due Date:<?php echo $row['duedate'];?><br><br>
				Address:<?php echo $row['address'];?><br><br>
				Email:<?php echo $row['email'];?><br><br>
			</h3></center>
				
				<center><table class = 'colo'>
				<tr>
					<th>consumer.no</th>
			        <th>name</th>
			        <th>Bill amount</th>
			        <th>Due Date</th>
			        <th>Address</th>
			        <th>Email</th>
			        <th>UnitsConsumed</th>
			        <th>Select</th></tr>
			        <tr>
					<td><?php echo $row['consumerno'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['billamount'];?></td>
					<td><?php echo $row['duedate'];?></td>
					<td><?php echo $row['address'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['unitsconsumed'];?></td>
					<td><input type = "button" value = 'Pay' onclick="test()"  class ='button' id='butclick'></td>
				</tr>
			</center>
		</table>
				<?php
				$_SESSION['consumerno']=$row['consumerno'];
				$_SESSION['name']=$row['name'];
				$_SESSION['duedate']=$row['duedate'];
				$_SESSION['billamt']=$row['billamount'];
				$_SESSION['status']=$row['status'];
				
				$_SESSION['address']=$row['address'];
				
			}
}
else
	echo "No records found";

echo "<br><br>";?>
<button class ='button' name='download' onclick="location.href='preview.php' ">Preview Bill</button>
</center>
<script type='text/javascript'>

function test()

{

swal("Good job!", "Payment success!", "success");
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$consumerno = $_POST['consumerno'];
$sql = "UPDATE login SET status='paid' WHERE consumerno='$consumerno' ";

if ($conn->query($sql)) {
	
	
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
//alert("Payment success");

}
</script>

</body>
</html>