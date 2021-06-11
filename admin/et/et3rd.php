<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc66731 = $_POST['66731tc'];
		$tf66731 = $_POST['66731tf'];
		$pc66731 = $_POST['66731pc'];
		$pf66731 = $_POST['66731pf'];
		$tc66732 = $_POST['66732tc'];
		$tf66732 = $_POST['66732tf'];
		$pc66732 = $_POST['66732pc'];
		$pf66732 = $_POST['66732pf'];
		$pc66733 = $_POST['66733pc'];
		$pf66733 = $_POST['66733pf'];
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
		if($tc66731=="" || $tc66731>60 || $tc66731<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66731tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf66731=="" || $tf66731>90 || $tf66731<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66731tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc66731=="" || $pc66731>25 || $pc66731<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66731pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66731=="" || $pf66731>25 || $pf66731<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66731pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc66732=="" || $tc66732>40 || $tc66732<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66732tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66732=="" || $tf66732>60 || $tf66732<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66732tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66732=="" || $pc66732>25 || $pc66732<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66732pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66732=="" || $pf66732>25 || $pf66732<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66732pf:</b> should be between <b>25</b></div>";
		};
		if($pc66733=="" || $pc66733>25 || $pc66733<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66733pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66733=="" || $pf66733>25 || $pf66733<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66733pf:</b> should be between <b>25</b></div>";
		};
		if($tc65722=="" || $tc65722>20 || $tc65722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65722tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf65722=="" || $tf65722>30 || $tf65722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65722tf:</b> should be between <b>30</b></div>";
		};
		if($pc65722=="" || $pc65722>50 || $pc65722<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65722pc:</b> should be between <b>0-50</b></div>";
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
			$error_msg.="<div class='alert'><b>&#9888; 65922pc:</b> should be between <b>25</b></div>";
		};
		if($pf65922=="" || $pf65922>25 ||$pf65922<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65922pf:</b> should be between <b>0-25</b></div>";
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
			$insert="INSERT into et3rd VALUES('','$roll','$month','$year','$tc66731','$tf66731','$pc66731','$pf66731','$tc66732','$tf66732','$pc66732','$pf66732','$pc66733','$pf66733','$tc65722','$tf65722','$pc65722','$tc65931','$tf65931','$pc65931','$tc65922','$tf65922','$pc65922','$pf65922','$tc65811','$tf65811')";

			
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
	          					<li><b>66731-Electrical Circuits-2</b></li>
	          					<li><b>66732-Advanced Electricity</b></li>
	          					<li><b>66733-Electrical Engineering Drawing</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>65811-Social Science</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66731tc" placeholder="66731 TC"><input type="text" name="66731tf" placeholder="66731 TF"><input type="text" name="66731pc" placeholder="66731 PC"><input type="text" name="66731pf" placeholder="66731 PF"></li>
	          					<li><input type="text" name="66732tc" placeholder="66732 TC"><input type="text" name="66732tf" placeholder="66732 TF"><input type="text" name="66732pc" placeholder="66732 PC"><input type="text" name="66732pf" placeholder="66732 PF"></li>
	          					<li><input type="text" name="66733tc" placeholder="disabled" disabled><input type="text" name="66733tf" placeholder="disabled" disabled><input type="text" name="66733pc" placeholder="66733 PC"><input type="text" name="66733pf" placeholder="66733 PF"></li>
	          					<li><input type="text" name="65722tc" placeholder="65722 TC"><input type="text" name="65722tf" placeholder="65722 TF"><input type="text" name="65722pc" placeholder="65722 PC"><input type="text" name="65722pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65931tc" placeholder="65931 TC"><input type="text" name="65931tf" placeholder="65931 TF"><input type="text" name="65931pc" placeholder="65931 PC"><input type="text" name="65931pf" placeholder="disabled" disabled></li>
	          					<li><input type="text" name="65922tc" placeholder="65922 TC"><input type="text" name="65922tf" placeholder="65922 TF"><input type="text" name="65922pc" placeholder="65922 PC"><input type="text" name="65922pf" placeholder="65922 PF"></li>
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