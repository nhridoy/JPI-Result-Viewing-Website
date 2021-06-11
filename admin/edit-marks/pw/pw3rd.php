<?php

	
	session_start();
	if(empty($_SESSION['roll'])){
		header('location:../../edit.php');
	}
	include('../../../connect.php');
	$object=new connect;
	$roll= $_GET['edit'];
	$select = "SELECT * FROM pw3rd WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();
	
	
	if(isset($_POST['submit'])){
		/*print_r($_POST);
		print_r($_FILES);
		*/


		
		$tc67131 = $_POST['67131tc'];
		$tf67131 = $_POST['67131tf'];
		$pc67131 = $_POST['67131pc'];
		$pf67131 = $_POST['67131pf'];
		$tc67033 = $_POST['67033tc'];
		$tf67033 = $_POST['67033tf'];
		$pc67033 = $_POST['67033pc'];
		$pf67033 = $_POST['67033pf'];
		$pc66611 = $_POST['66611pc'];
		$pf66611 = $_POST['66611pf'];
		$tc66822 = $_POST['66822tc'];
		$tf66822 = $_POST['66822tf'];
		$pc66822 = $_POST['66822pc'];
		$pf66822 = $_POST['66822pf'];
		$tc65931 = $_POST['65931tc'];
		$tf65931 = $_POST['65931tf'];
		$pc65931 = $_POST['65931pc'];
		$tc65913 = $_POST['65913tc'];
		$tf65913 = $_POST['65913tf'];
		$pc65913 = $_POST['65913pc'];
		$pf65913 = $_POST['65913pf'];
		$tc65811 = $_POST['65811tc'];
		$tf65811 = $_POST['65811tf'];



		$error = 0;
		$error_msg="";
		
		if($tc67131=="" || $tc67131>60 || $tc67131<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67131tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf67131=="" || $tf67131>90 || $tf67131<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67131tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc67131=="" || $pc67131>25 || $pc67131<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67131pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf67131=="" || $pf67131>25 || $pf67131<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67131pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc67033=="" || $tc67033>20 || $tc67033<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67033tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf67033=="" || $tf67033>30 || $tf67033<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67033tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc67033=="" || $pc67033>25 || $pc67033<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67033pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf67033=="" || $pf67033>25 || $pf67033<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67033pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc66611=="" || $pc66611>50 || $pc66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66611=="" || $pf66611>50 || $pf66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc66822=="" || $tc66822>40 || $tc66822<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66822tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66822=="" || $tf66822>60 || $tf66822<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66822tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66822=="" || $pc66822>25 || $pc66822<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66822pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66822=="" || $pf66822>25 || $pf66822<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66822pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65931=="" || $tc65931>60 || $tc65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tc:</b> should be between <b-60</b></div>";
		};
		if($tf65931=="" || $tf65931>90 || $tf65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tf:</b> should be between <b-90</b></div>";
		};
		if($pc65931=="" || $pc65931>50 || $pc65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931pc:</b> should be between <b>0-50</b></div>";
		};
		if($tc65913=="" || $tc65913>60 || $tc65913<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65913tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65913=="" || $tf65913>90 || $tf65913<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65913tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65913=="" || $pc65913>25 || $pc65913<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65913pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65913=="" || $pf65913>25 || $pf65913<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65913pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65811=="" || $tc65811>60 || $tc65811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65811tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65811=="" || $tf65811>90 || $tf65811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65811tf:</b> should be between <b>0-90</b></div>";
		};




		if($error==0){
			$update = "UPDATE pw3rd SET tc67131='$tc67131',tf67131='$tf67131',pc67131='$pc67131',pf67131='$pf67131',tc67033='$tc67033',tf67033='$tf67033',pc67033='$pc67033',pf67033='$pf67033',pc66611='$pc66611',pf66611='$pf66611',tc66822='$tc66822',tf66822='$tf66822',pc66822='$pc66822',pf66822='$pf66822',tc65931='$tc65931',tf65931='$tf65931',pc65931='$pc65931',tc65913='$tc65913',tf65913='$tf65913',pc65913='$pc65913',pf65913='$pf65913',tc65811='$tc65811',tf65811='$tf65811' WHERE roll='$roll'";
		
			$object = new connect;
			$object->update($update);

			if($update){
				header('location:../../edit.php');
			}
			
		}
		else{
			echo "<div class='error'>$error_msg</div>";
		}





	}
		

		


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Submit Marks</title>
	<link rel="stylesheet" href="../../../css/style.css" type="text/css">
