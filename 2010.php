<?php
	error_reporting(0);
	if(isset($_POST['calculate'])){
		$sem1st = $_POST['1st_sem'];
		$sem2nd = $_POST['2nd_sem'];
		$sem3rd = $_POST['3rd_sem'];
		$sem4th = $_POST['4th_sem'];
		$sem5th = $_POST['5th_sem'];
		$sem6th = $_POST['6th_sem'];
		$sem7th = $_POST['7th_sem'];
		$sem8th = $_POST['8th_sem'];


		$error=0;
		$error_msg = "";

		if($sem1st ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; 1st Semester</b> required </div>";
		}
		if($sem2nd ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; 2nd Semester</b> required </div>";
		}
		if($sem3rd ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; 3rd Semester</b> required </div>";
		}
		if($sem4th ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; 4th Semester</b> required </div>";
		}
		if($sem5th ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; 5th Semester</b> required </div>";
		}
		if($sem6th ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; 6th Semester</b> required </div>";
		}
		if($sem7th ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; 7th Semester</b> required </div>";
		}
		if($sem8th ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; 8th Semester</b> required </div>";
		}

		if($error==0){
			$cgpa = ($sem1st*5)/100 + ($sem2nd*5)/100 + ($sem3rd*5)/100 + ($sem4th*15)/100 + ($sem5th*15)/100 + ($sem6th*20)/100 + ($sem7th*25)/100 + ($sem8th*10)/100;
		}
		else{
			$error_msg;
		}

		
		
	}
	


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result Calculator 2010</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="main">
		<div class="form">
			<form method="POST" enctype="multipart/form-data">
				<label for="1st"><span class="number">1</span>1st Semester:</label>
				<input type="text" placeholder="Enter GPA" name="1st_sem" />
				<hr>
				<label for="2nd"><span class="number">2</span>2nd Semester:</label>
				<input type="text" placeholder="Enter GPA" name="2nd_sem" />
				<hr>
				<label for="3rd"><span class="number">3</span>3rd Semester:</label>
				<input type="text" placeholder="Enter GPA" name="3rd_sem" />
				<hr>
				<label for="4th"><span class="number">4</span>4th Semester:</label>
				<input type="text" placeholder="Enter GPA" name="4th_sem" />
				<hr>
				<label for="5th"><span class="number">5</span>5th Semester:</label>
				<input type="text" placeholder="Enter GPA" name="5th_sem" />
				<hr>
				<label for="6th"><span class="number">6</span>6th Semester:</label>
				<input type="text" placeholder="Enter GPA" name="6th_sem" />
				<hr>
				<label for="7th"><span class="number">7</span>7th Semester:</label>
				<input type="text" placeholder="Enter GPA" name="7th_sem" />
				<hr>
				<label for="8th"><span class="number">8</span>8th Semester:</label>
				<input type="text" placeholder="Enter GPA" name="8th_sem" />
				<hr><br>
				<button name="calculate">Calculate</button><br>
				<div class="result"><p><b>Result: </b><?php echo $cgpa; ?></p></div>
				<div class="error"><?php echo $error_msg; ?></div>
			</form>
		</div>
		<center><a class="center" href="index.php">Home</a></center>
	</div>
</body>
</html>