<?php 

	session_start();
	if(empty($_SESSION['user'])){
		header('location:login.php');
	}

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Submit Marks</title>
	<link rel="stylesheet" href="../../css/style.css" type="text/css">
</head>
<body>
	
		<div class="admin_main">
			<h2>Select Semester</h2><hr><br>
			<div class="admin semester">
				<ul>
					<li><a href="pw1st.php">1st Semester</a></li>
					<li><a href="pw2nd.php">2nd Semester</a></li>
					<li><a href="pw3rd.php">3rd Semester</a></li>
				</ul>
			</div>
		</div>
		<center><a class="center" href="../index.php">Home</a><br>
			<a href="pw-logout.php">Logout</a></center>
	
</body>
</html>