<?php
$big=1;
$len=1;
$a=array(1,2,3,4,5,2,34,45,56,67,78,89,90);
for($i=1;$i<=sizeof($a)-1;$i++)
{

	if($a[$i-1]<$a[$i])
	{
		$len++;
	}
	else
	{
		if($len>$big)
		{
			$big=$len;
			$len=1;
		}
	}
}
echo $len;
?>
