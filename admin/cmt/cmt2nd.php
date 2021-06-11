<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$pc66621 = $_POST['66621pc'];
		$pf66621 = $_POST['66621pf'];
		$pc66612 = $_POST['66612pc'];
		$pf66612 = $_POST['66612pf'];
		$pc66623 = $_POST['66623pc'];
		$pf66623 = $_POST['66623pf'];
		$tc66822 = $_POST['66822tc'];
		$tf66822 = $_POST['66822tf'];
		$pc66822 = $_POST['66822pc'];
		$pf66822 = $_POST['66822pf'];
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
		
		if($roll==""){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; Roll:</b> Required.</div>";
		};
		if($month==0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; Month:</b> Required.</div>";
		};
		if($year==0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; Year:</b> Required.</div>";
		};
		if($pc66621=="" || $pc66621>50 || $pc66621<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66621pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66621=="" || $pf66621>50 || $pf66621<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66621pf:</b> should be between <b>0-50</b></div>";
		};
		if($pc66612=="" || $pc66612>50 || $pc66612<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66612tc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66612=="" || $pf66612>50 || $pf66612<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66612pf:</b> should be between <b>0-90</b></div>";
		};
		if($pc66623=="" || $pc66623>50 || $pc66623<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66623pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66623=="" || $pf66623>50 || $pf66623<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66623pf:</b> should be between <b>0-50</b></div>";
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
		if($tc65921=="" || $tc65921>60 ||$tc65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65921=="" || $tf65921>90 ||$tf65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65921=="" || $pc65921>50 ||$pc65921<0){
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
			$object = new connect;
			$insert="INSERT into cmt2nd VALUES('','$roll','$month','$year','$pc66621','$pf66621','$pc66612','$pf66612','$pc66623','$pf66623','$tc66822','$tf66822','$pc66822','$pf66822','$tc65921','$tf65921','$pc65921','$tc65922','$tf65922','$pc65922','$pf65922','$tc65722','$tf65722','$pc65722')";

			
			$object->insert($insert);
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
	<title>Submit Marks</title>
	<link rel="stylesheet" href="../../css/style.css" type="text/css">
</head>
<body>
	
		<div class="admin_main">
			<h2>Enter Marks</h2><hr><br>
			<div class="form fix marks">
				<form method="post" enctype="multipart/form-data">
					<div class="roll">
		          		<label for="roll"><span class="number">1</span>Enter Roll:</label><br>
		          		<input type="text" id="roll" name="roll" placeholder="Enter Roll" /><br>
		          		<label for="month"><span class="number">2</span>Exam Month:</label><br>
			          		<select id="month" name="month">
			          			<optgroup label="Select Month">
			          				<?php
										$object = new connect;
										$select_option="SELECT * FROM month";
										$option_select=$object->option($select_option);
										while($loop_result = $option_select->fetch_object()){?>
										<option value='<?php echo $loop_result-> id;?>'> <?php echo $loop_result-> month_name; ?></option>;
									<?php } ?>
			          			</optgroup>
		          			</select><br>
		          			<label for="year"><span class="number">3</span>Exam Year:</label><br>
			          		<select id="year" name="year">
			          			<optgroup label="Select Year">
			          				<?php
										$object = new connect;
										$select_option="SELECT * FROM year";
										$option_select=$object->option($select_option);
										while($loop_result = $option_select->fetch_object()){?>
										<option value='<?php echo $loop_result-> id;?>'> <?php echo $loop_result-> year_name; ?></option>;
									<?php } ?>
			          			</optgroup>
		          			</select><br><hr><hr>
	          		</div>
	          		<div class="ini">
	          		<label for="marks"><span class="number">4</span>Enter Marks:</label><br>
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
	          					<li><b>66621-Database Application</b></li>
	          					<li><b>66612-Computer Lab Practice</b></li>
	          					<li><b>66623-Graphics Design-1</b></li>
	          					<li><b>66822-Electronic Engineering Fundamentals</b></li>
	          					<li><b>65921-Mathematics-2</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66621tc" placeholder="disabled" disabled><input type="text" name="66621tf" placeholder="disabled" disabled><input type="text" name="66621pc" placeholder="66621 PC"><input type="text" name="66621pf" placeholder="66621 PF"></li>
	          					<li><input type="text" name="66612tc" placeholder="disabled" disabled><input type="text" name="66612tf" placeholder="disabled" disabled><input type="text" name="66612pc" placeholder="66612 PC"><input type="text" name="66612pf" placeholder="66612 PF"></li>
	          					<li><input type="text" name="66623tc" placeholder="disabled" disabled><input type="text" name="66623tf" placeholder="disabled" disabled><input type="text" name="66623pc" placeholder="66623 PC"><input type="text" name="66623pf" placeholder="66623 PF"></li>
	          					<li><input type="text" name="66822tc" placeholder="66822 TC"><input type="text" name="66822tf" placeholder="66822 TF"><input type="text" name="66822pc" placeholder="66822 PC"><input type="text" name="66822pf" placeholder="66822 PF"></li>
	          					<li><input type="text" name="65921tc" placeholder="65921 TC"><input type="text" name="65921tf" placeholder="65921 TF"><input type="text" name="65921pc" placeholder="65921 PC"><input type="text" name="65921pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65922tc" placeholder="65922 TC"><input type="text" name="65922tf" placeholder="65922 TF"><input type="text" name="65922pc" placeholder="65922 PC"><input type="text" name="65922pf" placeholder="65922 PF"></li>
	          					<li><input type="text" name="65722tc" placeholder="65722 TC"><input type="text" name="65722tf" placeholder="65722 TF"><input type="text" name="65722pc" placeholder="65722 PC"><input type="text" name="65722pf" placeholder="disabled" disabled></li>
	          				</ul>
	          			</div>
	          		</div>
	           		<center><button class="fix" type="submit" name="submit">Submit</button></center>
				</form>
			</div>
			
			<center><a class="center" href="../index.php">Home</a></center>
		</div>
		
	
</body>
</html>