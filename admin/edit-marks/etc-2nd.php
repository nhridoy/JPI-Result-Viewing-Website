<?php

	session_start();
	if(empty($_SESSION['roll'])){
		header('location:../edit.php');
	}
	include('../../connect.php');
	$object=new connect;
	$roll= $_SESSION['roll'];
	$select = "SELECT * FROM student_info WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();



	$marks = "SELECT * FROM etc2nd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc66821 = $marks_loop->tc66821; 
	$markstf66821 = $marks_loop->tf66821; 
	$markspc66821 = $marks_loop->pc66821; 
	$markspf66821 = $marks_loop->pf66821; 
	$markspc66611 = $marks_loop->pc66611; 
	$markspf66611 = $marks_loop->pf66611; 
	$markstc65921 = $marks_loop->tc65921; 
	$markstf65921 = $marks_loop->tf65921; 
	$markspc65921 = $marks_loop->pc65921; 
	$markstc65912 = $marks_loop->tc65912; 
	$markstf65912 = $marks_loop->tf65912; 
	$markspc65912 = $marks_loop->pc65912; 
	$markspf65912 = $marks_loop->pf65912; 
	$markstc65711 = $marks_loop->tc65711; 
	$markstf65711 = $marks_loop->tf65711; 
	$markspc65711 = $marks_loop->pc65711; 
	$markstc65712 = $marks_loop->tc65712; 
	$markstf65712 = $marks_loop->tf65712;

	if($markstc66821 >= (60*40)/100 && $markstf66821 >= (90*40)/100 && $markspc66821 >= (25*40)/100 && $markspf66821 >= (25*40)/100){
		$marks66821=$markstc66821 + $markstf66821 + $markspc66821 + $markspf66821;
	}else{
		$marks66821 = 0;
	}
	if($markspc66611 >= (50*40)/100 && $markspf66611 >= (50*40)/100){
		$marks66611=$markspc66611 + $markspf66611;
	}else{
		$marks66611 = 0;
	}
	if($markstc65921 >= (60*40)/100 && $markstf65921 >= (90*40)/100 && $markspc65921 >= (50*40)/100){
		$marks65921=$markstc65921 + $markstf65921 + $markspc65921;
	}else{
		$marks65921 = 0;
	}
	if($markstc65912 >= (60*40)/100 && $markstf65912 >= (90*40)/100 && $markspc65912 >= (25*40)/100 && $markspf65912 >= (25*40)/100){
		$marks65912=$markstc65912 + $markstf65912 + $markspc65912 + $markspf65912;
	}else{
		$marks65912 = 0;
	}
	if($markstc65711 >= (60*40)/100 && $markstf65711 >= (90*40)/100 && $markspc65711 >= (50*40)/100){
		$marks65711=$markstc65711 + $markstf65711 + $markspc65711;
	}else{
		$marks65711 = 0;
	}
	if($markstc65712 >= (40*40)/100 && $markstf65712 >= (60*40)/100){
		$marks65712=$markstc65712 + $markstf65712;
	}else{
		$marks65712 = 0;
	}




	if($marks66821 >= (200*80)/100){
		$gpa66821 = "A+";
		$grade66821 = "4.00";
	}
	elseif($marks66821 >= (200*75)/100 && $marks66821 < (200*80)/100){
		$gpa66821 = "A";
		$grade66821 = "3.75";
	}
	elseif($marks66821 >= (200*70)/100 && $marks66821 < (200*75)/100){
		$gpa66821 = "A-";
		$grade66821 = "3.50";
	}
	elseif($marks66821 >= (200*65)/100 && $marks66821 < (200*70)/100){
		$gpa66821 = "B+";
		$grade66821 = "3.25";
	}
	elseif($marks66821 >= (200*60)/100 && $marks66821 < (200*65)/100){
		$gpa66821 = "B";
		$grade66821 = "3.00";
	}
	elseif($marks66821 >= (200*55)/100 && $marks66821 < (200*60)/100){
		$gpa66821 = "B-";
		$grade66821 = "2.75";
	}
	elseif($marks66821 >= (200*50)/100 && $marks66821 < (200*55)/100){
		$gpa66821 = "C+";
		$grade66821 = "2.50";
	}
	elseif($marks66821 >= (200*45)/100 && $marks66821 < (200*50)/100){
		$gpa66821 = "C";
		$grade66821 = "2.25";
	}
	elseif($marks66821 >= (200*40)/100 && $marks66821 < (200*45)/100){
		$gpa66821 = "D";
		$grade66821 = "2.00";
	}
	elseif($marks66821 < (200*40)/100){
		$gpa66821 = "F";
		$grade66821 = "0.00";
	}



	if($marks66611 >= (100*80)/100){
		$gpa66611 = "A+";
		$grade66611 = "4.00";
	}
	elseif($marks66611 >= (100*75)/100 && $marks66611 < (100*80)/100){
		$gpa66611 = "A";
		$grade66611 = "3.75";
	}
	elseif($marks66611 >= (100*70)/100 && $marks66611 < (100*75)/100){
		$gpa66611 = "A-";
		$grade66611 = "3.50";
	}
	elseif($marks66611 >= (100*65)/100 && $marks66611 < (100*70)/100){
		$gpa66611 = "B+";
		$grade66611 = "3.25";
	}
	elseif($marks66611 >= (100*60)/100 && $marks66611 < (100*65)/100){
		$gpa66611 = "B";
		$grade66611 = "3.00";
	}
	elseif($marks66611 >= (100*55)/100 && $marks66611 < (100*60)/100){
		$gpa66611 = "B-";
		$grade66611 = "2.75";
	}
	elseif($marks66611 >= (100*50)/100 && $marks66611 < (100*55)/100){
		$gpa66611 = "C+";
		$grade66611 = "2.50";
	}
	elseif($marks66611 >= (100*45)/100 && $marks66611 < (100*50)/100){
		$gpa66611 = "C";
		$grade66611 = "2.25";
	}
	elseif($marks66611 >= (100*40)/100 && $marks66611 < (100*45)/100){
		$gpa66611 = "D";
		$grade66611 = "2.00";
	}
	elseif($marks66611 < (100*40)/100){
		$gpa66611 = "F";
		$grade66611 = "0.00";
	}



	if($marks65921 >= (200*80)/100){
		$gpa65921 = "A+";
		$grade65921 = "4.00";
	}
	elseif($marks65921 >= (20075)/100 && $marks65921 < (200*80)/100){
		$gpa65921 = "A";
		$grade65921 = "3.75";
	}
	elseif($marks65921 >= (200*70)/100 && $marks65921 < (200*75)/100){
		$gpa65921 = "A-";
		$grade65921 = "3.50";
	}
	elseif($marks65921 >= (200*65)/100 && $marks65921 < (200*70)/100){
		$gpa65921 = "B+";
		$grade65921 = "3.25";
	}
	elseif($marks65921 >= (200*60)/100 && $marks65921 < (200*65)/100){
		$gpa65921 = "B";
		$grade65921 = "3.00";
	}
	elseif($marks65921 >= (200*55)/100 && $marks65921 < (200*60)/100){
		$gpa65921 = "B-";
		$grade65921 = "2.75";
	}
	elseif($marks65921 >= (200*50)/100 && $marks65921 < (200*55)/100){
		$gpa65921 = "C+";
		$grade65921 = "2.50";
	}
	elseif($marks65921 >= (200*45)/100 && $marks65921 < (200*50)/100){
		$gpa65921 = "C";
		$grade65921 = "2.25";
	}
	elseif($marks65921 >= (200*40)/100 && $marks65921 < (200*45)/100){
		$gpa65921 = "D";
		$grade65921 = "2.00";
	}
	elseif($marks65921 < (200*40)/100){
		$gpa65921 = "F";
		$grade65921 = "0.00";
	}



	if($marks65912 >= (200*80)/100){
		$gpa65912 = "A+";
		$grade65912 = "4.00";
	}
	elseif($marks65912 >= (200*75)/100 && $marks65912 < (200*80)/100){
		$gpa65912 = "A";
		$grade65912 = "3.75";
	}
	elseif($marks65912 >= (200*70)/100 && $marks65912 < (200*75)/100){
		$gpa65912 = "A-";
		$grade65912 = "3.50";
	}
	elseif($marks65912 >= (200*65)/100 && $marks65912 < (200*70)/100){
		$gpa65912 = "B+";
		$grade65912 = "3.25";
	}
	elseif($marks65912 >= (200*60)/100 && $marks65912 < (200*65)/100){
		$gpa65912 = "B";
		$grade65912 = "3.00";
	}
	elseif($marks65912 >= (200*55)/100 && $marks65912 < (200*60)/100){
		$gpa65912 = "B-";
		$grade65912 = "2.75";
	}
	elseif($marks65912 >= (200*50)/100 && $marks65912 < (200*55)/100){
		$gpa65912 = "C+";
		$grade65912 = "2.50";
	}
	elseif($marks65912 >= (200*45)/100 && $marks65912 < (200*50)/100){
		$gpa65912 = "C";
		$grade65912 = "2.25";
	}
	elseif($marks65912 >= (200*40)/100 && $marks65912 < (200*45)/100){
		$gpa65912 = "D";
		$grade65912 = "2.00";
	}
	elseif($marks65912 < (200*40)/100){
		$gpa65912 = "F";
		$grade65912 = "0.00";
	}



	if($marks65711 >= (200*80)/100){
		$gpa65711 = "A+";
		$grade65711 = "4.00";
	}
	elseif($marks65711 >= (200*75)/100 && $marks65711 < (200*80)/100){
		$gpa65711 = "A";
		$grade65711 = "3.75";
	}
	elseif($marks65711 >= (200*70)/100 && $marks65711 < (200*75)/100){
		$gpa65711 = "A-";
		$grade65711 = "3.50";
	}
	elseif($marks65711 >= (200*65)/100 && $marks65711 < (200*70)/100){
		$gpa65711 = "B+";
		$grade65711 = "3.25";
	}
	elseif($marks65711 >= (200*60)/100 && $marks65711 < (200*65)/100){
		$gpa65711 = "B";
		$grade65711 = "3.00";
	}
	elseif($marks65711 >= (200*55)/100 && $marks65711 < (200*60)/100){
		$gpa65711 = "B-";
		$grade65711 = "2.75";
	}
	elseif($marks65711 >= (200*50)/100 && $marks65711 < (200*55)/100){
		$gpa65711 = "C+";
		$grade65711 = "2.50";
	}
	elseif($marks65711 >= (200*45)/100 && $marks65711 < (200*50)/100){
		$gpa65711 = "C";
		$grade65711 = "2.25";
	}
	elseif($marks65711 >= (200*40)/100 && $marks65711 < (200*45)/100){
		$gpa65711 = "D";
		$grade65711 = "2.00";
	}
	elseif($marks65711 < (200*40)/100){
		$gpa65711 = "F";
		$grade65711 = "0.00";
	}



	if($marks65712 >= (100*80)/100){
		$gpa65712 = "A+";
		$grade65712 = "4.00";
	}
	elseif($marks65712 >= (100*75)/100 && $marks65712 < (100*80)/100){
		$gpa65712 = "A";
		$grade65712 = "3.75";
	}
	elseif($marks65712 >= (100*70)/100 && $marks65712 < (100*75)/100){
		$gpa65712 = "A-";
		$grade65712 = "3.50";
	}
	elseif($marks65712 >= (100*65)/100 && $marks65712 < (100*70)/100){
		$gpa65712 = "B+";
		$grade65712 = "3.25";
	}
	elseif($marks65712 >= (100*60)/100 && $marks65712 < (100*65)/100){
		$gpa65712 = "B";
		$grade65712 = "3.00";
	}
	elseif($marks65712 >= (100*55)/100 && $marks65712 < (100*60)/100){
		$gpa65712 = "B-";
		$grade65712 = "2.75";
	}
	elseif($marks65712 >= (100*50)/100 && $marks65712 < (100*55)/100){
		$gpa65712 = "C+";
		$grade65712 = "2.50";
	}
	elseif($marks65712 >= (100*45)/100 && $marks65712 < (100*50)/100){
		$gpa65712 = "C";
		$grade65712 = "2.25";
	}
	elseif($marks65712 >= (100*40)/100 && $marks65712 < (100*45)/100){
		$gpa65712 = "D";
		$grade65712 = "2.00";
	}
	elseif($marks65712 < (100*40)/100){
		$gpa65712 = "F";
		$grade65712 = "0.00";
	}


	if($grade66821>0 && $grade66611>0 && $grade65921>0 && $grade65912>0 && $grade65711>0 && $grade65712>0){
		$grade = ($grade66821+$grade66611 +$grade65921+$grade65912 +$grade65711 +$grade65712)/6 .".00";
		$gpa = substr($grade,0,4);
	}else{
		$gpa = "0.00";
	}
	$date = date('d-M-Y');


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Electronics 2nd Semester Result</title>
	<link rel="stylesheet" href="../../css/result.css" type="text/css"/>
	<script src="../../js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="body">
		<div class="info">
			<div class="head">
				<h3>Government of the People's Republic of Bangladesh</h3>
				<div class="jpiname fix">
					<img class="floatleft fix" src="../images/jpi.png" alt="">
					<h2 class="floatright fix">Jessore Polytechnic Institute</h2>
				</div>
				<p>ACADEMIC TRANSCRIPT</p>
				<p><b>Diploma-in-Engineering Programme </b>(Duration: 4 - Year)</p>
				<p><b>2nd Semester Examination, 2017</b></p>
				<p>(Held in the Month of <?php
  $month_id = $marks_loop->month;
  $marks_join = "SELECT month_name FROM month WHERE id='$month_id'";
  $marks_join_data = $object->select($marks_join);
  $marks_join_show = $marks_join_data->fetch_object();
  echo $marks_join_show->month_name;
  ?>-<?php
  $year_id = $marks_loop->year;
  $marks_join = "SELECT year_name FROM year WHERE id='$year_id'";
  $marks_join_data = $object->select($marks_join);
  $marks_join_show = $marks_join_data->fetch_object();
  echo $marks_join_show->year_name;
  ?>)</p>
			</div>
			<div class="information fix">
				<div class="info_left floatleft fix">
					<table cellspacing="15px">
						<tr>
							<td><p><b>Technology</b></p></td>
							<td>: 668-Electronics Technology</td>
						</tr>
						<tr>
							<td><b>Name</b></td>
							<td>: <?php $strupname=$select_loop->name; echo strtoupper($strupname) ?></td>
						</tr>
						<tr>
							<td><b>Father's Name</b></td>
							<td>: <?php $strupfname = $select_loop->fathers_name; echo strtoupper($strupfname) ?></td>
						</tr>
						<tr>
							<td><b>Mother's Name</b></td>
							<td>: <?php $strupmname = $select_loop->mothers_name; echo strtoupper($strupmname) ?></td>
						</tr>
						<tr>
							<td><b>Roll No.</b></td>
							<td>: <?php echo $select_loop->roll; ?></td>
						</tr>
						<tr>
							<td><b>Registration No.</b></td>
							<td>: <?php echo $select_loop->registration; ?></td>
						</tr>
						<tr>
							<td><b>Session</b></td>
							<td>: <?php echo $select_loop->student_session; ?></td>
						</tr>

					</table>
				</div>
				<div class="info_right floatright fix">
					<table cellspacing="0">
						<tr>
							<td>Range of Marks<br>(Percentage)</td>
							<td>Grade</td>
							<td>Point</td>
						</tr>
						<tr>
							<td>80 or above</td>
							<td>A+</td>
							<td>4.00</td>
						</tr>
						<tr>
							<td>75 - below 80</td>
							<td>A</td>
							<td>3.75</td>
						</tr>
						<tr>
							<td>70 - below 75</td>
							<td>A-</td>
							<td>3.50</td>
						</tr>
						<tr>
							<td>65 - below 70</td>
							<td>B+</td>
							<td>3.25</td>
						</tr>
						<tr>
							<td>60 - below 65</td>
							<td>B</td>
							<td>3.00</td>
						</tr>
						<tr>
							<td>55 - below 60</td>
							<td>B-</td>
							<td>2.75</td>
						</tr>
						<tr>
							<td>50 - below 55</td>
							<td>C+</td>
							<td>2.50</td>
						</tr>
						<tr>
							<td>45 - below 50</td>
							<td>C</td>
							<td>2.25</td>
						</tr>
						<tr>
							<td>40 - below 45</td>
							<td>D</td>
							<td>2.00</td>
						</tr>
						<tr>
							<td>Below 40</td>
							<td>F</td>
							<td>0.00</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="result">
			<center>
				<table cellspacing="0">
					<tr>
						<th width="680px">Subjects</th>
						<th>Credit</th>
						<th>Marks</th>
						<th>Grade Letter</th>
						<th>Grade Point</th>
					</tr>
					<tr>
						<td>66821 - Electronic Devices & Circuits</td>
						<td>4</td>
						<td><?php echo $marks66821; ?></td>
						<td><?php echo $gpa66821; ?></td>
						<td><?php echo $grade66821; ?></td>
					</tr>
					<tr>
						<td>66611 - Computer Application</td>
						<td>2</td>
						<td><?php echo $marks66611; ?></td>
						<td><?php echo $gpa66611; ?></td>
						<td><?php echo $grade66611; ?></td>
					</tr>
					<tr>
						<td>65921 - Mathematics-2</td>
						<td>4</td>
						<td><?php echo $marks65921; ?></td>
						<td><?php echo $gpa65921; ?></td>
						<td><?php echo $grade65921; ?></td>
					</tr>
					<tr>
						<td>65912 - Physics-1</td>
						<td>4</td>
						<td><?php echo $marks65912; ?></td>
						<td><?php echo $gpa65912; ?></td>
						<td><?php echo $grade65912; ?></td>
					</tr>
					<tr>
						<td>65711 - Bangla</td>
						<td>4</td>
						<td><?php echo $marks65711; ?></td>
						<td><?php echo $gpa65711; ?></td>
						<td><?php echo $grade65711; ?></td>
					</tr>
					<tr>
						<td>65712 - English</td>
						<td>2</td>
						<td><?php echo $marks65712; ?></td>
						<td><?php echo $gpa65712; ?></td>
						<td><?php echo $grade65712; ?></td>
					</tr>
					</tr>
				</table>
			</center>
			<div class="floatright fix gpa">
				<b class="gparesult floatleft">GPA: </b><p class="floatright gpoint"><?php echo $gpa; ?></p>
			</div>
			
		</div>
		<div class="signeture">
			<center>
				<table cellspacing="100px">
					<tr>
						<th><?php echo $date; ?></th>
						<td>Prepared By</td>
						<td>Compared By</td>
					</tr>
					<tr>
						<td>Head of the Department</td>
						<td>Vice Principal</td>
						<td>Principal</td>
					</tr>
				</table>
			</center>
		</div>
		<div class="footer"><center>
			<a style="display: inline-block;color: #fff;background: red;padding: 5px 10px;" href="etc/etc2nd.php?edit=<?php echo $select_loop->roll; ?>">Edit</a>
			<a href="../edit.php">Edit Again</a>
		</center></div>
	</div>

</body>
</html>