<html>
<head>
<title>Select</title>
<link rel="stylesheet" href="v4bootstrap.min.css" >
<link rel="stylesheet" href="all.css" >
<style>
body
{
	 background-image: url("kec.jpg");
	 background-repeat: no-repeat;
	 background-size:cover;
}
.login
{
		width:500px;
		padding:5% 0 0;
		margin:auto;
}
.form
{
	position:relative;
	top:-100px;
	z-index:1;
	background:rgba(255,255,255,0.5);
	max-width:360px;
	margin:0 auto 100px;
	padding:45px;
	
}
.form input
{
	outline:1;
	background;#000000;
	width:100%;
	border:0;
	margin:0 0 15px;
	box-sizing:border-box;
	font-size:14px;
	padding:10px;
}
.form button
{
	text-transform:uppercase;
	outline:0;
	background:#4CAF50;
	width:100%;
	border:0;
	padding;15px;
	font-size14px;
	cursor;pointer;
}
</style>
</head>
<body>
<center>
<div class="container">
	
		</br>
		</br>
		</br>
		</br>
		</br>
		<div class="login">
		<div class="form">
	<form name="myform" action="viewer_list.php" method="POST">
		<h2>Viewer Detail</h2>
		<table>
		<tr>
			<td><input type="text" name="name" placeholder="Name" size="30" required><br><br></td>
		</tr>
		<tr>
			<td><input type="text" name="inst" placeholder="Institution Name " required><br><br></td>
		</tr>
		<tr>
			<td><input type="text" name="location" placeholder="Location" required><br><br>
		</td>
		</tr>
		<br>
		<tr>
			<td>
		<input type="submit" value="submit" class="btn btn-success"></td>
		</tr>
		</table>
	</form>
	
	</div>
	</div>
	</div>
	</div>
</center>
</body>
</html>