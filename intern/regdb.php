<?php
//include ("connection.php");
/*$name=$_POST['name'];
$pswd=$_POST['pswd'];
$cpswd=$_POST['cpswd'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$dept=$_POST['dept'];
else
{
	echo "database connected successfully";
}*/
$name = json_decode($_POST['name']);
$pswd = json_decode($_POST['pswd']);
$cpswd = json_decode($_POST['cpswd']);
$dob = json_decode($_POST['dob']);
$age = json_decode($_POST['age']);
$dept = json_decode($_POST['dept']);

	if($name!=""&&$pswd!=""&&$cpswd!=""&&$dob!=""&&$age!=""&&$dept!="")
	{
		$host = "localhost";
           $dbusername = "root";
           $dbpassword = "";
           $dbname = "intern";
           $conn = new mysqli($host , $dbusername , $dbpassword , $dbname);

           if(mysqli_connect_error()){
               die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
           }
           else{
				
				$select = "SELECT name from register where name=? limit 1";
               $insert = "INSERT INTO register(name,pswd,cpswd,dob,age,dept) values(?,?,?,?,?,?)";
			   //echo $insert;

               $smst = $conn->prepare($select);
               $smst->bind_param("s",$name);
               $smst->execute();
               $smst->bind_result($name);
               $smst->store_result();
               $check = $smst->num_rows;

               if($check==0){
                   $smst = $conn->prepare($insert);
                   $smst->bind_param("ssssis", $name,$pswd,$cpswd,$dob,$age,$dept);
                   $smst->execute();
                   echo "inserted";
               }
               else{
                   echo "already exits user name";
               }
               $smst->close();
               $conn->close();
           }
		/*$sql="INSERT INTO register (name,pswd,cpswd,dob,age,dept) VALUES ('$name','$pswd','$cpswd','$dob',$age,'$dept')";
		if($con->query($sql))
		{
			echo "data inserted";
		}
		else
		{
			echo "insert data failed";
		}*/
	}
	else
	{
		echo "all data are required";
	}
/*$sql="SELECT * FROM register";
if($result=$con->query($sql))
{
	if($result->num_rows)
	{
		while($row=$result->fetch_object())
		{
			echo $row->name;
		}
	}
} */

?>