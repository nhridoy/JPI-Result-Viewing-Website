<?php

	
	session_start();
	if(empty($_SESSION['roll'])){
		header('location:../../edit.php');
	}
	include('../../../connect.php');
	$object=new connect;
	$roll= $_GET['edit'];
	$select = "SELECT * FROM c2nd WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();
	
	
	if(isset($_POST['submit'])){
		/*print_r($_POST);
		print_r($_FILES);
		*/


		
		$tc66421 = $_POST['66421tc'];
		$tf66421 = $_POST['66421tf'];
		$pc66421 = $_POST['66421pc'];
		$pf66421 = $_POST['66421pf'];
		$tc65722 = $_POST['65722tc'];
		$tf65722 = $_POST['65722tf'];
		$pc65722 = $_POST['65722pc'];
		$pc66611 = $_POST['66611pc'];
		$pf66611 = $_POST['66611pf'];
		$tc65921 = $_POST['65921tc'];
		$tf65921 = $_POST['65921tf'];
		$pc65921 = $_POST['65921pc'];
		$tc66822 = $_POST['66822tc'];
		$tf66822 = $_POST['66822tf'];
		$pc66822 = $_POST['66822pc'];
		$pf66822 = $_POST['66822pf'];
		$tc65922 = $_POST['65922tc'];
		$tf65922 = $_POST['65922tf'];
		$pc65922 = $_POST['65922pc'];
		$pf65922 = $_POST['65922pf'];
		$pc65812 = $_POST['65812pc'];
		$pf65812 = $_POST['65812pf'];



		$error = 0;
		$error_msg="";
		
		if($tc66421=="" || $tc66421>40 || $tc66421<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66421tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66421=="" || $tf66421>60 || $tf66421<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66421tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66421=="" || $pc66421>25 || $pc66421<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66421pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66421=="" || $pf66421>25 || $pf66421<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66421pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65722=="" || $tc65722>20 || $tc65722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65722tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf65722=="" || $tf65722>30 || $tf65722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65722tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc65722=="" || $pc65722>50 || $pc65722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65722pc:</b> should be between <b>0-50</b></div>";
		};
		if($pc66611=="" || $pc66611>50 || $pc66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pc:</b> should be between <b>50</b></div>";
		};
		if($pf66611=="" || $pf66611>50 || $pf66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pf:</b> should be between <b>0-50</b></div>";
		};if($tc65921=="" || $tc65921>60 || $tc65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65921=="" || $tf65921>90 || $tf65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65921=="" || $pc65921>50 ||$pc65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921pc:</b> should be between <b>0-50</b></div>";
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
		if($pf66822=="" || $pf66822>25 ||$pf66822<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66822pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65922=="" || $tc65922>60 || $tc65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65922=="" || $tf65922>90 || $tf65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65922=="" || $pc65922>25 || $pc65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65922=="" || $pf65922>25 || $pf65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc65812=="" || $pc65812>25 || $pc65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65812=="" || $pf65812>25 || $pf65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pf:</b> should be between <b>0-25</b></div>";
		};




		if($error==0){
			$update = "UPDATE c2nd SET tc66421='$tc66421',tf66421='$tf66421',pc66421='$pc66421',pf66421='$pf66421',tc65722='$tc65722',tf65722='$tf65722',pc65722='$pc65722',pc66611='$pc66611',pf66611='$pf66611',tc65921='$tc65921',tf65921='$tf65921',pc65921='$pc65921',tc66822='$tc66822',tf66822='$tf66822',pc66822='$pc66822',pf66822='$pf66822',tc65922='$tc65922',tf65922='$tf65922',pc65922='$pc65922',pf65922='$pf65922',pc65812='$pc65812',pf65812='$pf65812' WHERE roll='$roll'";
		
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
	          					<li><b>66421-Civil Engineering Material</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          					<li><b>66611-Computer Application</b></li>
	          					<li><b>65921-Mathematics-2</b></li>
	          					<li><b>66822-Electronic Engineering Fundamentals</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>65812-Physical Education & Life Skill Development</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66421tc" value="<?php echo $select_loop->tc66421; ?>"><input type="text" name="66421tf" value="<?php echo $select_loop->tf66421; ?>"><input type="text" name="66421pc" value="<?php echo $select_loop->pc66421; ?>"><input type="text" name="66421pf" value="<?php echo $select_loop->pf66421; ?>"></li>
	          					<li><input type="text" name="65722tc" value="<?php echo $select_loop->tc65722; ?>"><input type="text" name="65722tf" value="<?php echo $select_loop->tf65722; ?>"><input type="text" name="65722pc" value="<?php echo $select_loop->pc65722; ?>"><input type="text" name="65722pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="66611tc" placeholder="disabled" disabled><input type="text" name="66611tf" placeholder="disabled" disabled><input type="text" name="66611pc" value="<?php echo $select_loop->pc66611; ?>"><input type="text" name="66611pf" value="<?php echo $select_loop->pf66611; ?>"></li>
	          					<li><input type="text" name="65921tc" value="<?php echo $select_loop->tc65921; ?>"><input type="text" name="65921tf" value="<?php echo $select_loop->tf65921; ?>"><input type="text" name="65921pc" value="<?php echo $select_loop->pc65921; ?>"><input type="text" name="65921pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="66822tc" value="<?php echo $select_loop->tc66822; ?>"><input type="text" name="66822tf" value="<?php echo $select_loop->tf66822; ?>"><input type="text" name="66822pc" value="<?php echo $select_loop->pc66822; ?>"><input type="text" name="66822pf" value="<?php echo $select_loop->pf66822; ?>"></li>
	          					<li><input type="text" name="65922tc" value="<?php echo $select_loop->tc65922; ?>"><input type="text" name="65922tf" value="<?php echo $select_loop->tf65922; ?>"><input type="text" name="65922pc" value="<?php echo $select_loop->pc65922; ?>"><input type="text" name="65922pf" value="<?php echo $select_loop->pf65922; ?>"></li>
	          					<li><input type="text" name="65812tc" placeholder="disabled" disabled><input type="text" name="65812tf" placeholder="disabled" disabled><input type="text" name="65812pc" value="<?php echo $select_loop->pc65812; ?>"><input type="text" name="65812pf" value="<?php echo $select_loop->pf65812; ?>"></li>
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