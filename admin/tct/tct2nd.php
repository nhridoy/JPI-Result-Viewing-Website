<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc69421 = $_POST['69421tc'];
		$tf69421 = $_POST['69421tf'];
		$pc69421 = $_POST['69421pc'];
		$pf69421 = $_POST['69421pf'];
		$pc66611 = $_POST['66611pc'];
		$pf66611 = $_POST['66611pf'];
		$tc65921 = $_POST['65921tc'];
		$tf65921 = $_POST['65921tf'];
		$pc65921 = $_POST['65921pc'];
		$tc65912 = $_POST['65912tc'];
		$tf65912 = $_POST['65912tf'];
		$pc65912 = $_POST['65912pc'];
		$pf65912 = $_POST['65912pf'];
		$tc65712 = $_POST['65712tc'];
		$tf65712 = $_POST['65712tf'];
		$tc65711 = $_POST['65711tc'];
		$tf65711 = $_POST['65711tf'];
		$pc65711 = $_POST['65711pc'];
		$pc61011 = $_POST['61011pc'];
		$pf61011 = $_POST['61011pf'];



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
		if($tc69421=="" || $tc69421>60 || $tc69421<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69421tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf69421=="" || $tf69421>90 || $tf69421<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69421tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc69421=="" || $pc69421>25 || $pc69421<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69421pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf69421=="" || $pf69421>25 || $pf69421<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69421pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc66611=="" || $pc66611>50 || $pc66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66611=="" || $pf66611>50 || $pf66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pf:</b> should be between <b>0-50</b></div>";
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
		if($tc65912=="" || $tc65912>60 || $tc65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65912=="" || $tf65912>90 ||$tf65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65912=="" || $pc65912>25 || $pc65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65912=="" || $pf65912>25 || $pf65912<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65912pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65712=="" || $tc65712>40 || $tc65712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65712tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf65712=="" || $tf65712>60 || $tf65712<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65712tf:</b> should be between <b>0-60</b></div>";
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
		if($pc61011=="" || $pc61011>50 || $pc61011<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 61011pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf61011=="" || $pf61011>50 || $pf61011<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 61011pf:</b> should be between <b>0-50</b></div>";
		};
		





		if($error==0){
			$object = new connect;
			$insert="INSERT into tct2nd VALUES('','$roll','$month','$year','$tc69421','$tf69421','$pc69421','$pf69421','$pc66611','$pf66611','$tc65921','$tf65921','$pc65921','$tc65912','$tf65912','$pc65912','$pf65912','$tc65712','$tf65712','$tc65711','$tf65711','$pc65711','$pc61011','$pf61011')";

			
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
	          					<li><b>69421-Telecommunications Fundamentals</b></li>
	          					<li><b>66611-Computer Application</b></li>
	          					<li><b>65921-Mathematics-2</b></li>
	          					<li><b>65912-Physics-1</b></li>
	          					<li><b>65712-English</b></li>
	          					<li><b>65711-Bangla</b></li>
	          					<li><b>61011-Engineering Drawing</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="69421tc" placeholder="69421 TC"><input type="text" name="69421tf" placeholder="69421 TF"><input type="text" name="69421pc" placeholder="69421 PC"><input type="text" name="69421pf" placeholder="69421 PF"></li>
	          					<li><input type="text" name="66611tc" placeholder="disabled" disabled><input type="text" name="66611tf" placeholder="disabled" disabled><input type="text" name="66611pc" placeholder="66611 PC"><input type="text" name="66611pf" placeholder="66611 PF"></li>
	          					<li><input type="text" name="65921tc" placeholder="65921 TC"><input type="text" name="65921tf" placeholder="65921 TF"><input type="text" name="65921pc" placeholder="65921 PC"><input type="text" name="65921pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65912tc" placeholder="65912 TC"><input type="text" name="65912tf" placeholder="65912 TF"><input type="text" name="65912pc" placeholder="65912 PC"><input type="text" name="65912pf" placeholder="65912 PF"></li>
	          					<li><input type="text" name="65712tc" placeholder="65712 TC"><input type="text" name="65712tf" placeholder="65712 TF"><input type="text" name="65712pc" placeholder="disabled" disabled><input type="text" name="65712pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65711tc" placeholder="65711 TC"><input type="text" name="65711tf" placeholder="65711 TF"><input type="text" name="65711pc" placeholder="65711 PC"><input type="text" name="65711pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="61011tc" placeholder="disabled" disabled><input type="text" name="61011tf" placeholder="disabled" disabled><input type="text" name="61011pc" placeholder="61011 PC"><input type="text" name="61011pf" placeholder="61011 PF"></li>
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