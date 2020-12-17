<?php
	session_start();
	include("dbcon.php");
	if($con)
	{
		$title=$_POST['title'];
		$_SESSION['title']=$title;
		$lead=$_POST['lead'];
		$m1=$_POST['m1'];
		$m2=$_POST['m2'];
		$m3=$_POST['m3'];
		$query="INSERT INTO project (ptitle,team_leader,member1,member2,member3) VALUES ('$title','$lead','$m1','$m2','$m3')";
		if(mysqli_query($con,$query))
		{
			header('Location:ins1.php');
		}
		else
			//echo "<script>alert('Try again');window.location.href='index.php';</script>";
		echo mysqli_error($con);
	}
?>