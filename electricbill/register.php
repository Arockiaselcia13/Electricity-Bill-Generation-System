<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script></head>
<body>
<?php
$con=mysqli_connect("localhost","root","","test");
$consumerno=$_POST['consumerno'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$q = "SELECT * FROM login WHERE consumerno='$consumerno' ";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{?><script type='text/javascript'>
	
	swal("user already exists!", {
  buttons: false,
  timer: 3000,
});</script>
<?php
//header('location:login.html');
}
else
{
$sql = "INSERT INTO login (consumerno,name,address,password,email,unitsconsumed,billamount,duedate,status)VALUES('{$consumerno}','{$name}','{$address}','{$password}','{$email}',0,0,'00-00-0000','unpaid')";
if($con->query($sql))
header("message=success");
else
echo $con->error;
}

?>
</body></html>