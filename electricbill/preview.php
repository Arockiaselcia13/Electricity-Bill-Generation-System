
<html>
<head>
<style>
	.container {
  position: relative;
  left:60%;
}

.topright {
  position: absolute;
  top: .00005px;
  right: 35px;
  font-size: 18px;
}
	.contain{
	position:absolute;
	top:200px;
	right:40%;

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
  .btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  right: 16px

}

.btn:hover {background: #fff;}

.success {color: green;}
.clr
{
  
  color:#1F45FC;
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

</style>
</head>
<body>
  <div class="topright">

    <button  class ='button1' onclick="location.href='login.html'">Logout</button></div>
	<div class = 'clr'>
	<br><br><h1><strong><center>Tamilnadu State Electricity Distribution Co.Ltd.</center></strong></h1>
	<h1><strong><center>Receipt of Online Bill Payment</center></strong></h1>
</div>
		<div class='contain'>
			
		<h2>Consumer number:&emsp;<?php session_start(); echo $_SESSION['consumerno']; ?></h2>
		<h2>&ensp;&ensp;Consumer name:&emsp;<?php echo $_SESSION['name']; ?></h2>
		
		<h2>&ensp;&nbsp;Charged amount:&emsp;<?php echo $_SESSION['billamt']; ?></h2>
		<h2>&emsp;&ensp;&emsp;Receipt date:&emsp;<?php echo $_SESSION['duedate']; ?></h2>
		<h2>&emsp;&ensp;&emsp;Receipt type:&emsp;Energy Bill</h2>
		<h2>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Status:&emsp;<?php echo $_SESSION['status']; ?></h2>
		<h2>&emsp;&emsp;&emsp;&emsp;&ensp;Address:&emsp;<?php echo $_SESSION['address']; ?></h2>
		<div class="container">
			
		<a href ='#' onclick='window.print()'>Print</a>
           </div></div>
	    </div>
</body>

</html>