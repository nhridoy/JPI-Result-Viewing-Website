<?php

	
	session_start();
	if(empty($_SESSION['roll'])){
		header('location:../../edit.php');
	}
	include('../../../connect.php');
	$object=new connect;
	$roll= $_GET['edit'];
	$select = "SELECT * FROM etc3rd WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();
	
	
	if(isset($_POST['submit'])){
		/*print_r($_POST);
		print_r($_FILES);
		*/


		
		$tc66831 = $_POST['66831tc'];
		$tf66831 = $_POST['66831tf'];
		$pc66831 = $_POST['66831pc'];
		$pf66831 = $_POST['66831pf'];
		$pc66832 = $_POST['66832pc'];
		$pf66832 = $_POST['66832pf'];
		$tc66833 = $_POST['66833tc'];
		$tf66833 = $_POST['66833tf'];
		$pc66833 = $_POST['66833pc'];
		$pf66833 = $_POST['66833pf'];
		$tc66835 = $_POST['66835tc'];
		$tf66835 = $_POST['66835tf'];
		$pc66835 = $_POST['66835pc'];
		$pf66835 = $_POST['66835pf'];
		$tc65931 = $_POST['65931tc'];
		$tf65931 = $_POST['65931tf'];
		$pc65931 = $_POST['65931pc'];
		$tc65922 = $_POST['65922tc'];
		$tf65922 = $_POST['65922tf'];
		$pc65922 = $_POST['65922pc'];
		$pf65922 = $_POST['65922pf'];
		$tc65722 = $_POST['65722tc'];
		$tf65722 = $_POST['65722tf'];
		$pc65722 = $_POST['65722pc'];



		$error = 0;
		$error_msg="";
		
		if($tc66831=="" || $tc66831>60 || $tc66831<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66831tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf66831=="" || $tf66831>90 || $tf66831<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66831tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc66831=="" || $pc66831>25 || $pc66831<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66831pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66831=="" || $pf66831>25 || $pf66831<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66831pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc66832=="" || $pc66832>50 || $pc66832<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66832pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66832=="" || $pf66832>50 || $pf66832<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66832pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc66833=="" || $tc66833>40 || $tc66833<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66833tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66833=="" || $tf66833>60 || $tf66833<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66833tf:</b> should be between <b>60</b></div>";
		};
		if($pc66833=="" || $pc66833>25 || $pc66833<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66833pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66833=="" || $pf66833>25 || $pf66833<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66833pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc66835=="" || $tc66835>40 || $tc66835<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66835tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66835=="" || $tf66835>60 || $tf66835<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66835tf:</b> should be between <b>60</b></div>";
		};
		if($pc66835=="" || $pc66835>25 || $pc66835<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66835pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66835=="" || $pf66835>25 || $pf66835<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66835pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65931=="" || $tc65931>60 || $tc65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65931=="" || $tf65931>90 || $tf65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tf:</b> should be between <b>0-90</b></div>";
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
			$update = "UPDATE etc3rd SET tc66831='$tc66831',tf66831='$tf66831',pc66831='$pc66831',pf66831='$pf66831',pc66832='$pc66832',pf66832='$pf66832',tc66833='$tc66833',tf66833='$tf66833',pc66833='$pc66833',pf66833='$pf66833',tc66835='$tc66835',tf66835='$tf66835',pc66835='$pc66835',pf66835='$pf66835',tc65931='$tc65931',tf65931='$tf65931',pc65931='$pc65931',tc65922='$tc65922',tf65922='$tf65922',pc65922='$pc65922',pf65922='$pf65922',tc65722='$tc65722',tf65722='$tf65722',pc65722='$pc65722' WHERE roll='$roll'";
		
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
	          					<li><b>66831-Advanced Electronic Device & Circuits</b></li>
	          					<li><b>66832-PCB Design & Prototyping</b></li>
	          					<li><b>66833-Electronic Appliance</b></li>
	          					<li><b>66835-Basic Communication Engineering</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66831tc" value="<?php echo $select_loop->tc66831; ?>"><input type="text" name="66831tf" value="<?php echo $select_loop->tf66831; ?>"><input type="text" name="66831pc" value="<?php echo $select_loop->pc66831; ?>"><input type="text" name="66831pf" value="<?php echo $select_loop->pf66831; ?>"></li>
	          					<li><input type="text" name="66832tc" placeholder="disabled" disabled><input type="text" name="66832tf" placeholder="disabled" disabled><input type="text" name="66832pc" value="<?php echo $select_loop->pc66832; ?>"><input type="text" name="66832pf" value="<?php echo $select_loop->pf66832; ?>"></li>
	          					<li><input type="text" name="66833tc" value="<?php echo $select_loop->tc66833; ?>"><input type="text" name="66833tf" value="<?php echo $select_loop->tf66833; ?>"><input type="text" name="66833pc" value="<?php echo $select_loop->pc66833; ?>"><input type="text" name="66833pf" value="<?php echo $select_loop->pf66833; ?>"></li>
	          					<li><input type="text" name="66835tc" value="<?php echo $select_loop->tc66835; ?>"><input type="text" name="66835tf" value="<?php echo $select_loop->tf66835; ?>"><input type="text" name="66835pc" value="<?php echo $select_loop->pc66835; ?>"><input type="text" name="66835pf" value="<?php echo $select_loop->pf66835; ?>"></li>
	          					<li><input type="text" name="65931tc" value="<?php echo $select_loop->tc65931; ?>"><input type="text" name="65931tf" value="<?php echo $select_loop->tf65931; ?>"><input type="text" name="65931pc" value="<?php echo $select_loop->pc65931; ?>"><input type="text" name="65931pf" placeholder="disabled" disabled></li>
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