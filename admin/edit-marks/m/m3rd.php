<?php

	
	session_start();
	if(empty($_SESSION['roll'])){
		header('location:../../edit.php');
	}
	include('../../../connect.php');
	$object=new connect;
	$roll= $_GET['edit'];
	$select = "SELECT * FROM m3rd WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();
	
	
	if(isset($_POST['submit'])){
		/*print_r($_POST);
		print_r($_FILES);
		*/


		
		$tc67031 = $_POST['67031tc'];
		$tf67031 = $_POST['67031tf'];
		$pc67031 = $_POST['67031pc'];
		$pf67031 = $_POST['67031pf'];
		$tc67032 = $_POST['67032tc'];
		$tf67032 = $_POST['67032tf'];
		$pc67032 = $_POST['67032pc'];
		$pf67032 = $_POST['67032pf'];
		$tc66822 = $_POST['66822tc'];
		$tf66822 = $_POST['66822tf'];
		$pc66822 = $_POST['66822pc'];
		$pf66822 = $_POST['66822pf'];
		$tc65722 = $_POST['65722tc'];
		$tf65722 = $_POST['65722tf'];
		$pc65722 = $_POST['65722pc'];
		$tc65931 = $_POST['65931tc'];
		$tf65931 = $_POST['65931tf'];
		$pc65931 = $_POST['65931pc'];
		$tc65922 = $_POST['65922tc'];
		$tf65922 = $_POST['65922tf'];
		$pc65922 = $_POST['65922pc'];
		$pf65922 = $_POST['65922pf'];
		$pc66611 = $_POST['66611pc'];
		$pf66611 = $_POST['66611pf'];



		$error = 0;
		$error_msg="";
		
		if($tc67031=="" || $tc67031>20 || $tc67031<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67031tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf67031=="" || $tf67031>30 || $tf67031<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67031tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc67031=="" || $pc67031>50 || $pc67031<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67031pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf67031=="" || $pf67031>50 || $pf67031<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67031pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc67032=="" || $tc67032>40 || $tc67032<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67032tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf67032=="" || $tf67032>60 || $tf67032<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67032tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc67032=="" || $pc67032>25 || $pc67032<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67032pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf67032=="" || $pf67032>25 || $pf67032<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67032pf:</b> should be between <b>0-25</b></div>";
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
		if($tc65922=="" || $tc65922>60 || $tc65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65922=="" || $tf65922>90 || $tf65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922tf:</b> should be between <b960</b></div>";
		};
		if($pc65922=="" || $pc65922>25 || $pc65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65922=="" || $pf65922>25 || $pf65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922pf:</b> should be between <b>0-25</b></div>";
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
			$update = "UPDATE m3rd SET tc67031='$tc67031',tf67031='$tf67031',pc67031='$pc67031',pf67031='$pf67031',tc67032='$tc67032',tf67032='$tf67032',pc67032='$pc67032',pf67032='$pf67032',tc66822='$tc66822',tf66822='$tf66822',pc66822='$pc66822',pf66822='$pf66822',tc65722='$tc65722',tf65722='$tf65722',pc65722='$pc65722',tc65931='$tc65931',tf65931='$tf65931',pc65931='$pc65931',tc65922='$tc65922',tf65922='$tf65922',pc65922='$pc65922',pf65922='$pf65922',pc66611='$pc66611',pf66611='$pf66611' WHERE roll='$roll'";
		
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
	          					<li><b>67031-Machine Shop Practice-2</b></li>
	          					<li><b>67032-Foundry & Pattern Making</b></li>
	          					<li><b>66822-Electronic Engineering Fundamentals</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>66611-Computer Application</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="67031tc" value="<?php echo $select_loop->tc67031; ?>"><input type="text" name="67031tf" value="<?php echo $select_loop->tf67031; ?>"><input type="text" name="67031pc" value="<?php echo $select_loop->pc67031; ?>"><input type="text" name="67031pf" value="<?php echo $select_loop->pf67031; ?>"></li>
	          					<li><input type="text" name="67032tc" value="<?php echo $select_loop->tc67032; ?>"><input type="text" name="67032tf" value="<?php echo $select_loop->tf67032; ?>"><input type="text" name="67032pc" value="<?php echo $select_loop->pc67032; ?>"><input type="text" name="67032pf" value="<?php echo $select_loop->pf67032; ?>"></li>
	          					<li><input type="text" name="66822tc" value="<?php echo $select_loop->tc66822; ?>"><input type="text" name="66822tf" value="<?php echo $select_loop->tf66822; ?>"><input type="text" name="66822pc" value="<?php echo $select_loop->pc66822; ?>"><input type="text" name="66822pf" value="<?php echo $select_loop->pf66822; ?>"></li>
	          					<li><input type="text" name="65722tc" value="<?php echo $select_loop->tc65722; ?>"><input type="text" name="65722tf" value="<?php echo $select_loop->tf65722; ?>"><input type="text" name="65722pc" value="<?php echo $select_loop->pc65722; ?>"><input type="text" name="65722pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65931tc" value="<?php echo $select_loop->tc65931; ?>"><input type="text" name="65931tf" value="<?php echo $select_loop->tf65931; ?>"><input type="text" name="65931pc" value="<?php echo $select_loop->pc65931; ?>"><input type="text" name="65931pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65922tc" value="<?php echo $select_loop->tc65922; ?>"><input type="text" name="65922tf" value="<?php echo $select_loop->tf65922; ?>"><input type="text" name="65922pc" value="<?php echo $select_loop->pc65922; ?>"><input type="text" name="65922pf" value="<?php echo $select_loop->pf65922; ?>"></li>
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