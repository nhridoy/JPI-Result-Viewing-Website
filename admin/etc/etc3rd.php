<?php

	
	include('../../connect.php');
	if(isset($_POST['submit'])){
		#print_r ($_POST);


		$roll = $_POST['roll'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$tc66831 = $_POST['66831tc'];
		$tf66831 = $_POST['66831tf'];
		$pc66831 = $_POST['66831pc'];
		$pf66831 = $_POST['66831pf'];
		$pc66832 = $_POST['66832pc'];
		$pf66832 = $_POST['66832pf'];
		$tc66833 = $_POST['66833tc'];
		$tf66833 = $_POST['66833tf'];
		$pc66833 = $_POST['66833pc'];
		$pf66833 = $_POST['66833pf'];
		$tc66835 = $_POST['66835tc'];
		$tf66835 = $_POST['66835tf'];
		$pc66835 = $_POST['66835pc'];
		$pf66835 = $_POST['66835pf'];
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
		if($tc66831=="" || $tc66831>60 || $tc66831<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66831tc:</b> should be between <b>0-60</b></div>";
		};
		if($tf66831=="" || $tf66831>90 || $tf66831<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66831tf:</b> should be between <b>0-90</b></div>";
		};
		if($pc66831=="" || $pc66831>25 || $pc66831<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66831pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66831=="" || $pf66831>25 || $pf66831<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66831pf:</b> should be between <b>0-25</b></div>";
		};
		if($pc66832=="" || $pc66832>50 || $pc66832<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66832pc:</b> should be between <b>0-50</b></div>";
		};
		if($pf66832=="" || $pf66832>50 || $pf66832<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66832pf:</b> should be between <b>0-50</b></div>";
		};
		if($tc66833=="" || $tc66833>40 || $tc66833<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66833tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66833=="" || $tf66833>60 || $tf66833<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66833tf:</b> should be between <b>60</b></div>";
		};
		if($pc66833=="" || $pc66833>25 || $pc66833<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66833pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66833=="" || $pf66833>25 || $pf66833<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66833pf:</b> should be between <b>0-25</b></div>";
		};
		if($tc66835=="" || $tc66835>40 || $tc66835<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66835tc:</b> should be between <b>0-40</b></div>";
		};
		if($tf66835=="" || $tf66835>60 || $tf66835<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66835tf:</b> should be between <b>60</b></div>";
		};
		if($pc66835=="" || $pc66835>25 || $pc66835<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66835pc:</b> should be between <b>0-25</b></div>";
		};
		if($pf66835=="" || $pf66835>25 || $pf66835<0){
			$error=$error+1;
			$error_msg.="<div class='alert'><b>&#9888; 66835pf:</b> should be between <b>0-25</b></div>";
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
			$insert="INSERT into etc3rd VALUES('','$roll','$month','$year','$tc66831','$tf66831','$pc66831','$pf66831','$pc66832','$pf66832','$tc66833','$tf66833','$pc66833','$pf66833','$tc66835','$tf66835','$pc66835','$pf66835','$tc65931','$tf65931','$pc65931','$tc65922','$tf65922','$pc65922','$pf65922','$tc65722','$tf65722','$pc65722')";

			
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
	          					<li><b>66831-Advanced Electronic Device & Circuits</b></li>
	          					<li><b>66832-PCB Design & Prototyping</b></li>
	          					<li><b>66833-Electronic Appliance</b></li>
	          					<li><b>66835-Basic Communication Engineering</b></li>
	          					<li><b>65931-Mathematics-3</b></li>
	          					<li><b>65922-Physics-2</b></li>
	          					<li><b>65722-Communicative English</b></li>
	          				</ul>
	          			</div>
	          			<div class="subjects_marks">
	          				<ul>
	          					<li><input type="text" name="66831tc" placeholder="66831 TC"><input type="text" name="66831tf" placeholder="66831 TF"><input type="text" name="66831pc" placeholder="66831 PC"><input type="text" name="66831pf" placeholder="66831 PF"></li>
	          					<li><input type="text" name="66832tc" placeholder="disabled" disabled><input type="text" name="66832tf" placeholder="disabled" disabled><input type="text" name="66832pc" placeholder="66832 PC"><input type="text" name="66832pf" placeholder="66832 PF"></li>
	          					<li><input type="text" name="66833tc" placeholder="66833 TC"><input type="text" name="66833tf" placeholder="66833 TF"><input type="text" name="66833pc" placeholder="66833 PC"><input type="text" name="66833pf" placeholder="66833 PF"></li>
	          					<li><input type="text" name="66835tc" placeholder="66835 TC"><input type="text" name="66835tf" placeholder="66835 TF"><input type="text" name="66835pc" placeholder="66835 PC"><input type="text" name="66835pf" placeholder="66835 PF"></li>
	          					<li><input type="text" name="65931tc" placeholder="65931 TC"><input type="text" name="65931tf" placeholder="65931 TF"><input type="text" name="65931pc" placeholder="65931 PC"><input type="text" name="65931pf" placeholder="disabled" disabled></li>
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