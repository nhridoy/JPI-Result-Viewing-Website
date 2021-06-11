<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$pc61011 = $_POST['61011pc'];
		$pf61011 = $_POST['61011pf'];
		$tc67013 = $_POST['67013tc'];
		$tf67013 = $_POST['67013tf'];
		$tc66712 = $_POST['66712tc'];
		$tf66712 = $_POST['66712tf'];
		$pc66712 = $_POST['66712pc'];
		$pf66712 = $_POST['66712pf'];
		$pc65812 = $_POST['65812pc'];
		$pf65812 = $_POST['65812pf'];
		$tc65911 = $_POST['65911tc'];
		$tf65911 = $_POST['65911tf'];
		$pc65911 = $_POST['65911pc'];
		$tc65711 = $_POST['65711tc'];
		$tf65711 = $_POST['65711tf'];
		$pc65711 = $_POST['65711pc'];
		$tc65913 = $_POST['65913tc'];
		$tf65913 = $_POST['65913tf'];
		$pc65913 = $_POST['65913pc'];
		$pf65913 = $_POST['65913pf'];



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
		if($pc61011=="" || $pc61011>50 || $pc61011<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 61011pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf61011=="" || $pf61011>50 || $pf61011<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 61011pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc67013=="" || $tc67013>40 || $tc67013<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67013tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf67013=="" || $tf67013>60 || $tf67013<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67013tf:</b> should be between <b>0-60</b></div>";
		};
		if($tc66712=="" || $tc66712>60 || $tc66712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66712tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf66712=="" || $tf66712>90 || $tf66712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66712tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc66712=="" || $pc66712>25 || $pc66712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66712pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66712=="" || $pf66712>25 || $pf66712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66712pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc65812=="" || $pc65812>25 || $pc65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65812=="" || $pf65812>25 || $pf65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65911=="" || $tc65911>60 || $tc65911<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65911tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65911=="" || $tf65911>90 || $tf65911<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65911tf:</b> should be between <b960</b></div>";
		};
		if($pc65911=="" || $pc65911>50 || $pc65911<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65911pc:</b> should be between <b>0-50</b></div>";
		};
		if($tc65711=="" || $tc65711>60 || $tc65711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65711tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65711=="" || $tf65711>90 || $tf65711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65711tf:</b> should be between <b960</b></div>";
		};
		if($pc65711=="" || $pc65711>50 || $pc65711<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65711pc:</b> should be between <b>0-50</b></div>";
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





		if($error==0){
			$object = new connect;
			$insert="INSERT into m1st VALUES('','$roll','$month','$year','$pc61011','$pf61011','$tc67013','$tf67013','$tc66712','$tf66712','$pc66712','$pf66712','$pc65812','$pf65812','$tc65911','$tf65911','$pc65911','$tc65711','$tf65711','$pc65711','$tc65913','$tf65913','$pc65913','$pf65913')";

			
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
			          		<select id="dep" name="month">
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
		          			<label for="month"><span class="number">3</span>Exam Year:</label><br>
			          		<select id="dep" name="year">
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
	          					<li><b>61011-Engineering Drawing</b></li>
	          					<li><b>67013-Mechanical Engineering Materials</b></li>
	          					<li><b>66712-Electrical Engineering Fundamentals</b></li>
	          					<li><b>65812-Physical Education & Life Skill Development</b></li>
	          					<li><b>65911-Mathematics-1</b></li>
	          					<li><b>65711-Bangla</b></li>
	          					<li><b>65913-Chemistry</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="61011tc" placeholder="disabled" disabled><input type="text" name="61011tf" placeholder="disabled" disabled><input type="text" name="61011pc" placeholder="61011 PC"><input type="text" name="61011pf" placeholder="61011 PF"></li>
	          					<li><input type="text" name="67013tc" placeholder="67013 TC"><input type="text" name="67013tf" placeholder="67013 TF"><input type="text" name="67013pc" placeholder="disabled" disabled><input type="text" name="67013pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="66712tc" placeholder="66712 TC"><input type="text" name="66712tf" placeholder="66712 TF"><input type="text" name="66712pc" placeholder="66712 PC"><input type="text" name="66712pf" placeholder="66712 PF"></li>
	          					<li><input type="text" name="65812tc" placeholder="disabled" disabled><input type="text" name="65812tf" placeholder="disabled" disabled><input type="text" name="65812pc" placeholder="65812 PC"><input type="text" name="65812pf" placeholder="65812 PF"></li>
	          					<li><input type="text" name="65911tc" placeholder="65911 TC"><input type="text" name="65911tf" placeholder="65911 TF"><input type="text" name="65911pc" placeholder="65911 PC"><input type="text" name="65911pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65711tc" placeholder="65711 TC"><input type="text" name="65711tf" placeholder="65711 TF"><input type="text" name="65711pc" placeholder="65711 PC"><input type="text" name="65711pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65913tc" placeholder="65913 TC"><input type="text" name="65913tf" placeholder="65913 TF"><input type="text" name="65913pc" placeholder="65913 PC"><input type="text" name="65913pf" placeholder="65913 PF"></li>
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