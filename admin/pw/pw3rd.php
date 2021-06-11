<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc67131 = $_POST['67131tc'];
		$tf67131 = $_POST['67131tf'];
		$pc67131 = $_POST['67131pc'];
		$pf67131 = $_POST['67131pf'];
		$tc67033 = $_POST['67033tc'];
		$tf67033 = $_POST['67033tf'];
		$pc67033 = $_POST['67033pc'];
		$pf67033 = $_POST['67033pf'];
		$pc66611 = $_POST['66611pc'];
		$pf66611 = $_POST['66611pf'];
		$tc66822 = $_POST['66822tc'];
		$tf66822 = $_POST['66822tf'];
		$pc66822 = $_POST['66822pc'];
		$pf66822 = $_POST['66822pf'];
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
		if($tc67131=="" || $tc67131>60 || $tc67131<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67131tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf67131=="" || $tf67131>90 || $tf67131<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67131tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc67131=="" || $pc67131>25 || $pc67131<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67131pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf67131=="" || $pf67131>25 || $pf67131<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67131pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc67033=="" || $tc67033>20 || $tc67033<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67033tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf67033=="" || $tf67033>30 || $tf67033<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67033tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc67033=="" || $pc67033>25 || $pc67033<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67033pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf67033=="" || $pf67033>25 || $pf67033<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67033pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc66611=="" || $pc66611>50 || $pc66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66611=="" || $pf66611>50 || $pf66611<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66611pf:</b> should be between <b>0-50</b></div>";
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
		if($tc65811=="" || $tc65811>60 || $tc65811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65811tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65811=="" || $tf65811>90 || $tf65811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65811tf:</b> should be between <b>0-90</b></div>";
		};





		if($error==0){
			$object = new connect;
			$insert="INSERT into pw3rd VALUES('','$roll','$month','$year','$tc67131','$tf67131','$pc67131','$pf67131','$tc67033','$tf67033','$pc67033','$pf67033','$pc66611','$pf66611','$tc66822','$tf66822','$pc66822','$pf66822','$tc65931','$tf65931','$pc65931','$tc65913','$tf65913','$pc65913','$pf65913','$tc65811','$tf65811')";

			
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
	          					<li><b>67131-Engineering Thermodynamics</b></li>
	          					<li><b>67033-Machine Shop Practice</b></li>
	          					<li><b>66611-Computer Application</b></li>
	          					<li><b>66822-Electronic Engineering Fundamentals</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65913-Chemistry</b></li>
	          					<li><b>65811-Social Science</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="67131tc" placeholder="67131 TC"><input type="text" name="67131tf" placeholder="67131 TF"><input type="text" name="67131pc" placeholder="67131 PC"><input type="text" name="67131pf" placeholder="67131 PF"></li>
	          					<li><input type="text" name="67033tc" placeholder="67033 TC"><input type="text" name="67033tf" placeholder="67033 TF"><input type="text" name="67033pc" placeholder="67033 PC"><input type="text" name="67033pf" placeholder="67033 PF"></li>
	          					<li><input type="text" name="66611tc" placeholder="disabled" disabled><input type="text" name="66611tf" placeholder="disabled" disabled><input type="text" name="66611pc" placeholder="66611 PC"><input type="text" name="66611pf" placeholder="66611 PF"></li>
	          					<li><input type="text" name="66822tc" placeholder="66822 TC"><input type="text" name="66822tf" placeholder="66822 TF"><input type="text" name="66822pc" placeholder="66822 PC"><input type="text" name="66822pf" placeholder="66822 PF"></li>
	          					<li><input type="text" name="65931tc" placeholder="65931 TC"><input type="text" name="65931tf" placeholder="65931 TF"><input type="text" name="65931pc" placeholder="65931 PC"><input type="text" name="65931pf" placeholder="disabled" disabled=""></li>
	          					<li><input type="text" name="65913tc" placeholder="65913 TC"><input type="text" name="65913tf" placeholder="65913 TF"><input type="text" name="65913pc" placeholder="65913 PC"><input type="text" name="65913pf" placeholder="65913 PF"></li>
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