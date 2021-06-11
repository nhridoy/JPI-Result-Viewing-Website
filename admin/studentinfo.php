<?php 

	session_start();
	if(empty($_SESSION['user'])){
		header('location:studentinfo-login.php');
	}


	include('../connect.php');
	if(isset($_POST['submit'])){

		

		$technology=$_POST['technology'];
		$name=$_POST['name'];
		$fathers_name=$_POST['fathers_name'];
		$mothers_name=$_POST['mothers_name'];
		$roll=$_POST['roll'];
		$registration=$_POST['registration'];
		$student_session=$_POST['student_session'];
		$phone_number=$_POST['phone_number'];

		$error=0;
		$error_msg = "";

		if($name ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; Name</b> required </div>";
		}
		if($fathers_name ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; Father's Name</b> required </div>";
		}
		if($mothers_name ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; Mother's Name </b>required </div>";
		}
		if($roll ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; Roll</b> required </div>";
		}
		if($registration ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; Registration</b> required </div>";
		}
		if($student_session ==""){
			$error=$error+1;
			$error_msg .= "<div class='alert'><b>&#9746; Session</b> required </div>";
		}
		if($phone_number =="" || $phone_number=="88"){
			$error=$error+1;
			$error_msg .= "<div class='alert'></b>&#9746; Phone Number</b> required </div>";
		}


		if($error==0){
			$object = new connect;
			$insert="INSERT into student_info VALUES('','$technology','$name','$fathers_name','$mothers_name','$roll','$registration','$student_session','$phone_number')";

			
			$object->insert($insert);
			echo "<div class='success'><b>&#9745; Data Inserted.</b></div>";
		}
		else{
			echo $error_msg;
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
					<table>
						<tr>
							<td>Technology:</td>
							<td><select id="technology" name="technology">
          					<optgroup label="Select Depertment">
          						<?php
          						$object = new connect;
          						$select_option="SELECT * FROM dep";
          						$option_select=$object->option($select_option);
          						while($loop_result = $option_select->fetch_object()){?>
          						<option value='<?php echo $loop_result-> id;?>'> <?php echo $loop_result-> dep_name; ?></option>;
									<?php } ?>
          					</optgroup>
          				</select></td>
						</tr>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="name" placeholder="Name"></td>
						</tr>
						<tr>
							<td>Father's Name:</td>
							<td><input type="text" name="fathers_name" placeholder="father's Name"></td>
						</tr>
						<tr>
							<td>Mother's Name:</td>
							<td><input type="text" name="mothers_name" placeholder="Mother's Name"></td>
						</tr>
						<tr>
							<td>Roll:</td>
							<td><input type="text" name="roll" placeholder="Roll"></td>
						</tr>
						<tr>
							<td>Registration:</td>
							<td><input type="text" name="registration" placeholder="Registration"></td>
						</tr>
						<tr>
							<td>Session:</td>
							<td><input type="text" name="student_session" placeholder="2013-14"></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone_number" value="88"></td>
						</tr>
					</table>
					<button name="submit">Insert</button>
				</form>
				<a href="studentinfo-logout.php">Logout</a>
				</div>
			</center>
		</div>
	</div>
</body>
</html>