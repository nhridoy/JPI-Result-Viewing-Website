<?php

	session_start();
	if(empty($_SESSION['roll'])){
		header('location:index.php');
	}
	include('../connect.php');
	$object=new connect;
	$roll= $_SESSION['roll'];
	$select = "SELECT * FROM student_info WHERE roll='$roll'";
	$select_result = $object->select($select);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$select_loop=$select_result->fetch_object();



	$marks = "SELECT * FROM m2nd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markspc67021 = $marks_loop->pc67021; 
	$markspf67021 = $marks_loop->pf67021; 
	$markstc67022 = $marks_loop->tc67022; 
	$markstf67022 = $marks_loop->tf67022; 
	$markspc67022 = $marks_loop->pc67022; 
	$markspf67022 = $marks_loop->pf67022; 
	$markspc67023 = $marks_loop->pc67023; 
	$markspf67023 = $marks_loop->pf67023; 
	$markstc65712 = $marks_loop->tc65712; 
	$markstf65712 = $marks_loop->tf65712; 
	$markstc65921 = $marks_loop->tc65921; 
	$markstf65921 = $marks_loop->tf65921; 
	$markspc65921 = $marks_loop->pc65921; 
	$markstc65912 = $marks_loop->tc65912; 
	$markstf65912 = $marks_loop->tf65912; 
	$markspc65912 = $marks_loop->pc65912; 
	$markspf65912 = $marks_loop->pf65912; 
	$markstc65811 = $marks_loop->tc65811; 
	$markstf65811 = $marks_loop->tf65811;  

	if($markspc67021 >= (50*40)/100 && $markspf67021 >= (50*40)/100){
		$marks67021=$markspc67021 + $markspf67021;
	}else{
		$marks67021 = 0;
	}
	if($markstc67022 >= (20*40)/100 && $markstf67022 >= (30*40)/100 && $markspc67022 >= (50*40)/100 && $markspf67022 >= (50*40)/100){
		$marks67022=$markstc67022 + $markstf67022 + $markspc67022 + $markspf67022;
	}else{
		$marks67022 = 0;
	}
	if($markspc67023 >= (50*40)/100 && $markspf67023 >= (50*40)/100){
		$marks67023=$markspc67023 + $markspf67023;
	}else{
		$marks67023 = 0;
	}
	if($markstc65712 >= (40*40)/100 && $markstf65712 >= (60*40)/100){
		$marks65712=$markstc65712 + $markstf65712;
	}else{
		$marks65712 = 0;
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
	if($markstc65811 >= (60*40)/100 && $markstf65811 >= (90*40)/100){
		$marks65811=$markstc65811 + $markstf65811;
	}else{
		$marks65811 = 0;
	}




	if($marks67021 >= (100*80)/100){
		$gpa67021 = "A+";
		$grade67021 = "4.00";
	}
	elseif($marks67021 >= (100*75)/100 && $marks67021 < (100*80)/100){
		$gpa67021 = "A";
		$grade67021 = "3.75";
	}
	elseif($marks67021 >= (100*70)/100 && $marks67021 < (100*75)/100){
		$gpa67021 = "A-";
		$grade67021 = "3.50";
	}
	elseif($marks67021 >= (100*65)/100 && $marks67021 < (100*70)/100){
		$gpa67021 = "B+";
		$grade67021 = "3.25";
	}
	elseif($marks67021 >= (100*60)/100 && $marks67021 < (100*65)/100){
		$gpa67021 = "B";
		$grade67021 = "3.00";
	}
	elseif($marks67021 >= (100*55)/100 && $marks67021 < (100*60)/100){
		$gpa67021 = "B-";
		$grade67021 = "2.75";
	}
	elseif($marks67021 >= (100*50)/100 && $marks67021 < (100*55)/100){
		$gpa67021 = "C+";
		$grade67021 = "2.50";
	}
	elseif($marks67021 >= (100*45)/100 && $marks67021 < (100*50)/100){
		$gpa67021 = "C";
		$grade67021 = "2.25";
	}
	elseif($marks67021 >= (100*40)/100 && $marks67021 < (100*45)/100){
		$gpa67021 = "D";
		$grade67021 = "2.00";
	}
	elseif($marks67021 < (100*40)/100){
		$gpa67021 = "F";
		$grade67021 = "0.00";
	}





	if($marks67022 >= (150*80)/100){
		$gpa67022 = "A+";
		$grade67022 = "4.00";
	}
	elseif($marks67022 >= (150*75)/100 && $marks67022 < (150*80)/100){
		$gpa67022 = "A";
		$grade67022 = "3.75";
	}
	elseif($marks67022 >= (150*70)/100 && $marks67022 < (150*75)/100){
		$gpa67022 = "A-";
		$grade67022 = "3.50";
	}
	elseif($marks67022 >= (150*65)/100 && $marks67022 < (150*70)/100){
		$gpa67022 = "B+";
		$grade67022 = "3.25";
	}
	elseif($marks67022 >= (150*60)/100 && $marks67022 < (150*65)/100){
		$gpa67022 = "B";
		$grade67022 = "3.00";
	}
	elseif($marks67022 >= (150*55)/100 && $marks67022 < (150*60)/100){
		$gpa67022 = "B-";
		$grade67022 = "2.75";
	}
	elseif($marks67022 >= (150*50)/100 && $marks67022 < (150*55)/100){
		$gpa67022 = "C+";
		$grade67022 = "2.50";
	}
	elseif($marks67022 >= (150*45)/100 && $marks67022 < (150*50)/100){
		$gpa67022 = "C";
		$grade67022 = "2.25";
	}
	elseif($marks67022 >= (150*40)/100 && $marks67022 < (150*45)/100){
		$gpa67022 = "D";
		$grade67022 = "2.00";
	}
	elseif($marks67022 < (150*40)/100){
		$gpa67022 = "F";
		$grade67022 = "0.00";
	}



	if($marks67023 >= (100*80)/100){
		$gpa67023 = "A+";
		$grade67023 = "4.00";
	}
	elseif($marks67023 >= (100*75)/100 && $marks67023 < (100*80)/100){
		$gpa67023 = "A";
		$grade67023 = "3.75";
	}
	elseif($marks67023 >= (100*70)/100 && $marks67023 < (100*75)/100){
		$gpa67023 = "A-";
		$grade67023 = "3.50";
	}
	elseif($marks67023 >= (100*65)/100 && $marks67023 < (100*70)/100){
		$gpa67023 = "B+";
		$grade67023 = "3.25";
	}
	elseif($marks67023 >= (100*60)/100 && $marks67023 < (100*65)/100){
		$gpa67023 = "B";
		$grade67023 = "3.00";
	}
	elseif($marks67023 >= (100*55)/100 && $marks67023 < (100*60)/100){
		$gpa67023 = "B-";
		$grade67023 = "2.75";
	}
	elseif($marks67023 >= (100*50)/100 && $marks67023 < (100*55)/100){
		$gpa67023 = "C+";
		$grade67023 = "2.50";
	}
	elseif($marks67023 >= (100*45)/100 && $marks67023 < (100*50)/100){
		$gpa67023 = "C";
		$grade67023 = "2.25";
	}
	elseif($marks67023 >= (100*40)/100 && $marks67023 < (100*45)/100){
		$gpa67023 = "D";
		$grade67023 = "2.00";
	}
	elseif($marks67023 < (100*40)/100){
		$gpa67023 = "F";
		$grade67023 = "0.00";
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



	if($marks65811 >= (150*80)/100){
		$gpa65811 = "A+";
		$grade65811 = "4.00";
	}
	elseif($marks65811 >= (150*75)/100 && $marks65811 < (150*80)/100){
		$gpa65811 = "A";
		$grade65811 = "3.75";
	}
	elseif($marks65811 >= (150*70)/100 && $marks65811 < (150*75)/100){
		$gpa65811 = "A-";
		$grade65811 = "3.50";
	}
	elseif($marks65811 >= (150*65)/100 && $marks65811 < (150*70)/100){
		$gpa65811 = "B+";
		$grade65811 = "3.25";
	}
	elseif($marks65811 >= (150*60)/100 && $marks65811 < (150*65)/100){
		$gpa65811 = "B";
		$grade65811 = "3.00";
	}
	elseif($marks65811 >= (150*55)/100 && $marks65811 < (150*60)/100){
		$gpa65811 = "B-";
		$grade65811 = "2.75";
	}
	elseif($marks65811 >= (150*50)/100 && $marks65811 < (150*55)/100){
		$gpa65811 = "C+";
		$grade65811 = "2.50";
	}
	elseif($marks65811 >= (150*45)/100 && $marks65811 < (150*50)/100){
		$gpa65811 = "C";
		$grade65811 = "2.25";
	}
	elseif($marks65811 >= (150*40)/100 && $marks65811 < (150*45)/100){
		$gpa65811 = "D";
		$grade65811 = "2.00";
	}
	elseif($marks65811 < (150*40)/100){
		$gpa65811 = "F";
		$grade65811 = "0.00";
	}


	if($grade67021>0 && $grade67022>0 && $grade67023>0 && $grade65712>0 && $grade65921>0 && $grade65912>0 && $grade65811>0){
		$grade = ($grade67021+$grade67022 +$grade67023+$grade65712 +$grade65921 +$grade65912 +$grade65811)/7 .".00";
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
	<title>Mechanical 2nd Semester Result</title>
	<link rel="stylesheet" href="../css/result.css" type="text/css"/>
	<script src="../js/jquery-3.2.1.min.js"></script>
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
							<td>: 670-Mechanical Technology</td>
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
						<td>67021 - Advanced Mechanical Engineering Drawing</td>
						<td>2</td>
						<td><?php echo $marks67021; ?></td>
						<td><?php echo $gpa67021; ?></td>
						<td><?php echo $grade67021; ?></td>
					</tr>
					<tr>
						<td>67022 - Machine Shop Practice-1</td>
						<td>3</td>
						<td><?php echo $marks67022; ?></td>
						<td><?php echo $gpa67022; ?></td>
						<td><?php echo $grade67022; ?></td>
					</tr>
					<tr>
						<td>67023 - Mechanical Workshop Practice</td>
						<td>2</td>
						<td><?php echo $marks67023; ?></td>
						<td><?php echo $gpa67023; ?></td>
						<td><?php echo $grade67023; ?></td>
					</tr>
					<tr>
						<td>65712 - English</td>
						<td>2</td>
						<td><?php echo $marks65712; ?></td>
						<td><?php echo $gpa65712; ?></td>
						<td><?php echo $grade65712; ?></td>
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
						<td>65811-Social Science</td>
						<td>3</td>
						<td><?php echo $marks65811; ?></td>
						<td><?php echo $gpa65811; ?></td>
						<td><?php echo $grade65811; ?></td>
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
			<button title="Print Result" onclick="window.print();" target="_blank" style="cursor: pointer;">Print</button>
			<a href="../index.php">Search Again</a>
		</center></div>
	</div>

</body>
</html>