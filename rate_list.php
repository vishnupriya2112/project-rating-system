<?php
include("dbcon.php");
if($con)
{
	include('dbcon.php');
	$count=$_POST["tot"];
	for($i=1;$i<=$count;$i++)
	{
		$name="rate".$i;
		$name1=$_POST[$name];
		$sql="INSERT INTO rating VALUES ('$i','$name1')";
		if(mysqli_query($con,$sql))
		{
			$sql1="SELECT total_rate FROM topper WHERE pid='$i'"; 
			if($result=mysqli_query($con,$sql1))
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$rate=$row['total_rate'];
					$rate1=$rate+$name1;/* 75+5=80*/
					$sql2="UPDATE topper SET total_rate='$rate1' WHERE pid='$i';";
					if(mysqli_query($con,$sql2))
					{
						echo "<script>alert('Entry Sucessful');window.location.href='index.php';</script>";
					}
					/*else
					{
						echo mysqli_error($con);
					}*/
				}
			}
			else
			{
				echo "<script>alert('Try again');window.location.href='viewer.php';</script>";
				//echo "1".mysqli_error($con);
			}
		}
		else
		{
			echo "<script>alert('Try again');window.location.href='viewer.php';</script>";
			//echo mysqli_error($con);
		}
	}
}
else
	echo "Connection error";
?>