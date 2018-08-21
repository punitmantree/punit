<?php 
include("connection.php")
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="#">BOOKING</a></li>
					<li><a href="ourhotel.php">OUR HOTEL</a></li>
					<li><a href="admin/index.php">ADMIN</a></li>
				</ul>
			</div>
		</div>
		
	</div>
<div style="background-image: url('img/b2.jpg');width: 100%;height: 500px;background-repeat: none;">
	<div><br><br><br><br><br>
		<h1 style="color: cyan; text-align: center;">Welcome Admin</h1>
		<div style="background: rgba(255,255,255,0.6); ">
			<table>
			<tr>
				<th width="10%" height="50px">Name</th>
				<th width="10%" height="50px">Id no</th>
				<th width="10%" height="50px">City</th>
				<th width="10%" height="50px">State</th>
				<th width="10%" height="50px">Mobile</th>
				<th width="10%" height="50px">Check In</th>
				<th width="10%" height="50px">Check Out</th>
				<th width="10%" height="50px">Member</th>
			</tr>
			<?php
				$q1="select * from form";
				$run=mysqli_query($a,$q1);
				while ($row=mysqli_fetch_array($run))
				 {
					$name=$row['name'];
					$idno=$row['id'];
					$city=$row['city'];
					$state=$row['state'];
					$mob=$row['contact'];
					$cidate=$row['cidate'];
					$codate=$row['codate'];
					$m=$row['member'];
			?>
			<tr>
				<td width="10%" height="50px"><center><?php echo $name; ?></center></td>	
				<td width="10%" height="50px"><center><?php echo $idno; ?></center></td>
				<td width="10%" height="50px"><center><?php echo $city; ?></center></td>
				<td width="10%" height="50px"><center><?php echo $state; ?></center></td>
				<td width="10%" height="50px"><center><?php echo $mob; ?></center></td>
				<td width="10%" height="50px"><center><?php echo $cidate; ?></center></td>
				<td width="10%" height="50px"><center><?php echo $codate; ?></center></td>
				<td width="10%" height="50px"><center><?php echo $m; ?></center></td>
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