<?php 
include("connection.php")
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home(Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
	<div id="full">
		
		<div id="header">
			<div id="logo">
				<img src="img/fadda.png">
			</div>
			<div id="nav">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="#">CANTACT</a></li>
					<li><a href="#">BOOKING</a></li>
					<li><a href="#">OUR HOTEL</a></li>
					
				</ul>
			</div>
		</div>
		
	</div>
<div style="background-image: url('img/b2.jpg');width: 100%;height: 500px;background-repeat: none;">
	<div><br><br><br><br><br><br>
		<center>
			<div style="background: rgba(255,255,255,.5); width: 80%">
				<form action="" method="post">
				<table>
					<tr>
						<td width="50%" height="50px">User Name</td>
						<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter username"></td>
					</tr>
					<tr>
						<td width="50%" height="50px">Password</td>
						<td width="50%" height="50px"><input type="Password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="login" style="width: 150px;height: 50px; border-radius: 30px; opacity: 0.8"></td>
					</tr>
				</table></form>
				<?php 
					if (isset($_POST['submit'])) 
					{
						 $un=$_POST['un'];
						 $ps=$_POST['ps'];
						 
						 $q1="select * from login";
						 $run=mysqli_query($a,$q1);
						 $row=mysqli_fetch_array($run);
						 $u=$row['user'];
						 $p=$row['password'];
						 if ($un==$u&& $ps==$p)
						  {
						 	header("location:ahome.php");

						 }
						 else{
						 	header("location:index.php");
						 }
					}		
				 ?>
			</div>
		</center>
	</div>
</div>
<div id="footer">
	<pre>© 2018 FoodAdda.com, L.P. All rights reserved.

FoodAdda.com and the foodAdda.com logo are trademarks or registered trademarks of FoodAdda.com,LP in the U.S. and or other countries. 
All other trademarks are property of their respective owners.</pre>
</div>
</body>
</html>