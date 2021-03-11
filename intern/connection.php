<?php
$con=new mysqli("localhost","root","","intern");
if($con->connect_error)
{
	echo $con->connect_error;
	die("Connection failed");
}
/*else
{
	echo "database connected successfully";
}*/
?>