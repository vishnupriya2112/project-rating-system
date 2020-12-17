<?php
	SESSION_START();
	$title=$_SESSION['title'];
	include("dbcon.php");
	if($con)
	{
		$sql="SELECT pid FROM project WHERE ptitle='$title'";
		if($result=mysqli_query($con,$sql))
			{
				if($row = mysqli_fetch_assoc($result))
				{
					$pid=$row['pid'];
					$sql1="INSERT INTO topper VALUES('$pid','0')";
					if(mysqli_query($con,$sql1))
					{
						echo "<script>alert('Entry successful');window.location.href='index.php';</script>";
					}
					else
						//echo "<script>alert('Try again');window.location.href='index.php';</script>";
						echo mysqli_error($con);
				}
			}
			else
			{
				//echo "<script>alert('Try again');window.location.href='viewer.php';</script>";
				echo mysqli_error($con);
			}
		
	}
	else
		//echo "<script>alert('Try again');window.location.href='index.php';</script>";
		echo mysqli_error($con);
?>