<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc66631 = $_POST['66631tc'];
		$tf66631 = $_POST['66631tf'];
		$pc66631 = $_POST['66631pc'];
		$pf66631 = $_POST['66631pf'];
		$pc66632 = $_POST['66632pc'];
		$pf66632 = $_POST['66632pf'];
		$pc66633 = $_POST['66633pc'];
		$pf66633 = $_POST['66633pf'];
		$pc66634 = $_POST['66634pc'];
		$pf66634 = $_POST['66634pf'];
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
		if($tc66631=="" || $tc66631>40 || $tc66631<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66631tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66631=="" || $tf66631>60 || $tf66631<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66631tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66631=="" || $pc66631>25 || $pc66631<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66631pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66631=="" || $pf66631>25 || $pf66631<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66631pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc66632=="" || $pc66632>50 || $pc66632<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66632pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66632=="" || $pf66632>50 || $pf66632<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66632pf:</b> should be between <b>0-50</b></div>";
		};
		if($pc66633=="" || $pc66633>50 || $pc66633<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66633pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66633=="" || $pf66633>50 || $pf66633<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66633pf:</b> should be between <b>0-50</b></div>";
		};
		if($pc66634=="" || $pc66634>50 || $pc66634<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66634pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66634=="" || $pf66634>50 || $pf66634<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66634pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc65931=="" || $tc65931>60 ||$tc65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65931=="" || $tf65931>90 ||$tf65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc65931=="" || $pc65931>50 ||$pc65931<0){
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
			$insert="INSERT into cmt3rd VALUES('','$roll','$month','$year','$tc66631','$tf66631','$pc66631','$pf66631','$pc66632','$pf66632','$pc66633','$pf66633','$pc66634','$pf66634','$tc65931','$tf65931','$pc65931','$tc65913','$tf65913','$pc65913','$pf65913','$tc65811','$tf65811')";

			
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
	          					<li><b>66631-Programming Essential</b></li>
	          					<li><b>66632-Web Design</b></li>
	          					<li><b>66633-Graphics Design-2</b></li>
	          					<li><b>66634-IT Support-2</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65913-Chemistry</b></li>
	          					<li><b>65811-Social Science</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66631tc" placeholder="66631 TC"><input type="text" name="66631tf" placeholder="66631 TF"><input type="text" name="66631pc" placeholder="66631 PC"><input type="text" name="66631pf" placeholder="66631 PF"></li>
	          					<li><input type="text" name="66632tc" placeholder="disabled" disabled><input type="text" name="66632tf" placeholder="disabled" disabled><input type="text" name="66632pc" placeholder="66632 PC"><input type="text" name="66632pf" placeholder="66632 PF"></li>
	          					<li><input type="text" name="66633tc" placeholder="disabled" disabled><input type="text" name="66633tf" placeholder="disabled" disabled><input type="text" name="66633pc" placeholder="66633 PC"><input type="text" name="66633pf" placeholder="66633 PF"></li>
	          					<li><input type="text" name="66634tc" placeholder="disabled" disabled><input type="text" name="66634tf" placeholder="disabled" disabled><input type="text" name="66634pc" placeholder="66634 PC"><input type="text" name="66634pf" placeholder="66634 PF"></li>
	          					<li><input type="text" name="65931tc" placeholder="65931 TC"><input type="text" name="65931tf" placeholder="65931 TF"><input type="text" name="65931pc" placeholder="65931 PC"><input type="text" name="65931pf" placeholder="disabled" disabled></li>
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