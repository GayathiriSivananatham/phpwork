<?php
include("connection.php");
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
//print_r($uname);

if($uname!=""&&$pswd!="")
{
	
	$sql="SELECT uid,name,pswd FROM register WHERE name='$uname' AND pswd='$pswd'"; 
	$result=$con->query($sql);
	if($result->num_rows==1)
	{
		//header("location:profile.html");
		echo "wellcome to " .$uname ;

	}
	else
	{
		//header("location:index.html?mes=<p>invalid user id or password</p>");
		echo "invalid username and password";
	}
}
else
{
	echo "all field required";
}
?>
