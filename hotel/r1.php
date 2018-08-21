<?php
include("connection.php");

$ci=$_GET['ci'];
$co=$_GET['co'];
$r=$_GET['room'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
					<li><a href="index.php">HOME</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="#">BOOKING</a></li>
					<li><a href="ourhotel.php">OUR HOTEL</a></li>
					<li><a href="admin/index.php">ADMIN</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div style="background-image: url('img/b8.jpg');width: 100%;height: 580px; background-repeat: no-repeat; background-size: 100% 600px; ">
		<form action="r1.php" method="post">
		<table align="center">
			<?php

				$q1="select * from room where status='UnBook'";
				$run=mysqli_query($a,$q1);
				$row=mysqli_fetch_array($run);
				$rno=$row['roomno'];
				$q="select * from room where status='UnBook'";
				$run=mysqli_query($a,$q);
				$num=mysqli_num_rows($run);
				if($r<=$num)
				{
					?>
					<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="Available" disabled="disabled"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
				<td>Adhar card number</td>
				<td><input type="text" name="ACN" placeholder="Adhar number" title="id"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="Address" name="Address" placeholder="Address" title="Address"></td>
			</tr>
			<tr>
				<td>City</td>
				<td><select name="City">
					<option>--Select--</option>
					<option>Mumbai</option>
					<option>Delhi</option>
					<option>Banglore</option>
					<option>Pune</option>
				</select></td>
			</tr>
			<tr>
				<td>State</td>
				<td><select name="State">
					<option>--Select--</option>
					<option>Maharastra</option>
					<option>Delhi</option>
					<option>Karnataka</option>
				</select></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="Email" name="Email" placeholder="Email" title="email"></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td><input type="text" name="mobile" placeholder="contact number"></td>
			</tr>
			<tr>
				<td>Check In</td>
				<td><input type="date" name="chein" value=<?php echo $ci; ?>></td>
				<td>Check Out</td>
				<td><input type="date" name="cheout" value=<?php echo $co; ?>></td>
			</tr>
			<tr>
				<td>Enter members</td>
				<td><input type="text" name="member" placeholder="Enter members" title="members"></td>
			</tr>
			<tr >
				<td><input style="width: 120px; height: 30px; border-radius: 30px; opacity: .8" type="submit" name="submit" value="Submit"></td>
			</tr>
				<?php     }
				else
				{
					?>
					<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="Not-Available" disabled="disabled"></td>
			</tr>
			<?php

				}
			?>
			
			
		</table></form>
		<?php
		if (isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$id=$_POST['ACN'];
			$address=$_POST['Address'];
			$city=$_POST['City'];
			$state=$_POST['State'];
			$email=$_POST['Email'];
			$contact=$_POST['mobile'];
			$cidate=$_POST['chein'];
			$codate=$_POST['cheout'];
			$member=$_POST['member'];
			
			
			if(mysqli_query($a,"insert into form (name,id,address,city,state,email,contact,cidate,codate,member)values('$name',$id,'$address','$city','$state','$email',$contact,'$cidate','$codate',$member)"));
			{
				mysqli_query($a,"update room set status='Book' where roomno=$rno");
				header("location:fi.php");
			}
		}
		?>
		
		<div id="footer">
	<pre>© 2018 FoodAdda.com, L.P. All rights reserved.

FoodAdda.com and the foodAdda.com logo are trademarks or registered trademarks of FoodAdda.com,LP in the U.S. and or other countries. 
All other trademarks are property of their respective owners.</pre>
</div>
	</div>
	
</body>
</html>