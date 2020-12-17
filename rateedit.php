<html>
<head>
<title>Select</title>
<link rel="stylesheet" href="v4bootstrap.min.css" >
<link rel="stylesheet" href="all.css" >
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
	 background:;
	 background-repeat: no-repeat;
	 background-size: cover;
}
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
		
		<h2>RATE HERE</h2>
		
		</br>
	<form name="myform" action="rate_list.php" method="POST">
		<table id="customers" class="table table-bordered" style="min-width:50px;" align="center">
			<tr>
			<th><label>Project title</label></th>
			<th colspan="5">Rating</th>
			<th >Comments</th>
			</tr>
			<tr>
		
		<?php 	
			include("dbcon.php");		
			$sql_department ="SELECT * FROM project";
			$department_data = mysqli_query($con,$sql_department);
			$i=0;
			while($row = mysqli_fetch_assoc($department_data))
			{
				$name= $row['ptitle'];
				$id= $row['pid'];
				?>
				<tr>
					<td><?php echo $row['ptitle'];?></td>
					<td><input type="radio" name="<?php echo 'rate'.$id;?>" value="5"> 5</td>
					<td><input type="radio" name="<?php echo 'rate'.$id;?>" value="4"> 4</td>
					<td><input type="radio" name="<?php echo 'rate'.$id;?>" value="3"> 3</td>
					<td><input type="radio" name="<?php echo 'rate'.$id;?>" value="2"> 2</td>
					<td><input type="radio" name="<?php echo 'rate'.$id;?>" value="1"> 1</td>
					<td><input type="text" name="cmt"></td>
					
				</tr><?php
				$i=$i+1;

			}
		mysqli_close($con);?>
		<input type="hidden" name="tot" value="<?php echo $i;?>">
		</table>
		<input type="submit" value="submit" class="btn btn-primary">
	</form>
	</div>
	</div>
</center>
</body>
</html>