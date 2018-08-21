<?php 
include("connection.php")
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Room Detail</title>
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
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="rd.php">Room Details</a></li>
					<li><a href="booking.php">Bookings</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
		
	</div>
<div style="background-image: url('img/b2.jpg');width: 250%;height: 500px;background-repeat: none;">
	<div><br><br><br><br><br>
		<h1 style="color: cyan; text-align: center;">Welcome Admin</h1>
		<div style="background: rgba(255,255,255,0.6); ">
			<table>
			<tr>
				<th width="25%" height="50px" >Room number</th>
				<th width="25%" height="50px">Room Type</th>
				<th width="25%" height="50px">Price</th>
				<th width="25%" height="50px">Status</th>
				<th width="25%" height="50px">Option</th>
			</tr>
			<?php
				$q1="select * from room";
				$run=mysqli_query($a,$q1);
				while ($row=mysqli_fetch_array($run))
				 {
					$no=$row['roomno'];
					$type=$row['type'];
					$p=$row['price'];
					$s=$row['status'];
				
			?>
			<tr>
				<td width="25%" height="50px"><center><?php echo $no; ?></center></td>	
				<td width="25%" height="50px"><center><?php echo $type; ?></center></td>
				<td width="25%" height="50px"><center><?php echo $p; ?></center></td>
				<td width="25%" height="50px"><center><?php echo $s; ?></center></td>
				<td  width="25%" height="50px" ><a href="co.php? no=<?php echo $no; ?>">Check Out</a></td>
			</tr>
			<?php
		}
		?>
		</table>
	</div>
	</div>
	
</div>
<div id="footer">
	<pre>© 2018 FoodAdda.com, L.P. All rights reserved.

FoodAdda.com and the foodAdda.com logo are trademarks or registered trademarks of FoodAdda.com,LP in the U.S. and or other countries. 
All other trademarks are property of their respective owners.</pre>
</div>
</body>
</html>