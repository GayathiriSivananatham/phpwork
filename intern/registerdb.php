<?php
include("connection.php");
$name=$_POST['name'];
$pswd=$_POST['pswd'];
$cpswd=$_POST['cpswd'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$dept=$_POST['dept'];
//$sql="INSERT INTO register (name,pswd,cpswd,dob,age,dept) VALUES ('{name}','{pswd}','{cpswd}','{dob}',{age},'{dept}')";

if($name!=""&&$pswd!=""&&$cpswd!=""&&$dob!=""&&$age!=""&&$dept!="")
{
	$sql="INSERT INTO register (name,pswd,cpswd,dob,age,dept) VALUES ('$name','$pswd','$cpswd','$dob',$age,'$dept')";
	if($con->query($sql))	
	{
		echo "data saved";
	}
}
else
{
	echo "all field are required";
}
?>