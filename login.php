<?php
session_start();

if(isset($_SESSION['login'])&& $_SESSION['login']==true)
{

 header("Location:p2.php");
}
else
{
	 
?>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="v4bootstrap.min.css" >
    <link rel="stylesheet" href="all.css" >
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
</br>
</br>
</br>
</br>
 <div class="container">
	</br></br></br>
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login  </h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
				<form name="login" method="POST" action="auth.php" autocomplete="off">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="submit" class="btn float-right login_btn">
					</div>
				</form><br/>
				<!-- Footer -->
<footer class="page-footer font-small blue">

<!-- Copyright -->
<!-- Copyright -->

</footer>
<!-- Footer -->
			</div>
			
			</div>
			
		</div>
		 
	</div>

</div>

</body>
</html>
<?php
}
 
?>