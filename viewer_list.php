<?php
include("dbcon.php");
if($con)
{
	$name=$_POST['name'];
	$inst=$_POST['inst'];
	$location=$_POST['location'];
	$sql="INSERT INTO viewer (name,institution,location) VALUES ('$name','$inst','$location')";
	if(mysqli_query($con,$sql))
	{
		header('Location:rate.php');
	}
	else
	{
		echo mysqli_error($con);
	}
}
else
	echo "Connection error";
?>