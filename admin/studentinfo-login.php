<?php 
	
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username=="studentadmin" && $password=="admin2017"){
			session_start();
			$_SESSION['user'] = $username;
			header('location:studentinfo.php');
		}
		else{
			echo "<div class='alart'>Username or Password did not match.</div>";
		}
	}
	

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Information</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
	<div class="admin_main">
		<h2>Insert Information</h2><hr><br>
		<div class="admin">
			<center>
				<div class="form">
				<form method="post" enctype="multipart/form-data">
					<input type="text" name="username" placeholder="username"><br>
					<input type="password" name="password" placeholder="Password"><br>
					<button name="submit">Login</button>
				</form>
				</div>
			</center>
		</div>
	</div>
</body>
</html>