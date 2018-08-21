<?php
include("connection.php");
$rno=$_GET['no'];
if(mysqli_query($a,"update room set status='UnBook' where roomno=$rno"))
{
	header("location:rd.php");
}
?>