</head>
<body>
	
		<div class="admin_main">
			<h2>Enter Marks</h2><hr><br>
			<div class="form fix marks">
				<form method="post" enctype="multipart/form-data">
					<div class="roll">
		          		<label for="roll"><span class="number">1</span>Roll:</label>
		          		<big><?php echo $select_loop->roll; ?></big><br><hr>
	          		</div>
	          		<div class="ini">
	          		<label for="marks"><span class="number">2</span>Enter Marks:</label><br>
	          		<ul>
	          			<li><strong><b>Subjects Name</b></strong></li>
	          			<li><strong><b>TC</b></strong></li>
	          			<li><strong><b>TF</b></strong></li>
	          			<li><strong><b>PC</b></strong></li>
	          			<li><strong><b>PF</b></strong></li>
	          		</ul>
	          		</div><br>
	          		<div class="subjects">
	          			<div class="subjects_name">
	          				<ul>
	          					<li><b>67131-Engineering Thermodynamics</b></li>
	          					<li><b>67033-Machine Shop Practice</b></li>
	          					<li><b>66611-Computer Application</b></li>
	          					<li><b>66822-Electronic Engineering Fundamentals</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65913-Chemistry</b></li>
	          					<li><b>65811-Social Science</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="67131tc" value="<?php echo $select_loop->tc67131; ?>"><input type="text" name="67131tf" value="<?php echo $select_loop->tf67131; ?>"><input type="text" name="67131pc" value="<?php echo $select_loop->pc67131; ?>"><input type="text" name="67131pf" value="<?php echo $select_loop->pf67131; ?>"></li>
	          					<li><input type="text" name="67033tc" value="<?php echo $select_loop->tc67033; ?>"><input type="text" name="67033tf" value="<?php echo $select_loop->tf67033; ?>"><input type="text" name="67033pc" value="<?php echo $select_loop->pc67033; ?>"><input type="text" name="67033pf" value="<?php echo $select_loop->pf67033; ?>"></li>
	          					<li><input type="text" name="66611tc" placeholder="disabled" disabled><input type="text" name="66611tf" placeholder="disabled" disabled><input type="text" name="66611pc" value="<?php echo $select_loop->pc66611; ?>"><input type="text" name="66611pf" value="<?php echo $select_loop->pf66611; ?>"></li>
	          					<li><input type="text" name="66822tc" value="<?php echo $select_loop->tc66822; ?>"><input type="text" name="66822tf" value="<?php echo $select_loop->tf66822; ?>"><input type="text" name="66822pc" value="<?php echo $select_loop->pc66822; ?>"><input type="text" name="66822pf" value="<?php echo $select_loop->pf66822; ?>"></li>
	          					<li><input type="text" name="65931tc" value="<?php echo $select_loop->tc65931; ?>"><input type="text" name="65931tf" value="<?php echo $select_loop->tf65931; ?>"><input type="text" name="65931pc" value="<?php echo $select_loop->pc65931; ?>"><input type="text" name="65931pf" placeholder="disabled" disabled=""></li>
	          					<li><input type="text" name="65913tc" value="<?php echo $select_loop->tc65913; ?>"><input type="text" name="65913tf" value="<?php echo $select_loop->tf65913; ?>"><input type="text" name="65913pc" value="<?php echo $select_loop->pc65913; ?>"><input type="text" name="65913pf" value="<?php echo $select_loop->pf65913; ?>"></li>
	          					<li><input type="text" name="65811tc" value="<?php echo $select_loop->tc65811; ?>"><input type="text" name="65811tf" value="<?php echo $select_loop->tf65811; ?>"><input type="text" name="65811pc" placeholder="disabled" disabled><input type="text" name="65811pf" placeholder="disabled" disabled></li>
	          				</ul>
	          			</div>
	          		</div>
	           		<center><button class="fix" type="submit" name="submit">Submit</button></center>
				</form>
			</div>
			
			<center><a class="center" href="../../edit.php">Edit Another</a></center>
		</div>
		
	
</body>
</html>