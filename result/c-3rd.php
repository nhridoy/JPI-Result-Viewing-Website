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



	$marks = "SELECT * FROM c3rd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc66431 = $marks_loop->tc66431; 
	$markstf66431 = $marks_loop->tf66431; 
	$markspc66431 = $marks_loop->pc66431; 
	$markspf66431 = $marks_loop->pf66431; 
	$markstc66432 = $marks_loop->tc66432; 
	$markstf66432 = $marks_loop->tf66432; 
	$markspc66432 = $marks_loop->pc66432; 
	$markspf66432 = $marks_loop->pf66432; 
	$markstc66433 = $marks_loop->tc66433; 
	$markstf66433 = $marks_loop->tf66433; 
	$markspc66433 = $marks_loop->pc66433; 
	$markspf66433 = $marks_loop->pf66433; 
	$markspc66434 = $marks_loop->pc66434; 
	$markspf66434 = $marks_loop->pf66434; 
	$markstc65931 = $marks_loop->tc65931; 
	$markstf65931 = $marks_loop->tf65931; 
	$markspc65931 = $marks_loop->pc65931; 
	$markstc65913 = $marks_loop->tc65913; 
	$markstf65913 = $marks_loop->tf65913; 
	$markspc65913 = $marks_loop->pc65913; 
	$markspf65913 = $marks_loop->pf65913; 
	$markstc65811 = $marks_loop->tc65811; 
	$markstf65811 = $marks_loop->tf65811; 

	if($markstc66431 >= (20*40)/100 && $markstf66431 >= (30*40)/100 && $markspc66431 >= (50*40)/100 && $markspf66431 >= (50*40)/100){
		$marks66431=$markstc66431 + $markstf66431 + $markspc66431 + $markspf66431;
	}else{
		$marks66431 = 0;
	}
	if($markstc66432 >= (40*40)/100 && $markstf66432 >= (60*40)/100 && $markspc66432 >= (25*40)/100 && $markspf66432 >= (25*40)/100){
		$marks66432=$markstc66432 + $markstf66432 + $markspc66432 + $markspf66432;
	}else{
		$marks66432 = 0;
	}
	if($markstc66433 >= (40*40)/100 && $markstf66433 >= (60*40)/100 && $markspc66433 >= (25*40)/100 && $markspf66433 >= (25*40)/100){
		$marks66433=$markstc66433 + $markstf66433 + $markspc66433 + $markspf66433;
	}else{
		$marks66433 = 0;
	}
	if($markspc66434 >= (25*40)/100 && $markspf66434 >= (25*40)/100){
		$marks66434=$markspc66434 + $markspf66434;
	}else{
		$marks66434 = 0;
	}
	if($markstc65931 >= (60*40)/100 && $markstf65931 >= (90*40)/100 && $markspc65931 >= (50*40)/100){
		$marks65931=$markstc65931 + $markstf65931 + $markspc65931;
	}else{
		$marks65931 = 0;
	}
	if($markstc65913 >= (60*40)/100 && $markstf65913 >= (90*40)/100 && $markspc65913 >= (25*40)/100 && $markspf65913 >= (25*40)/100){
		$marks65913=$markstc65913 + $markstf65913 + $markspc65913 + $markspf65913;
	}else{
		$marks65913 = 0;
	}
	if($markstc65811 >= (60*40)/100 && $markstf65811 >= (90*40)/100){
		$marks65811=$markstc65811 + $markstf65811;
	}else{
		$marks65811 = 0;
	}




	if($marks66431 >= (150*80)/100){
		$gpa66431 = "A+";
		$grade66431 = "4.00";
	}
	elseif($marks66431 >= (150*75)/100 && $marks66431 < (150*80)/100){
		$gpa66431 = "A";
		$grade66431 = "3.75";
	}
	elseif($marks66431 >= (150*70)/100 && $marks66431 < (150*75)/100){
		$gpa66431 = "A-";
		$grade66431 = "3.50";
	}
	elseif($marks66431 >= (150*65)/100 && $marks66431 < (150*70)/100){
		$gpa66431 = "B+";
		$grade66431 = "3.25";
	}
	elseif($marks66431 >= (150*60)/100 && $marks66431 < (150*65)/100){
		$gpa66431 = "B";
		$grade66431 = "3.00";
	}
	elseif($marks66431 >= (150*55)/100 && $marks66431 < (150*60)/100){
		$gpa66431 = "B-";
		$grade66431 = "2.75";
	}
	elseif($marks66431 >= (150*50)/100 && $marks66431 < (150*55)/100){
		$gpa66431 = "C+";
		$grade66431 = "2.50";
	}
	elseif($marks66431 >= (150*45)/100 && $marks66431 < (150*50)/100){
		$gpa66431 = "C";
		$grade66431 = "2.25";
	}
	elseif($marks66431 >= (150*40)/100 && $marks66431 < (150*45)/100){
		$gpa66431 = "D";
		$grade66431 = "2.00";
	}
	elseif($marks66431 < (150*40)/100){
		$gpa66431 = "F";
		$grade66431 = "0.00";
	}





	if($marks66432 >= (150*80)/100){
		$gpa66432 = "A+";
		$grade66432 = "4.00";
	}
	elseif($marks66432 >= (150*75)/100 && $marks66432 < (150*80)/100){
		$gpa66432 = "A";
		$grade66432 = "3.75";
	}
	elseif($marks66432 >= (150*70)/100 && $marks66432 < (150*75)/100){
		$gpa66432 = "A-";
		$grade66432 = "3.50";
	}
	elseif($marks66432 >= (150*65)/100 && $marks66432 < (150*70)/100){
		$gpa66432 = "B+";
		$grade66432 = "3.25";
	}
	elseif($marks66432 >= (150*60)/100 && $marks66432 < (150*65)/100){
		$gpa66432 = "B";
		$grade66432 = "3.00";
	}
	elseif($marks66432 >= (150*55)/100 && $marks66432 < (150*60)/100){
		$gpa66432 = "B-";
		$grade66432 = "2.75";
	}
	elseif($marks66432 >= (150*50)/100 && $marks66432 < (150*55)/100){
		$gpa66432 = "C+";
		$grade66432 = "2.50";
	}
	elseif($marks66432 >= (150*45)/100 && $marks66432 < (150*50)/100){
		$gpa66432 = "C";
		$grade66432 = "2.25";
	}
	elseif($marks66432 >= (150*40)/100 && $marks66432 < (150*45)/100){
		$gpa66432 = "D";
		$grade66432 = "2.00";
	}
	elseif($marks66432 < (150*40)/100){
		$gpa66432 = "F";
		$grade66432 = "0.00";
	}



	if($marks66433 >= (150*80)/100){
		$gpa66433 = "A+";
		$grade66433 = "4.00";
	}
	elseif($marks66433 >= (150*75)/100 && $marks66433 < (150*80)/100){
		$gpa66433 = "A";
		$grade66433 = "3.75";
	}
	elseif($marks66433 >= (150*70)/100 && $marks66433 < (150*75)/100){
		$gpa66433 = "A-";
		$grade66433 = "3.50";
	}
	elseif($marks66433 >= (150*65)/100 && $marks66433 < (150*70)/100){
		$gpa66433 = "B+";
		$grade66433 = "3.25";
	}
	elseif($marks66433 >= (150*60)/100 && $marks66433 < (150*65)/100){
		$gpa66433 = "B";
		$grade66433 = "3.00";
	}
	elseif($marks66433 >= (150*55)/100 && $marks66433 < (150*60)/100){
		$gpa66433 = "B-";
		$grade66433 = "2.75";
	}
	elseif($marks66433 >= (150*50)/100 && $marks66433 < (150*55)/100){
		$gpa66433 = "C+";
		$grade66433 = "2.50";
	}
	elseif($marks66433 >= (150*45)/100 && $marks66433 < (150*50)/100){
		$gpa66433 = "C";
		$grade66433 = "2.25";
	}
	elseif($marks66433 >= (150*40)/100 && $marks66433 < (150*45)/100){
		$gpa66433 = "D";
		$grade66433 = "2.00";
	}
	elseif($marks66433 < (150*40)/100){
		$gpa66433 = "F";
		$grade66433 = "0.00";
	}



	if($marks66434 >= (50*80)/100){
		$gpa66434 = "A+";
		$grade66434 = "4.00";
	}
	elseif($marks66434 >= (50*75)/100 && $marks66434 < (50*80)/100){
		$gpa66434 = "A";
		$grade66434 = "3.75";
	}
	elseif($marks66434 >= (50*70)/100 && $marks66434 < (50*75)/100){
		$gpa66434 = "A-";
		$grade66434 = "3.50";
	}
	elseif($marks66434 >= (50*65)/100 && $marks66434 < (50*70)/100){
		$gpa66434 = "B+";
		$grade66434 = "3.25";
	}
	elseif($marks66434 >= (50*60)/100 && $marks66434 < (50*65)/100){
		$gpa66434 = "B";
		$grade66434 = "3.00";
	}
	elseif($marks66434 >= (50*55)/100 && $marks66434 < (50*60)/100){
		$gpa66434 = "B-";
		$grade66434 = "2.75";
	}
	elseif($marks66434 >= (50*50)/100 && $marks66434 < (50*55)/100){
		$gpa66434 = "C+";
		$grade66434 = "2.50";
	}
	elseif($marks66434 >= (50*45)/100 && $marks66434 < (50*50)/100){
		$gpa66434 = "C";
		$grade66434 = "2.25";
	}
	elseif($marks66434 >= (50*40)/100 && $marks66434 < (50*45)/100){
		$gpa66434 = "D";
		$grade66434 = "2.00";
	}
	elseif($marks66434 < (50*40)/100){
		$gpa66434 = "F";
		$grade66434 = "0.00";
	}



	if($marks65931 >= (200*80)/100){
		$gpa65931 = "A+";
		$grade65931 = "4.00";
	}
	elseif($marks65931 >= (20075)/100 && $marks65931 < (200*80)/100){
		$gpa65931 = "A";
		$grade65931 = "3.75";
	}
	elseif($marks65931 >= (200*70)/100 && $marks65931 < (200*75)/100){
		$gpa65931 = "A-";
		$grade65931 = "3.50";
	}
	elseif($marks65931 >= (200*65)/100 && $marks65931 < (200*70)/100){
		$gpa65931 = "B+";
		$grade65931 = "3.25";
	}
	elseif($marks65931 >= (200*60)/100 && $marks65931 < (200*65)/100){
		$gpa65931 = "B";
		$grade65931 = "3.00";
	}
	elseif($marks65931 >= (200*55)/100 && $marks65931 < (200*60)/100){
		$gpa65931 = "B-";
		$grade65931 = "2.75";
	}
	elseif($marks65931 >= (200*50)/100 && $marks65931 < (200*55)/100){
		$gpa65931 = "C+";
		$grade65931 = "2.50";
	}
	elseif($marks65931 >= (200*45)/100 && $marks65931 < (200*50)/100){
		$gpa65931 = "C";
		$grade65931 = "2.25";
	}
	elseif($marks65931 >= (200*40)/100 && $marks65931 < (200*45)/100){
		$gpa65931 = "D";
		$grade65931 = "2.00";
	}
	elseif($marks65931 < (200*40)/100){
		$gpa65931 = "F";
		$grade65931 = "0.00";
	}



	if($marks65913 >= (200*80)/100){
		$gpa65913 = "A+";
		$grade65913 = "4.00";
	}
	elseif($marks65913 >= (200*75)/100 && $marks65913 < (200*80)/100){
		$gpa65913 = "A";
		$grade65913 = "3.75";
	}
	elseif($marks65913 >= (200*70)/100 && $marks65913 < (200*75)/100){
		$gpa65913 = "A-";
		$grade65913 = "3.50";
	}
	elseif($marks65913 >= (200*65)/100 && $marks65913 < (200*70)/100){
		$gpa65913 = "B+";
		$grade65913 = "3.25";
	}
	elseif($marks65913 >= (200*60)/100 && $marks65913 < (200*65)/100){
		$gpa65913 = "B";
		$grade65913 = "3.00";
	}
	elseif($marks65913 >= (200*55)/100 && $marks65913 < (200*60)/100){
		$gpa65913 = "B-";
		$grade65913 = "2.75";
	}
	elseif($marks65913 >= (200*50)/100 && $marks65913 < (200*55)/100){
		$gpa65913 = "C+";
		$grade65913 = "2.50";
	}
	elseif($marks65913 >= (200*45)/100 && $marks65913 < (200*50)/100){
		$gpa65913 = "C";
		$grade65913 = "2.25";
	}
	elseif($marks65913 >= (200*40)/100 && $marks65913 < (200*45)/100){
		$gpa65913 = "D";
		$grade65913 = "2.00";
	}
	elseif($marks65913 < (200*40)/100){
		$gpa65913 = "F";
		$grade65913 = "0.00";
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


	if($grade66431>0 && $grade66432>0 && $grade66433>0 && $grade66434>0 && $grade65931>0 && $grade65913>0 && $grade65811>0){
		$grade = ($grade66431+$grade66432 +$grade66433+$grade66434 +$grade65931 +$grade65913 +$grade65811)/7 .".00";
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
	<title>Civil 3rd Semester Result</title>
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
				<p><b>3rd Semester Examination, 2017</b></p>
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
							<td>: 664-Civil Technology</td>
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
						<td>66431 - Civil Engineering Drawing-1</td>
						<td>3</td>
						<td><?php echo $marks66431; ?></td>
						<td><?php echo $gpa66431; ?></td>
						<td><?php echo $grade66431; ?></td>
					</tr>
					<tr>
						<td>66432 - Surveying-1</td>
						<td>3</td>
						<td><?php echo $marks66432; ?></td>
						<td><?php echo $gpa66432; ?></td>
						<td><?php echo $grade66432; ?></td>
					</tr>
					<tr>
						<td>66433 - Construction Process-1</td>
						<td>3</td>
						<td><?php echo $marks66433; ?></td>
						<td><?php echo $gpa66433; ?></td>
						<td><?php echo $grade66433; ?></td>
					</tr>
					<tr>
						<td>66434 - Civil Workshop Practice</td>
						<td>1</td>
						<td><?php echo $marks66434; ?></td>
						<td><?php echo $gpa66434; ?></td>
						<td><?php echo $grade66434; ?></td>
					</tr>
					<tr>
						<td>65931 - Mathematics-3</td>
						<td>4</td>
						<td><?php echo $marks65931; ?></td>
						<td><?php echo $gpa65931; ?></td>
						<td><?php echo $grade65931; ?></td>
					</tr>
					<tr>
						<td>65913 - Chemistry</td>
						<td>4</td>
						<td><?php echo $marks65913; ?></td>
						<td><?php echo $gpa65913; ?></td>
						<td><?php echo $grade65913; ?></td>
					</tr>
					<tr>
						<td>65811 - Social Science</td>
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