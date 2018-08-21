<!DOCTYPE html>
<html>
<head>
	<title>Home(Hotel Management)</title>
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
<div style="background-image: url('img/b2.jpg');width: 100%;height: 500px;"></div>
<div id="f1">
	<form action="r1.php" method="get">
		<table align="center">
		<tr>
			<th>Destination</th>
			<th>Check IN</th>
			<th>Check Out</th>
			<th>Room</th>
			<th rowspan="2"><input type="submit" value="check" name="submit"></th>
		</tr>
		<tr align="center">
			<td ><input type="text" name="d1" placeholder="Enter Destination"></td>
			<td><input type="date" name="ci"></td>
			<td><input type="date" name="co"></td>			
			<td>
				<select name="room">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</td>
		</tr>
	</table></form>
</div>
<div id="welcome">
	<h1 align="center">Welcomme to Food Adda</h1>
	<p align="center">FoodAdda.com is a leading online accommodation site. We’re passionate about travel. Every day we inspire and reach millions of travelers across 90 local websites in 41 languages. So when it comes to booking the perfect hotel, vacation rental, resort, apartment, guest house or treehouse  – we’ve got you covered. With hundreds of thousands of properties in over 200 countries and territories, we provide incomparable choice with a Price Guarantee. Our site is fun and simple to use and we offer innovative online tools and a top rated mobile app.</p>
	<h1 align="center">Our brands</h1>
</div>
<div id="g1">
	<div id="one"><img src="img/b3.jpg" width="200">
		<h2 align="center">Taj</h2>
		<p align="center" "><br><br>About Taj Hotels Palaces Resorts Safaris.<br> Established in 1903, Taj Hotels Palaces Resorts <br>Safaris is one of Asia's largest and finest<br> group of hotels, comprising 98 hotels<br> in 61 locations across the globe, including <br>presence in India, North America,<br> United Kingdom, Africa, Middle East, <br> Malaysia,Sri Lanka, Maldives, Bhutan ...<font color="red">more</font></p>
	</div>
	<div id="two"><img src="img/b4.jpg">
		<h2 align="center">Vivanta</h2>
		<font color="red"><p align="center">Hotel and Restaurant</p></font>
		<p align="center">Vivanta By Taj is an Indian hotel <br> chain established in September 2010.<br> The brand is a part of the Indian <br>Hotels Company Limited,<br> a subsidiary of the TATA Group.<br> The brand Vivanta was born as a<br> part of Taj Hotels Resorts <br>and... <font color="red">more</font> </p>
	</div>
	<div id="three"><img src="img/b5.jpg">
		<h2 align="center">Gateway</h2>
		<font color="red"><p align="center">Hotel and Restaurant</p></font>
		<p>The Gateway Hotels and Resorts are designed<br> for the modern atraveller. <br>Which is why we have 24X7 <br>attitude across services like dining <br>and fitness.So when you feel like a quick <br>bite at 1am or a heart pumping jog <br>at 4 am,we were   got <br>you covered... <font color="red">more</font> </p>
	</div>	
</div>
<div id="footer">
	<pre>© 2018 FoodAdda.com, L.P. All rights reserved.

FoodAdda.com and the foodAdda.com logo are trademarks or registered trademarks of FoodAdda.com,LP in the U.S. and or other countries. 
All other trademarks are property of their respective owners.</pre>
</div>
</body>
</html>