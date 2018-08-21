<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Room updation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="full">
		
		<div id="header">
			<div id="logo">
				<img src="img/fadda.png">
			</div>
			<div id="nav">
				<ul>
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="rd.php">Room Details</a></li>
					<li><a href="booking.php">Bookings</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div style="background-image: url('img/b8.jpg');width: 100%;height: 580px; background-repeat: no-repeat; background-size: 100% 600px; "><br><br><br><br>
		<center><div style="background: rgba(255,255,255,.5); width:70%;">
			<form action="room.php" method="post">
		<table>
			
			<tr>
				<td>Room no</td>
				<td><input type="text" name="room" placeholder="Enter Room number" title="Enter Room number"></td>
			</tr>
			<tr>
				<td>Room Type</td>
				<td><input type="text" name="type" placeholder="Enter Room type" title="Enter Room type"></td>
			</tr>
			<tr>
				<td>Room Price</td>
				<td><input type="text" name="price" placeholder="Enter Room Price" title="Enter Room Price"></td>
			</tr>
			<tr >
				<td><input style="width: 120px; height: 30px; border-radius: 30px; opacity: .8" type="submit" name="submit" value="Submit"></td>
			</tr>
		</table></form></center></div>
		<?php
		if(isset($_POST['submit']))
		{
				$rn=$_POST['room'];
				$type=$_POST['type'];
				$price=$_POST['price'];
				if(mysqli_query($a,"insert into room (roomno,type,price)values('$rn','$type',$price)"))
				{
					echo "data insert";
				}
				else
				{
					echo "data not insert";
				}
				
		}
		?>
		
		<!-- <div id="footer">
	<pre>© 2018 FoodAdda.com, L.P. All rights reserved.

FoodAdda.com and the foodAdda.com logo are trademarks or registered trademarks of FoodAdda.com,LP in the U.S. and or other countries. 
All other trademarks are property of their respective owners.</pre>
</div> -->
	</div>
	
</body>
</html>