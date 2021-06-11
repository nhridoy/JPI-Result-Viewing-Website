<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc66431 = $_POST['66431tc'];
		$tf66431 = $_POST['66431tf'];
		$pc66431 = $_POST['66431pc'];
		$pf66431 = $_POST['66431pf'];
		$tc66432 = $_POST['66432tc'];
		$tf66432 = $_POST['66432tf'];
		$pc66432 = $_POST['66432pc'];
		$pf66432 = $_POST['66432pf'];
		$tc66433 = $_POST['66433tc'];
		$tf66433 = $_POST['66433tf'];
		$pc66433 = $_POST['66433pc'];
		$pf66433 = $_POST['66433pf'];
		$pc66434 = $_POST['66434pc'];
		$pf66434 = $_POST['66434pf'];
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
		if($tc66431=="" || $tc66431>20 || $tc66431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66431tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf66431=="" || $tf66431>30 || $tf66431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66431tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc66431=="" || $pc66431>50 || $pc66431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66431pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66431=="" || $pf66431>50 || $pf66431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66431pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc66432=="" || $tc66432>40 || $tc66432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66432tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66432=="" || $tf66432>60 || $tf66432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66432tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66432=="" || $pc66432>25 || $pc66432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66432pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66432=="" || $pf66432>25 || $pf66432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66432pf:</b> should be between <b>25</b></div>";
		};
		if($tc66433=="" || $tc66433>40 || $tc66433<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66433tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66433=="" || $tf66433>60 || $tf66433<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66433tf:</b> should be between <b>0-60</b></div>";
		};
		if($pc66433=="" || $pc66433>25 || $pc66433<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66433pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66433=="" || $pf66433>25 || $pf66433<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66433pf:</b> should be between <b>25</b></div>";
		};
		if($pc66434=="" || $pc66434>25 || $pc66434<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66434pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66434=="" || $pf66434>25 || $pf66434<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66434pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc65931=="" || $tc65931>60 || $tc65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf65931=="" || $tf65931>90 ||$tf65931<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 65931tf:</b> should be between <b>0-90</b></div>";
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
			$error_msg.="<div class='alert'><b>&#9888; 65913pf:</b> should be between <b>25</b></div>";
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
			$insert="INSERT into c3rd VALUES('','$roll','$month','$year','$tc66431','$tf66431','$pc66431','$pf66431','$tc66432','$tf66432','$pc66432','$pf66432','$tc66433','$tf66433','$pc66433','$pf66433','$pc66434','$pf66434','$tc65931','$tf65931','$pc65931','$tc65913','$tf65913','$pc65913','$pf65913','$tc65811','$tf65811')";

			
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
	          					<li><b>66431-Civil Engineering Drawing-1</b></li>
	          					<li><b>66432-Surveying-1</b></li>
	          					<li><b>66433-Construction Process-1</b></li>
	          					<li><b>66434-Civil Workshop Practice</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65913-Chemistry</b></li>
	          					<li><b>65811-Social Science</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66431tc" placeholder="66431 TC"><input type="text" name="66431tf" placeholder="66431 TF"><input type="text" name="66431pc" placeholder="66431 PC"><input type="text" name="66431pf" placeholder="66431 PF"></li>
	          					<li><input type="text" name="66432tc" placeholder="66432 TC"><input type="text" name="66432tf" placeholder="66432 TF"><input type="text" name="66432pc" placeholder="66432 PC"><input type="text" name="66432pf" placeholder="66432 PF"></li>
	          					<li><input type="text" name="66433tc" placeholder="66433 TC"><input type="text" name="66433tf" placeholder="66433 TF"><input type="text" name="66433pc" placeholder="66433 PC"><input type="text" name="66433pf" placeholder="66433 PF"></li>
	          					<li><input type="text" name="66434tc" placeholder="disabled" disabled><input type="text" name="66434tf" placeholder="disabled" disabled><input type="text" name="66434pc" placeholder="66434 PC"><input type="text" name="66434pf" placeholder="66434 PF"></li>
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