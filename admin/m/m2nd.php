<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$pc67021 = $_POST['67021pc'];
		$pf67021 = $_POST['67021pf'];
		$tc67022 = $_POST['67022tc'];
		$tf67022 = $_POST['67022tf'];
		$pc67022 = $_POST['67022pc'];
		$pf67022 = $_POST['67022pf'];
		$pc67023 = $_POST['67023pc'];
		$pf67023 = $_POST['67023pf'];
		$tc65712 = $_POST['65712tc'];
		$tf65712 = $_POST['65712tf'];
		$tc65921 = $_POST['65921tc'];
		$tf65921 = $_POST['65921tf'];
		$pc65921 = $_POST['65921pc'];
		$tc65912 = $_POST['65912tc'];
		$tf65912 = $_POST['65912tf'];
		$pc65912 = $_POST['65912pc'];
		$pf65912 = $_POST['65912pf'];
		$tc65811 = $_POST['65811tc'];
		$tf65811 = $_POST['65811tf'];



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
		if($pc67021=="" || $pc67021>50 || $pc67021<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67021pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf67021=="" || $pf67021>50 || $pf67021<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67021pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc67022=="" || $tc67022>20 || $tc67022<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67022tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf67022=="" || $tf67022>30 || $tf67022<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67022tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc67022=="" || $pc67022>50 || $pc67022<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67022pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf67022=="" || $pf67022>50 || $pf67022<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67022pf:</b> should be between <b>0-50</b></div>";
		};
		if($pc67023=="" || $pc67023>50 || $pc67023<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67023pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf67023=="" || $pf67023>50 || $pf67023<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67023pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc65712=="" || $tc65712>40 || $tc65712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65712tc:</b> should be between <b>0-40</b></div>";
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
			$error_msg.="<div class='alert'><b>&#9888; 65921tf:</b> should be between <b960</b></div>";
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
			$error_msg.="<div class='alert'><b>&#9888; 65912tf:</b> should be between <b960</b></div>";
		};
		if($pc65912=="" || $pc65912>25 || $pc65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65912=="" || $pf65912>25 || $pf65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65811=="" || $tc65811>60 || $tc65811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65811tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65811=="" || $tf65811>90 || $tf65811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65811tf:</b> should be between <b>0-60</b></div>";
		};





		if($error==0){
			$object = new connect;
			$insert="INSERT into m2nd VALUES('','$roll','$month','$year','$pc67021','$pf67021','$tc67022','$tf67022','$pc67022','$pf67022','$pc67023','$pf67023','$tc65712','$tf65712','$tc65921','$tf65921','$pc65921','$tc65912','$tf65912','$pc65912','$pf65912','$tc65811','$tf65811')";

			
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
	          					<li><b>67021-Advanced Mechanical Engineering Drawing</b></li>
	          					<li><b>67022-Machine Shop Practice-1</b></li>
	          					<li><b>67023-Mechanical Workshop Practice</b></li>
	          					<li><b>65712-English</b></li>
	          					<li><b>65921-Mathematics-2</b></li>
	          					<li><b>65912-Physics-1</b></li>
	          					<li><b>65811-Social Science</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="67021tc" placeholder="disabled" disabled><input type="text" name="67021tf" placeholder="disabled" disabled><input type="text" name="67021pc" placeholder="67021 PC"><input type="text" name="67021pf" placeholder="67021 PF"></li>
	          					<li><input type="text" name="67022tc" placeholder="67022 TC"><input type="text" name="67022tf" placeholder="67022 TF"><input type="text" name="67022pc" placeholder="67022 PC"><input type="text" name="67022pf" placeholder="67022 PF"></li>
	          					<li><input type="text" name="67023tc" placeholder="disabled" disabled><input type="text" name="67023tf" placeholder="disabled" disabled><input type="text" name="67023pc" placeholder="67023 PC"><input type="text" name="67023pf" placeholder="67023 PF"></li>
	          					<li><input type="text" name="65712tc" placeholder="65712 TC"><input type="text" name="65712tf" placeholder="65712 TF"><input type="text" name="65712pc" placeholder="disabled" disabled><input type="text" name="65712pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65921tc" placeholder="65921 TC"><input type="text" name="65921tf" placeholder="65921 TF"><input type="text" name="65921pc" placeholder="65921 PC"><input type="text" name="65921pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65912tc" placeholder="65912 TC"><input type="text" name="65912tf" placeholder="65912 TF"><input type="text" name="65912pc" placeholder="65912 PC"><input type="text" name="65912pf" placeholder="65912 PF"></li>
	          					<li><input type="text" name="65811tc" placeholder="65811 TC"><input type="text" name="65811tf" placeholder="65811 TF"><input type="text" name="65811pc" placeholder="disabled" disabled><input type="text" name="65811pf" placeholder="disabled" disabled></li>
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