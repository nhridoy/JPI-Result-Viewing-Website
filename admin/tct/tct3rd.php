<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc69431 = $_POST['69431tc'];
		$tf69431 = $_POST['69431tf'];
		$pc69431 = $_POST['69431pc'];
		$pf69431 = $_POST['69431pf'];
		$tc69432 = $_POST['69432tc'];
		$tf69432 = $_POST['69432tf'];
		$pc69432 = $_POST['69432pc'];
		$pf69432 = $_POST['69432pf'];
		$pc66621 = $_POST['66621pc'];
		$pf66621 = $_POST['66621pf'];
		$tc66823 = $_POST['66823tc'];
		$tf66823 = $_POST['66823tf'];
		$pc66823 = $_POST['66823pc'];
		$pf66823 = $_POST['66823pf'];
		$tc65931 = $_POST['65931tc'];
		$tf65931 = $_POST['65931tf'];
		$pc65931 = $_POST['65931pc'];
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
		if($tc69431=="" || $tc69431>20 || $tc69431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69431tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf69431=="" || $tf69431>30 || $tf69431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69431tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc69431=="" || $pc69431>25 || $pc69431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69431pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf69431=="" || $pf69431>25 || $pf69431<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69431pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc69432=="" || $tc69432>20 || $tc69432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69432tc:</b> should be between <b>0-20</b></div>";
		};
		if($tf69432=="" || $tf69432>30 || $tf69432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69432tf:</b> should be between <b>0-30</b></div>";
		};
		if($pc69432=="" || $pc69432>25 || $pc69432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69432pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf69432=="" || $pf69432>25 || $pf69432<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 69432pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc66621=="" || $pc66621>50 ||$pc66621<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66621pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66621=="" || $pf66621>50 ||$pf66621<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66621pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc66823=="" || $tc66823>60 || $tc66823<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66823tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf66823=="" || $tf66823>90 ||$tf66823<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66823tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc66823=="" || $pc66823>25 || $pc66823<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66823pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66823=="" || $pf66823>25 || $pf66823<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66823pf:</b> should be between <b>0-25</b></div>";
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
			$insert="INSERT into tct3rd VALUES('','$roll','$month','$year','$tc69431','$tf69431','$pc69431','$pf69431','$tc69432','$tf69432','$pc69432','$pf69432','$pc66621','$pf66621','$tc66823','$tf66823','$pc66823','$pf66823','$tc65931','$tf65931','$pc65931','$tc65922','$tf65922','$pc65922','$pf65922','$tc65722','$tf65722','$pc65722')";

			
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
	          					<li><b>69431-Telecom Workshop Practice</b></li>
	          					<li><b>69432-Outside Plant</b></li>
	          					<li><b>66621-Database Application</b></li>
	          					<li><b>66823-Analog Electronics</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="69431tc" placeholder="69431 TC"><input type="text" name="69431tf" placeholder="69431 TF"><input type="text" name="69431pc" placeholder="69431 PC"><input type="text" name="69431pf" placeholder="69431 PF"></li>
	          					<li><input type="text" name="69432tc" placeholder="69432 TC"><input type="text" name="69432tf" placeholder="69432 TF"><input type="text" name="69432pc" placeholder="69432 PC"><input type="text" name="69432pf" placeholder="69432 PF"></li>
	          					<li><input type="text" name="66621tc" placeholder="disabled" disabled><input type="text" name="66621tf" placeholder="disabled" disabled><input type="text" name="66621pc" placeholder="66621 PC"><input type="text" name="66621pf" placeholder="66621 PF"></li>
	          					<li><input type="text" name="66823tc" placeholder="66823 TC"><input type="text" name="66823tf" placeholder="66823 TF"><input type="text" name="66823pc" placeholder="66823 PC"><input type="text" name="66823pf" placeholder="66823 PF"></li>
	          					<li><input type="text" name="65931tc" placeholder="65931 TC"><input type="text" name="65931tf" placeholder="65931 TF"><input type="text" name="65931pc" placeholder="65931 PC"><input type="text" name="65931pf" placeholder="disabled" disabled=""></li>
	          					<li><input type="text" name="65922tc" placeholder="65922 TC"><input type="text" name="65922tf" placeholder="65922 TF"><input type="text" name="65922pc" placeholder="65922 PC"><input type="text" name="65922pf" placeholder="65922 PF"></li>
	          					<li><input type="text" name="65722tc" placeholder="65722 TC"><input type="text" name="65722tf" placeholder="65722 TF"><input type="text" name="65722pc" placeholder="65722 PC"><input type="text" name="65722pf" placeholder="disabled" disabled=""></li>
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