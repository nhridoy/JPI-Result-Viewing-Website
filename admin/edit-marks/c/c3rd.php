<?php

	
	session_start();
	if(empty($_SESSION['roll'])){
		header('location:../../edit.php');
	}
	include('../../../connect.php');
	$object=new connect;
	$roll= $_GET['edit'];
	$select = "SELECT * FROM c3rd WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();
	
	
	if(isset($_POST['submit'])){
		/*print_r($_POST);
		print_r($_FILES);
		*/


		
		$tc66431 = $_POST['66431tc'];
		$tf66431 = $_POST['66431tf'];
		$pc66431 = $_POST['66431pc'];
		$pf66431 = $_POST['66431pf'];
		$tc66432 = $_POST['66432tc'];
		$tf66432 = $_POST['66432tf'];
		$pc66432 = $_POST['66432pc'];
		$pf66432 = $_POST['66432pf'];
		$tc66433 = $_POST['66433tc'];
		$tf66433 = $_POST['66433tf'];
		$pc66433 = $_POST['66433pc'];
		$pf66433 = $_POST['66433pf'];
		$pc66434 = $_POST['66434pc'];
		$pf66434 = $_POST['66434pf'];
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
		
		if($tc66431=="" || $tc66431>20 || $tc66431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66431tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf66431=="" || $tf66431>30 || $tf66431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66431tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc66431=="" || $pc66431>50 || $pc66431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66431pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66431=="" || $pf66431>50 || $pf66431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66431pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc66432=="" || $tc66432>40 || $tc66432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66432tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66432=="" || $tf66432>60 || $tf66432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66432tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66432=="" || $pc66432>25 || $pc66432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66432pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66432=="" || $pf66432>25 || $pf66432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66432pf:</b> should be between <b>25</b></div>";
		};
		if($tc66433=="" || $tc66433>40 || $tc66433<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66433tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66433=="" || $tf66433>60 || $tf66433<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66433tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66433=="" || $pc66433>25 || $pc66433<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66433pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66433=="" || $pf66433>25 || $pf66433<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66433pf:</b> should be between <b>25</b></div>";
		};
		if($pc66434=="" || $pc66434>25 || $pc66434<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66434pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66434=="" || $pf66434>25 || $pf66434<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66434pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65931=="" || $tc65931>60 || $tc65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65931=="" || $tf65931>90 ||$tf65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tf:</b> should be between <b>0-90</b></div>";
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
			$error_msg.="<div class='alert'><b>&#9888; 65913pf:</b> should be between <b>25</b></div>";
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
			$update = "UPDATE c3rd SET tc66431='$tc66431',tf66431='$tf66431',pc66431='$pc66431',pf66431='$pf66431',tc66432='$tc66432',tf66432='$tf66432',pc66432='$pc66432',pf66432='$pf66432',tc66433='$tc66433',tf66433='$tf66433',pc66433='$pc66433',pf66433='$pf66433',pc66434='$pc66434',pf66434='$pf66434',tc65931='$tc65931',tf65931='$tf65931',pc65931='$pc65931',tc65913='$tc65913',tf65913='$tf65913',pc65913='$pc65913',pf65913='$pf65913',tc65811='$tc65811',tf65811='$tf65811' WHERE roll='$roll'";
		
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
	          					<li><b>66431-Civil Engineering Drawing-1</b></li>
	          					<li><b>66432-Surveying-1</b></li>
	          					<li><b>66433-Construction Process-1</b></li>
	          					<li><b>66434-Civil Workshop Practice</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65913-Chemistry</b></li>
	          					<li><b>65811-Social Science</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66431tc" value="<?php echo $select_loop->tc66431; ?>"><input type="text" name="66431tf" value="<?php echo $select_loop->tf66431; ?>"><input type="text" name="66431pc" value="<?php echo $select_loop->pc66431; ?>"><input type="text" name="66431pf" value="<?php echo $select_loop->pf66431; ?>"></li>
	          					<li><input type="text" name="66432tc" value="<?php echo $select_loop->tc66432; ?>"><input type="text" name="66432tf" value="<?php echo $select_loop->tf66432; ?>"><input type="text" name="66432pc" value="<?php echo $select_loop->pc66432; ?>"><input type="text" name="66432pf" value="<?php echo $select_loop->pf66432; ?>"></li>
	          					<li><input type="text" name="66433tc" value="<?php echo $select_loop->tc66433; ?>"><input type="text" name="66433tf" value="<?php echo $select_loop->tf66433; ?>"><input type="text" name="66433pc" value="<?php echo $select_loop->pc66433; ?>"><input type="text" name="66433pf" value="<?php echo $select_loop->pf66433; ?>"></li>
	          					<li><input type="text" name="66434tc" placeholder="disabled" disabled><input type="text" name="66434tf" placeholder="disabled" disabled><input type="text" name="66434pc" value="<?php echo $select_loop->pc66434; ?>"><input type="text" name="66434pf" value="<?php echo $select_loop->pf66434; ?>"></li>
	          					<li><input type="text" name="65931tc" value="<?php echo $select_loop->tc65931; ?>"><input type="text" name="65931tf" value="<?php echo $select_loop->tf65931; ?>"><input type="text" name="65931pc" value="<?php echo $select_loop->pc65931; ?>"><input type="text" name="65931pf" placeholder="disabled" disabled></li>
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