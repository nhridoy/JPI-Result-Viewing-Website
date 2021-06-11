<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc67121 = $_POST['67121tc'];
		$tf67121 = $_POST['67121tf'];
		$pc67121 = $_POST['67121pc'];
		$pf67121 = $_POST['67121pf'];
		$tc66711 = $_POST['66711tc'];
		$tf66711 = $_POST['66711tf'];
		$pc66711 = $_POST['66711pc'];
		$pf66711 = $_POST['66711pf'];
		$pc65812 = $_POST['65812pc'];
		$pf65812 = $_POST['65812pf'];
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
		if($tc67121=="" || $tc67121>40 || $tc67121<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67121tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf67121=="" || $tf67121>60 || $tf67121<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67121tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc67121=="" || $pc67121>50 || $pc67121<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67121pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf67121=="" || $pf67121>50 || $pf67121<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 67121pf:</b> should be between <b>0-50</b></div>";
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
		if($pc65812=="" || $pc65812>25 || $pc65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf65812=="" || $pf65812>25 || $pf65812<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65812pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65921=="" || $tc65921>60 || $tc65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tc:</b> should be between <b-60</b></div>";
		};
		if($tf65921=="" || $tf65921>90 || $tf65921<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65921tf:</b> should be between <b-90</b></div>";
		};
		if($pc65921=="" || $pc65921>50 || $pc65921<0){
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
			$insert="INSERT into pw2nd VALUES('','$roll','$month','$year','$tc67121','$tf67121','$pc67121','$pf67121','$tc66711','$tf66711','$pc66711','$pf66711','$pc65812','$pf65812','$tc65921','$tf65921','$pc65921','$tc65922','$tf65922','$pc65922','$pf65922','$tc65722','$tf65722','$pc65722')";

			
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
	          					<li><b>67121-Workshop Safety & Management</b></li>
	          					<li><b>66711-Basic Electricity</b></li>
	          					<li><b>65812-Physical Education & Life Skill Development</b></li>
	          					<li><b>65921-Mathematics-2</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="67121tc" placeholder="67121 TC"><input type="text" name="67121tf" placeholder="67121 TF"><input type="text" name="67121pc" placeholder="67121 PC"><input type="text" name="67121pf" placeholder="67121 PF"></li>
	          					<li><input type="text" name="66711tc" placeholder="66711 TC"><input type="text" name="66711tf" placeholder="66711 TF"><input type="text" name="66711pc" placeholder="66711 PC"><input type="text" name="66711pf" placeholder="66711 PF"></li>
	          					<li><input type="text" name="65812tc" placeholder="disabled" disabled><input type="text" name="65812tf" placeholder="disabled" disabled><input type="text" name="65812pc" placeholder="65812 PC"><input type="text" name="65812pf" placeholder="65812 PF"></li>
	          					<li><input type="text" name="65921tc" placeholder="65921 TC"><input type="text" name="65921tf" placeholder="65921 TF"><input type="text" name="65921pc" placeholder="65921 PC"><input type="text" disabled name="65921pf" placeholder="disabled"></li>
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