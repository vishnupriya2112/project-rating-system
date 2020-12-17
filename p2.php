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
	 background-size: cover;
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
#but
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
	<form name="frm1" action="ins.php" method="POST">
		<table>
			<tr>
				
				<td><input type="text" name="title" placeholder="PROJECT TITLE" size="50" required></td>
			</tr>
			<tr>
				
				<td><input type="text" name="lead" placeholder="TEAM LEADER" size="50" required></td>
			</tr>
			<tr>
				
				<td><input type="text" name="m1" placeholder="MEMBER 1" size="50"></td>
			</tr>
			<tr>
				
				<td><input type="text" name="m2" placeholder="MEMBER 2" size="50"></td>
			</tr>
			<tr>

				<td><input type="text" name="m3" placeholder="MEMBER 3" size="50"></td>
			</tr>
			<tr>
			<td><input type="submit" value="submit" name="submit" size="30" class="btn btn-success"></td>
			</tr>
			<tr>
			<td><button id="but" onclick="location.href = 'logout.php';" size="30" class="btn btn-success">Logout</button></td>
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

