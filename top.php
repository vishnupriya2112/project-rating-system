<html>
<head>
<title>Select</title>
<link rel="stylesheet" href="css/v4bootstrap.min.css" >
<link rel="stylesheet" href="css/all.css" >
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
#customers td {
	padding-top: 20px;
}
</style>
</head>
<body>
<center>
<div class="container">
	
		</br>
		<h2>TOPPER LIST</h2>
		
		</br>
		<table id="customers" class="table table-bordered" style="min-width:50px;" align="center">
			<tr>
			<th>Project title</th>
			<th>Rating</th>
			<th>Comments</th>
			</tr>
			
<?php
include("dbcon.php");
if($con)
{
	$sql="SELECT * FROM project INNER JOIN topper ON topper.pid=project.pid ORDER BY total_rate DESC";
	if($result=mysqli_query($con,$sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{?>
			<tr><td><?php echo $row['ptitle']; ?> </td><td><?php echo $row['total_rate']; ?> </td>
			<?php
		}?>
		</tr>
		<?php
	}
}
else
	echo "Connection error";
?>

</div>
	</div>
</center>
</body>
</html>