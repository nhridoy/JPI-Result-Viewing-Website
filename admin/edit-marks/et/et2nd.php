<?php

	
	session_start();
	if(empty($_SESSION['roll'])){
		header('location:../../edit.php');
	}
	include('../../../connect.php');
	$object=new connect;
	$roll= $_GET['edit'];
	$select = "SELECT * FROM et2nd WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();
	
	
	if(isset($_POST['submit'])){
		/*print_r($_POST);
		print_r($_FILES);
		*/


		
		$tc66721 = $_POST['66721tc'];
		$tf66721 = $_POST['66721tf'];
		$pc66721 = $_POST['66721pc'];
		$pf66721 = $_POST['66721pf'];
		$tc66722 = $_POST['66722tc'];
		$tf66722 = $_POST['66722tf'];
		$pc66722 = $_POST['66722pc'];
		$pf66722 = $_POST['66722pf'];
		$tc65711 = $_POST['65711tc'];
		$tf65711 = $_POST['65711tf'];
		$pc65711 = $_POST['65711pc'];
		$tc65712 = $_POST['65712tc'];
		$tf65712 = $_POST['65712tf'];
		$tc65921 = $_POST['65921tc'];
		$tf65921 = $_POST['65921tf'];
		$pc65921 = $_POST['65921pc'];
		$tc65912 = $_POST['65912tc'];
		$tf65912 = $_POST['65912tf'];
		$pc65912 = $_POST['65912pc'];
		$pf65912 = $_POST['65912pf'];
		$pc66611 = $_POST['66611pc'];
		$pf66611 = $_POST['66611pf'];



		$error = 0;
		$error_msg="";
		
		if($tc66721=="" || $tc66721>60 || $tc66721<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66721tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf66721=="" || $tf66721>90 || $tf66721<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66721tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc66721=="" || $pc66721>25 || $pc66721<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66721pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66721=="" || $pf66721>25 || $pf66721<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66721pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc66722=="" || $tc66722>40 || $tc66722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66722tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66722=="" || $tf66722>60 || $tf66722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66722tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66722=="" || $pc66722>25 || $pc66722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66722pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66722=="" || $pf66722>25 || $pf66722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66722pf:</b> should be between <b>25</b></div>";
		};
		if($tc65711=="" || $tc65711>60 || $tc65711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65711tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65711=="" || $tf65711>90 || $tf65711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65711tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65711=="" || $pc65711>50 || $pc65711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65711pc:</b> should be between <b>0-50</b></div>";
		};
		if($tc65712=="" || $tc65712>40 || $tc65712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65712tc:</b> should be between <b>40</b></div>";
		};
		if($tf65712=="" || $tf65712>60 || $tf65712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65712tf:</b> should be between <b>0-60</b></div>";
		};
		if($tc65921=="" || $tc65921>60 || $tc65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65921=="" || $tf65921>90 || $tf65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65921=="" || $pc65921>50 || $pc65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921pc:</b> should be between <b>0-50</b></div>";
		};
		if($tc65912=="" || $tc65912>60 || $tc65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65912=="" || $tf65912>90 || $tf65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65912=="" || $pc65912>25 || $pc65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912pc:</b> should be between <b>25</b></div>";
		};
		if($pf65912=="" || $pf65912>25 ||$pf65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc66611=="" || $pc66611>50 || $pc66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66611=="" || $pf66611>50 || $pf66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pf:</b> should be between <b>0-50</b></div>";
		};




		if($error==0){
			$update = "UPDATE et2nd SET tc66721='$tc66721',tf66721='$tf66721',pc66721='$pc66721',pf66721='$pf66721',tc66722='$tc66722',tf66722='$tf66722',pc66722='$pc66722',pf66722='$pf66722',tc65711='$tc65711',tf65711='$tf65711',pc65711='$pc65711',tc65712='$tc65712',tf65712='$tf65712',tc65921='$tc65921',tf65921='$tf65921',pc65921='$pc65921',tc65912='$tc65912',tf65912='$tf65912',pc65912='$pc65912',pf65912='$pf65912',pc66611='$pc66611',pf66611='$pf66611' WHERE roll='$roll'";
		
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
	          					<li><b>66721-Electrical Circuits-1</b></li>
	          					<li><b>66722-Electrical Appliance</b></li>
	          					<li><b>65711-Bangla</b></li>
	          					<li><b>65712-English</b></li>
	          					<li><b>65921-Mathematics-2</b></li>
	          					<li><b>65912-Physics-1</b></li>
	          					<li><b>66611-Computer Application</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66721tc" value="<?php echo $select_loop->tc66721; ?>"><input type="text" name="66721tf" value="<?php echo $select_loop->tf66721; ?>"><input type="text" name="66721pc" value="<?php echo $select_loop->pc66721; ?>"><input type="text" name="66721pf" value="<?php echo $select_loop->pf66721; ?>"></li>
	          					<li><input type="text" name="66722tc" value="<?php echo $select_loop->tc66722; ?>"><input type="text" name="66722tf" value="<?php echo $select_loop->tf66722; ?>"><input type="text" name="66722pc" value="<?php echo $select_loop->pc66722; ?>"><input type="text" name="66722pf" value="<?php echo $select_loop->pf66722; ?>"></li>
	          					<li><input type="text" name="65711tc" value="<?php echo $select_loop->tc65711; ?>"><input type="text" name="65711tf" value="<?php echo $select_loop->tf65711; ?>"><input type="text" name="65711pc" value="<?php echo $select_loop->pc65711; ?>"><input type="text" name="65711pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65712tc" value="<?php echo $select_loop->tc65712; ?>"><input type="text" name="65712tf" value="<?php echo $select_loop->tf65712; ?>"><input type="text" name="65712pc" placeholder="disabled" disabled><input type="text" name="65712pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65921tc" value="<?php echo $select_loop->tc65921; ?>"><input type="text" name="65921tf" value="<?php echo $select_loop->tf65921; ?>"><input type="text" name="65921pc" value="<?php echo $select_loop->pc65921; ?>"><input type="text" name="65921pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65912tc" value="<?php echo $select_loop->tc65912; ?>"><input type="text" name="65912tf" value="<?php echo $select_loop->tf65912; ?>"><input type="text" name="65912pc" value="<?php echo $select_loop->pc65912; ?>"><input type="text" name="65912pf" value="<?php echo $select_loop->pf65912; ?>"></li>
	          					<li><input type="text" name="66611tc" placeholder="disabled" disabled><input type="text" name="66611tf" placeholder="disabled" disabled><input type="text" name="66611pc" value="<?php echo $select_loop->pc66611; ?>"><input type="text" name="66611pf" value="<?php echo $select_loop->pf66611; ?>"></li>
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