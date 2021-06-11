<?php

	
	session_start();
	if(empty($_SESSION['roll'])){
		header('location:../../edit.php');
	}
	include('../../../connect.php');
	$object=new connect;
	$roll= $_GET['edit'];
	$select = "SELECT * FROM pw2nd WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();
	
	
	if(isset($_POST['submit'])){
		/*print_r($_POST);
		print_r($_FILES);
		*/


		
		$tc67121 = $_POST['67121tc'];
		$tf67121 = $_POST['67121tf'];
		$pc67121 = $_POST['67121pc'];
		$pf67121 = $_POST['67121pf'];
		$tc66711 = $_POST['66711tc'];
		$tf66711 = $_POST['66711tf'];
		$pc66711 = $_POST['66711pc'];
		$pf66711 = $_POST['66711pf'];
		$pc65812 = $_POST['65812pc'];
		$pf65812 = $_POST['65812pf'];
		$tc65921 = $_POST['65921tc'];
		$tf65921 = $_POST['65921tf'];
		$pc65921 = $_POST['65921pc'];
		$tc65922 = $_POST['65922tc'];
		$tf65922 = $_POST['65922tf'];
		$pc65922 = $_POST['65922pc'];
		$pf65922 = $_POST['65922pf'];
		$tc65722 = $_POST['65722tc'];
		$tf65722 = $_POST['65722tf'];
		$pc65722 = $_POST['65722pc'];



		$error = 0;
		$error_msg="";
		
		if($tc67121=="" || $tc67121>40 || $tc67121<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67121tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf67121=="" || $tf67121>60 || $tf67121<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67121tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc67121=="" || $pc67121>50 || $pc67121<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67121pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf67121=="" || $pf67121>50 || $pf67121<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67121pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc66711=="" || $tc66711>60 || $tc66711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66711tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf66711=="" || $tf66711>90 || $tf66711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66711tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc66711=="" || $pc66711>25 || $pc66711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66711pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66711=="" || $pf66711>25 || $pf66711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66711pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc65812=="" || $pc65812>25 || $pc65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65812=="" || $pf65812>25 || $pf65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65921=="" || $tc65921>60 || $tc65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tc:</b> should be between <b-60</b></div>";
		};
		if($tf65921=="" || $tf65921>90 || $tf65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tf:</b> should be between <b-90</b></div>";
		};
		if($pc65921=="" || $pc65921>50 || $pc65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921pc:</b> should be between <b>0-50</b></div>";
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




		if($error==0){
			$update = "UPDATE pw2nd SET tc67121='$tc67121',tf67121='$tf67121',pc67121='$pc67121',pf67121='$pf67121',tc66711='$tc66711',tf66711='$tf66711',pc66711='$pc66711',pf66711='$pf66711',pc65812='$pc65812',pf65812='$pf65812',tc65921='$tc65921',tf65921='$tf65921',pc65921='$pc65921',tc65922='$tc65922',tf65922='$tf65922',pc65922='$pc65922',pf65922='$pf65922',tc65722='$tc65722',tf65722='$tf65722',pc65722='$pc65722' WHERE roll='$roll'";
		
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
	          					<li><b>67121-Workshop Safety & Management</b></li>
	          					<li><b>66711-Basic Electricity</b></li>
	          					<li><b>65812-Physical Education & Life Skill Development</b></li>
	          					<li><b>65921-Mathematics-2</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="67121tc" value="<?php echo $select_loop->tc67121; ?>"><input type="text" name="67121tf" value="<?php echo $select_loop->tf67121; ?>"><input type="text" name="67121pc" value="<?php echo $select_loop->pc67121; ?>"><input type="text" name="67121pf" value="<?php echo $select_loop->pf67121; ?>"></li>
	          					<li><input type="text" name="66711tc" value="<?php echo $select_loop->tc66711; ?>"><input type="text" name="66711tf" value="<?php echo $select_loop->tf66711; ?>"><input type="text" name="66711pc" value="<?php echo $select_loop->pc66711; ?>"><input type="text" name="66711pf" value="<?php echo $select_loop->pf66711; ?>"></li>
	          					<li><input type="text" name="65812tc" placeholder="disabled" disabled><input type="text" name="65812tf" placeholder="disabled" disabled><input type="text" name="65812pc" value="<?php echo $select_loop->pc65812; ?>"><input type="text" name="65812pf" value="<?php echo $select_loop->pf65812; ?>"></li>
	          					<li><input type="text" name="65921tc" value="<?php echo $select_loop->tc65921; ?>"><input type="text" name="65921tf" value="<?php echo $select_loop->tf65921; ?>"><input type="text" name="65921pc" value="<?php echo $select_loop->pc65921; ?>"><input type="text" disabled name="65921pf" placeholder="disabled"></li>
	          					<li><input type="text" name="65922tc" value="<?php echo $select_loop->tc65922; ?>"><input type="text" name="65922tf" value="<?php echo $select_loop->tf65922; ?>"><input type="text" name="65922pc" value="<?php echo $select_loop->pc65922; ?>"><input type="text" name="65922pf" value="<?php echo $select_loop->pf65922; ?>"></li>
	          					<li><input type="text" name="65722tc" value="<?php echo $select_loop->tc65722; ?>"><input type="text" name="65722tf" value="<?php echo $select_loop->tf65722; ?>"><input type="text" name="65722pc" value="<?php echo $select_loop->pc65722; ?>"><input type="text" name="65722pf" placeholder="disabled" disabled></li>
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