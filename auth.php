<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		header('location:login.php');

	}
	else
	{


	$un=$_POST['username'];
	$pass=$_POST['password'];
	include('dbcon.php');
	$sql="SELECT priority FROM USER WHERE BINARY name='$un' AND password='$pass'";
	if($result=mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($result)==1)
		{
			if($row=mysqli_fetch_array($result))
			{
				$_SESSION['priority']=$row['priority'];
				$_SESSION['username']=$un;
				$_SESSION['dept']=$un;
				$_SESSION['login']=true;
				header('location:p2.php');
			}
		}
		else
		{
			echo "<script>if(!alert('Username or Password is not correct'))document.location='login.php';</script>";
		
		}
	}
	else
	{
		echo mysqli_error($con);
	}

}
?>