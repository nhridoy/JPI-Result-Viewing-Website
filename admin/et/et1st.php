<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc66711 = $_POST['66711tc'];
		$tf66711 = $_POST['66711tf'];
		$pc66711 = $_POST['66711pc'];
		$pf66711 = $_POST['66711pf'];
		$tc66713 = $_POST['66713tc'];
		$tf66713 = $_POST['66713tf'];
		$tc65911 = $_POST['65911tc'];
		$tf65911 = $_POST['65911tf'];
		$pc65911 = $_POST['65911pc'];
		$tc66811 = $_POST['66811tc'];
		$tf66811 = $_POST['66811tf'];
		$pc66811 = $_POST['66811pc'];
		$pf66811 = $_POST['66811pf'];
		$pc61011 = $_POST['61011pc'];
		$pf61011 = $_POST['61011pf'];
		$tc65913 = $_POST['65913tc'];
		$tf65913 = $_POST['65913tf'];
		$pc65913 = $_POST['65913pc'];
		$pf65913 = $_POST['65913pf'];
		$pc65812 = $_POST['65812pc'];
		$pf65812 = $_POST['65812pf'];



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
		if($tc66713=="" || $tc66713>40 || $tc66713<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66713tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66713=="" || $tf66713>60 || $tf66713<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66713tf:</b> should be between <b>0-60</b></div>";
		};
		if($tc65911=="" || $tc65911>60 || $tc65911<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65911tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65911=="" || $tf65911>90 || $tf65911<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65911tf:</b> should be between <b>90</b></div>";
		};
		if($pc65911=="" || $pc65911>50 || $pc65911<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65911pc:</b> should be between <b>0-50</b></div>";
		};
		if($tc66811=="" || $tc66811>40 || $tc66811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66811tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66811=="" || $tf66811>60 || $tf66811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66811tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66811=="" || $pc66811>25 || $pc66811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66811pc:</b> should be between <b>25</b></div>";
		};
		if($pf66811=="" || $pf66811>25 || $pf66811<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66811pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc61011=="" || $pc61011>50 || $pc61011<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 61011pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf61011=="" || $pf61011>50 || $pf61011<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 61011pf:</b> should be between <b>0-50</b></div>";
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
		if($pc65812=="" || $pc65812>25 ||$pc65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65812=="" || $pf65812>25 || $pf65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pf:</b> should be between <b>0-25</b></div>";
		};




		if($error==0){
			$object = new connect;
			$insert="INSERT into et1st VALUES('','$roll','$month','$year','$tc66711','$tf66711','$pc66711','$pf66711','$tc66713','$tf66713','$tc65911','$tf65911','$pc65911','$tc66811','$tf66811','$pc66811','$pf66811','$pc61011','$pf61011','$tc65913','$tf65913','$pc65913','$pf65913','$pc65812','$pf65812')";

			
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
	          					<li><b>66711-Basic Electricity</b></li>
	          					<li><b>66713-Electrical Engineering Materials</b></li>
	          					<li><b>65911-Mathematics-1</b></li>
	          					<li><b>66811-Basic Electronics</b></li>
	          					<li><b>61011-Engineering Drawing</b></li>
	          					<li><b>65913-Chemistry</b></li>
	          					<li><b>65812-Physical Education & Life Skill Development</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66711tc" placeholder="66711 TC"><input type="text" name="66711tf" placeholder="66711 TF"><input type="text" name="66711pc" placeholder="66711 PC"><input type="text" name="66711pf" placeholder="66711 PF"></li>
	          					<li><input type="text" name="66713tc" placeholder="66713 TC"><input type="text" name="66713tf" placeholder="66713 TF"><input type="text" name="66713pc" placeholder="disabled" disabled><input type="text" name="66713pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65911tc" placeholder="65911 TC"><input type="text" name="65911tf" placeholder="65911 TF"><input type="text" name="65911pc" placeholder="65911 PC"><input type="text" name="65911pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="66811tc" placeholder="66811 TC"><input type="text" name="66811tf" placeholder="66811 TF"><input type="text" name="66811pc" placeholder="66811 PC"><input type="text" name="66811pf" placeholder="66811 PF"></li>
	          					<li><input type="text" name="61011tc" placeholder="disabled" disabled><input type="text" name="61011tf" placeholder="disabled" disabled><input type="text" name="61011pc" placeholder="61011 PC"><input type="text" name="61011pf" placeholder="61011 PF"></li>
	          					<li><input type="text" name="65913tc" placeholder="65913 TC"><input type="text" name="65913tf" placeholder="65913 TF"><input type="text" name="65913pc" placeholder="65913 PC"><input type="text" name="65913pf" placeholder="65913 PF"></li>
	          					<li><input type="text" name="65812tc" placeholder="disabled" disabled><input type="text" name="65812tf" placeholder="disabled" disabled><input type="text" name="65812pc" placeholder="65812 PC"><input type="text" name="65812pf" placeholder="65812 PF"></li>
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