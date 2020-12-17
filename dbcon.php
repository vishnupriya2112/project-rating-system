<?php 
	$con=mysqli_connect('localhost','root','','rating');
	if(!$con)
	{
		echo"Error.".mysqli_error($con);
	}
?>
