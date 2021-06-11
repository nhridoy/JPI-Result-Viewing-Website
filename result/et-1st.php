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



	$marks = "SELECT * FROM et1st WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc66711 = $marks_loop->tc66711; 
	$markstf66711 = $marks_loop->tf66711; 
	$markspc66711 = $marks_loop->pc66711; 
	$markspf66711 = $marks_loop->pf66711; 
	$markstc66713 = $marks_loop->tc66713; 
	$markstf66713 = $marks_loop->tf66713; 
	$markstc65911 = $marks_loop->tc65911; 
	$markstf65911 = $marks_loop->tf65911; 
	$markspc65911 = $marks_loop->pc65911; 
	$markstc66811 = $marks_loop->tc66811; 
	$markstf66811 = $marks_loop->tf66811; 
	$markspc66811 = $marks_loop->pc66811; 
	$markspf66811 = $marks_loop->pf66811; 
	$markspc61011 = $marks_loop->pc61011; 
	$markspf61011 = $marks_loop->pf61011; 
	$markstc65913 = $marks_loop->tc65913; 
	$markstf65913 = $marks_loop->tf65913; 
	$markspc65913 = $marks_loop->pc65913; 
	$markspf65913 = $marks_loop->pf65913; 
	$markspc65812 = $marks_loop->pc65812; 
	$markspf65812 = $marks_loop->pf65812; 

	
	if($markstc66711 >= (60*40)/100 && $markstf66711 >= (90*40)/100 && $markspc66711 >= (25*40)/100 && $markspf66711 >= (25*40)/100){
		$marks66711=$markstc66711 + $markstf66711 + $markspc66711 + $markspf66711;
	}else{
		$marks66711 = 0;
	}
	if($markstc66713 >= (40*40)/100 && $markstf66713 >= (60*40)/100){
		$marks66713=$markstc66713 + $markstf66713;
	}else{
		$marks66713 = 0;
	}
	if($markstc65911 >= (60*40)/100 && $markstf65911 >= (90*40)/100 && $markspc65911 >= (50*40)/100){
		$marks65911=$markstc65911 + $markstf65911 + $markspc65911;
	}else{
		$marks65911 = 0;
	}
	if($markstc66811 >= (40*40)/100 && $markstf66811 >= (60*40)/100 && $markspc66811 >= (25*40)/100 && $markspf66811 >= (25*40)/100){
		$marks66811=$markstc66811 + $markstf66811 + $markspc66811 + $markspf66811;
	}else{
		$marks66811 = 0;
	}
	if($markspc61011 >= (50*40)/100 && $markspf61011 >= (50*40)/100){
		$marks61011=$markspc61011 + $markspf61011;
	}else{
		$marks61011 = 0;
	}
	if($markstc65913 >= (60*40)/100 && $markstf65913 >= (90*40)/100 && $markspc65913 >= (25*40)/100 && $markspf65913 >= (25*40)/100){
		$marks65913=$markstc65913 + $markstf65913 + $markspc65913 + $markspf65913;
	}else{
		$marks65913 = 0;
	}
	if($markspc65812 >= (25*40)/100 && $markspf65812 >= (25*40)/100){
		$marks65812=$markspc65812 + $markspf65812;
	}else{
		$marks65812 = 0;
	}




	if($marks66711 >= (200*80)/100){
		$gpa66711 = "A+";
		$grade66711 = "4.00";
	}
	elseif($marks66711 >= (200*75)/100 && $marks66711 < (200*80)/100){
		$gpa66711 = "A";
		$grade66711 = "3.75";
	}
	elseif($marks66711 >= (200*70)/100 && $marks66711 < (200*75)/100){
		$gpa66711 = "A-";
		$grade66711 = "3.50";
	}
	elseif($marks66711 >= (200*65)/100 && $marks66711 < (200*70)/100){
		$gpa66711 = "B+";
		$grade66711 = "3.25";
	}
	elseif($marks66711 >= (200*60)/100 && $marks66711 < (200*65)/100){
		$gpa66711 = "B";
		$grade66711 = "3.00";
	}
	elseif($marks66711 >= (200*55)/100 && $marks66711 < (200*60)/100){
		$gpa66711 = "B-";
		$grade66711 = "2.75";
	}
	elseif($marks66711 >= (200*50)/100 && $marks66711 < (200*55)/100){
		$gpa66711 = "C+";
		$grade66711 = "2.50";
	}
	elseif($marks66711 >= (200*45)/100 && $marks66711 < (200*50)/100){
		$gpa66711 = "C";
		$grade66711 = "2.25";
	}
	elseif($marks66711 >= (200*40)/100 && $marks66711 < (200*45)/100){
		$gpa66711 = "D";
		$grade66711 = "2.00";
	}
	elseif($marks66711 < (200*40)/100){
		$gpa66711 = "F";
		$grade66711 = "0.00";
	}



	if($marks66713 >= (100*80)/100){
		$gpa66713 = "A+";
		$grade66713 = "4.00";
	}
	elseif($marks66713 >= (100*75)/100 && $marks66713 < (100*80)/100){
		$gpa66713 = "A";
		$grade66713 = "3.75";
	}
	elseif($marks66713 >= (100*70)/100 && $marks66713 < (100*75)/100){
		$gpa66713 = "A-";
		$grade66713 = "3.50";
	}
	elseif($marks66713 >= (100*65)/100 && $marks66713 < (100*70)/100){
		$gpa66713 = "B+";
		$grade66713 = "3.25";
	}
	elseif($marks66713 >= (100*60)/100 && $marks66713 < (100*65)/100){
		$gpa66713 = "B";
		$grade66713 = "3.00";
	}
	elseif($marks66713 >= (100*55)/100 && $marks66713 < (100*60)/100){
		$gpa66713 = "B-";
		$grade66713 = "2.75";
	}
	elseif($marks66713 >= (100*50)/100 && $marks66713 < (100*55)/100){
		$gpa66713 = "C+";
		$grade66713 = "2.50";
	}
	elseif($marks66713 >= (100*45)/100 && $marks66713 < (100*50)/100){
		$gpa66713 = "C";
		$grade66713 = "2.25";
	}
	elseif($marks66713 >= (100*40)/100 && $marks66713 < (100*45)/100){
		$gpa66713 = "D";
		$grade66713 = "2.00";
	}
	elseif($marks66713 < (100*40)/100){
		$gpa66713 = "F";
		$grade66713 = "0.00";
	}



	if($marks65911 >= (200*80)/100){
		$gpa65911 = "A+";
		$grade65911 = "4.00";
	}
	elseif($marks65911 >= (200*75)/100 && $marks65911 < (200*80)/100){
		$gpa65911 = "A";
		$grade65911 = "3.75";
	}
	elseif($marks65911 >= (200*70)/100 && $marks65911 < (200*75)/100){
		$gpa65911 = "A-";
		$grade65911 = "3.50";
	}
	elseif($marks65911 >= (200*65)/100 && $marks65911 < (200*70)/100){
		$gpa65911 = "B+";
		$grade65911 = "3.25";
	}
	elseif($marks65911 >= (200*60)/100 && $marks65911 < (200*65)/100){
		$gpa65911 = "B";
		$grade65911 = "3.00";
	}
	elseif($marks65911 >= (200*55)/100 && $marks65911 < (200*60)/100){
		$gpa65911 = "B-";
		$grade65911 = "2.75";
	}
	elseif($marks65911 >= (200*50)/100 && $marks65911 < (200*55)/100){
		$gpa65911 = "C+";
		$grade65911 = "2.50";
	}
	elseif($marks65911 >= (200*45)/100 && $marks65911 < (200*50)/100){
		$gpa65911 = "C";
		$grade65911 = "2.25";
	}
	elseif($marks65911 >= (200*40)/100 && $marks65911 < (200*45)/100){
		$gpa65911 = "D";
		$grade65911 = "2.00";
	}
	elseif($marks65911 < (200*40)/100){
		$gpa65911 = "F";
		$grade65911 = "0.00";
	}



	if($marks66811 >= (150*80)/100){
		$gpa66811 = "A+";
		$grade66811 = "4.00";
	}
	elseif($marks66811 >= (150*75)/100 && $marks66811 < (150*80)/100){
		$gpa66811 = "A";
		$grade66811 = "3.75";
	}
	elseif($marks66811 >= (150*70)/100 && $marks66811 < (150*75)/100){
		$gpa66811 = "A-";
		$grade66811 = "3.50";
	}
	elseif($marks66811 >= (150*65)/100 && $marks66811 < (150*70)/100){
		$gpa66811 = "B+";
		$grade66811 = "3.25";
	}
	elseif($marks66811 >= (150*60)/100 && $marks66811 < (150*65)/100){
		$gpa66811 = "B";
		$grade66811 = "3.00";
	}
	elseif($marks66811 >= (150*55)/100 && $marks66811 < (150*60)/100){
		$gpa66811 = "B-";
		$grade66811 = "2.75";
	}
	elseif($marks66811 >= (150*50)/100 && $marks66811 < (150*55)/100){
		$gpa66811 = "C+";
		$grade66811 = "2.50";
	}
	elseif($marks66811 >= (150*45)/100 && $marks66811 < (150*50)/100){
		$gpa66811 = "C";
		$grade66811 = "2.25";
	}
	elseif($marks66811 >= (150*40)/100 && $marks66811 < (150*45)/100){
		$gpa66811 = "D";
		$grade66811 = "2.00";
	}
	elseif($marks66811 < (150*40)/100){
		$gpa66811 = "F";
		$grade66811 = "0.00";
	}



	if($marks61011 >= (100*80)/100){
		$gpa61011 = "A+";
		$grade61011 = "4.00";
	}
	elseif($marks61011 >= (100*75)/100 && $marks61011 < (100*80)/100){
		$gpa61011 = "A";
		$grade61011 = "3.75";
	}
	elseif($marks61011 >= (100*70)/100 && $marks61011 < (100*75)/100){
		$gpa61011 = "A-";
		$grade61011 = "3.50";
	}
	elseif($marks61011 >= (100*65)/100 && $marks61011 < (100*70)/100){
		$gpa61011 = "B+";
		$grade61011 = "3.25";
	}
	elseif($marks61011 >= (100*60)/100 && $marks61011 < (100*65)/100){
		$gpa61011 = "B";
		$grade61011 = "3.00";
	}
	elseif($marks61011 >= (100*55)/100 && $marks61011 < (100*60)/100){
		$gpa61011 = "B-";
		$grade61011 = "2.75";
	}
	elseif($marks61011 >= (100*50)/100 && $marks61011 < (100*55)/100){
		$gpa61011 = "C+";
		$grade61011 = "2.50";
	}
	elseif($marks61011 >= (100*45)/100 && $marks61011 < (100*50)/100){
		$gpa61011 = "C";
		$grade61011 = "2.25";
	}
	elseif($marks61011 >= (100*40)/100 && $marks61011 < (100*45)/100){
		$gpa61011 = "D";
		$grade61011 = "2.00";
	}
	elseif($marks61011 < (100*40)/100){
		$gpa61011 = "F";
		$grade61011 = "0.00";
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



	if($marks65812 >= (50*80)/100){
		$gpa65812 = "A+";
		$grade65812 = "4.00";
	}
	elseif($marks65812 >= (50*75)/100 && $marks65812 < (50*80)/100){
		$gpa65812 = "A";
		$grade65812 = "3.75";
	}
	elseif($marks65812 >= (50*70)/100 && $marks65812 < (50*75)/100){
		$gpa65812 = "A-";
		$grade65812 = "3.50";
	}
	elseif($marks65812 >= (50*65)/100 && $marks65812 < (50*70)/100){
		$gpa65812 = "B+";
		$grade65812 = "3.25";
	}
	elseif($marks65812 >= (50*60)/100 && $marks65812 < (50*65)/100){
		$gpa65812 = "B";
		$grade65812 = "3.00";
	}
	elseif($marks65812 >= (50*55)/100 && $marks65812 < (50*60)/100){
		$gpa65812 = "B-";
		$grade65812 = "2.75";
	}
	elseif($marks65812 >= (50*50)/100 && $marks65812 < (50*55)/100){
		$gpa65812 = "C+";
		$grade65812 = "2.50";
	}
	elseif($marks65812 >= (50*45)/100 && $marks65812 < (50*50)/100){
		$gpa65812 = "C";
		$grade65812 = "2.25";
	}
	elseif($marks65812 >= (50*40)/100 && $marks65812 < (50*45)/100){
		$gpa65812 = "D";
		$grade65812 = "2.00";
	}
	elseif($marks65812 < (50*40)/100){
		$gpa65812 = "F";
		$grade65812 = "0.00";
	}


	if($grade66711>0 && $grade66713>0 && $grade65911>0 && $grade66811>0 && $grade61011>0 && $grade65913>0 && $grade65812>0){
		$grade = ($grade66711+$grade66713 +$grade65911+$grade66811 +$grade61011 +$grade65913 +$grade65812)/7 .".00";
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
	<title>Electrical 1st Semester Result</title>
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
				<p><b>1st Semester Examination, 2017</b></p>
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
							<td>: 667-Electrical Technology</td>
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
						<td>66711 - Basic Electricity</td>
						<td>4</td>
						<td><?php echo $marks66711; ?></td>
						<td><?php echo $gpa66711; ?></td>
						<td><?php echo $grade66711; ?></td>
					</tr>
					<tr>
						<td>66713 - Electrical Engineering Materials</td>
						<td>2</td>
						<td><?php echo $marks66713; ?></td>
						<td><?php echo $gpa66713; ?></td>
						<td><?php echo $grade66713; ?></td>
					</tr>
					<tr>
						<td>65911 - Mathematics-1</td>
						<td>4</td>
						<td><?php echo $marks65911; ?></td>
						<td><?php echo $gpa65911; ?></td>
						<td><?php echo $grade65911; ?></td>
					</tr>
					<tr>
						<td>66811 - Basic Electronics</td>
						<td>3</td>
						<td><?php echo $marks66811; ?></td>
						<td><?php echo $gpa66811; ?></td>
						<td><?php echo $grade66811; ?></td>
					</tr>
					<tr>
						<td>61011 - Engineering Drawing</td>
						<td>2</td>
						<td><?php echo $marks61011; ?></td>
						<td><?php echo $gpa61011; ?></td>
						<td><?php echo $grade61011; ?></td>
					</tr>
					<tr>
						<td>65913 - Chemistry</td>
						<td>4</td>
						<td><?php echo $marks65913; ?></td>
						<td><?php echo $gpa65913; ?></td>
						<td><?php echo $grade65913; ?></td>
					</tr>
					<tr>
						<td>65812 - Physical Education & Life Skill Development</td>
						<td>1</td>
						<td><?php echo $marks65812; ?></td>
						<td><?php echo $gpa65812; ?></td>
						<td><?php echo $grade65812; ?></td>
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