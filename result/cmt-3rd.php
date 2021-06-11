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



	$marks = "SELECT * FROM cmt3rd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc66631 = $marks_loop->tc66631; 
	$markstf66631 = $marks_loop->tf66631; 
	$markspc66631 = $marks_loop->pc66631; 
	$markspf66631 = $marks_loop->pf66631; 
	$markspc66632 = $marks_loop->pc66632; 
	$markspf66632 = $marks_loop->pf66632; 
	$markspc66633 = $marks_loop->pc66633; 
	$markspf66633 = $marks_loop->pf66633; 
	$markspc66634 = $marks_loop->pc66634; 
	$markspf66634 = $marks_loop->pf66634; 
	$markstc65931 = $marks_loop->tc65931; 
	$markstf65931 = $marks_loop->tf65931; 
	$markspc65931 = $marks_loop->pc65931; 
	$markstc65913 = $marks_loop->tc65913; 
	$markstf65913 = $marks_loop->tf65913; 
	$markspc65913 = $marks_loop->pc65913; 
	$markspf65913 = $marks_loop->pf65913; 
	$markstc65811 = $marks_loop->tc65811; 
	$markstf65811 = $marks_loop->tf65811;  

	if($markstc66631 >= (40*40)/100 && $markstf66631 >= (60*40)/100 && $markspc66631 >= (25*40)/100 && $markspf66631 >= (25*40)/100){
		$marks66631=$markstc66631 + $markstf66631 + $markspc66631 + $markspf66631;
	}else{
		$marks66631 = 0;
	}
	if($markspc66632 >= (50*40)/100 && $markspf66632 >= (50*40)/100){
		$marks66632=$markspc66632 + $markspf66632;
	}else{
		$marks66632 = 0;
	}
	if($markspc66633 >= (50*40)/100 && $markspf66633 >= (50*40)/100){
		$marks66633=$markspc66633 + $markspf66633;
	}else{
		$marks66633 = 0;
	}
	if($markspc66634 >= (50*40)/100 && $markspf66634 >= (50*40)/100){
		$marks66634=$markspc66634 + $markspf66634;
	}else{
		$marks66634 = 0;
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




	if($marks66631 >= (150*80)/100){
		$gpa66631 = "A+";
		$grade66631 = "4.00";
	}
	elseif($marks66631 >= (150*75)/100 && $marks66631 < (150*80)/100){
		$gpa66631 = "A";
		$grade66631 = "3.75";
	}
	elseif($marks66631 >= (150*70)/100 && $marks66631 < (150*75)/100){
		$gpa66631 = "A-";
		$grade66631 = "3.50";
	}
	elseif($marks66631 >= (150*65)/100 && $marks66631 < (150*70)/100){
		$gpa66631 = "B+";
		$grade66631 = "3.25";
	}
	elseif($marks66631 >= (150*60)/100 && $marks66631 < (150*65)/100){
		$gpa66631 = "B";
		$grade66631 = "3.00";
	}
	elseif($marks66631 >= (150*55)/100 && $marks66631 < (150*60)/100){
		$gpa66631 = "B-";
		$grade66631 = "2.75";
	}
	elseif($marks66631 >= (150*50)/100 && $marks66631 < (150*55)/100){
		$gpa66631 = "C+";
		$grade66631 = "2.50";
	}
	elseif($marks66631 >= (150*45)/100 && $marks66631 < (150*50)/100){
		$gpa66631 = "C";
		$grade66631 = "2.25";
	}
	elseif($marks66631 >= (150*40)/100 && $marks66631 < (150*45)/100){
		$gpa66631 = "D";
		$grade66631 = "2.00";
	}
	elseif($marks66631 < (150*40)/100){
		$gpa66631 = "F";
		$grade66631 = "0.00";
	}





	if($marks66632 >= (100*80)/100){
		$gpa66632 = "A+";
		$grade66632 = "4.00";
	}
	elseif($marks66632 >= (100*75)/100 && $marks66632 < (100*80)/100){
		$gpa66632 = "A";
		$grade66632 = "3.75";
	}
	elseif($marks66632 >= (100*70)/100 && $marks66632 < (100*75)/100){
		$gpa66632 = "A-";
		$grade66632 = "3.50";
	}
	elseif($marks66632 >= (100*65)/100 && $marks66632 < (100*70)/100){
		$gpa66632 = "B+";
		$grade66632 = "3.25";
	}
	elseif($marks66632 >= (100*60)/100 && $marks66632 < (100*65)/100){
		$gpa66632 = "B";
		$grade66632 = "3.00";
	}
	elseif($marks66632 >= (100*55)/100 && $marks66632 < (100*60)/100){
		$gpa66632 = "B-";
		$grade66632 = "2.75";
	}
	elseif($marks66632 >= (100*50)/100 && $marks66632 < (100*55)/100){
		$gpa66632 = "C+";
		$grade66632 = "2.50";
	}
	elseif($marks66632 >= (100*45)/100 && $marks66632 < (100*50)/100){
		$gpa66632 = "C";
		$grade66632 = "2.25";
	}
	elseif($marks66632 >= (100*40)/100 && $marks66632 < (100*45)/100){
		$gpa66632 = "D";
		$grade66632 = "2.00";
	}
	elseif($marks66632 < (100*40)/100){
		$gpa66632 = "F";
		$grade66632 = "0.00";
	}



	if($marks66633 >= (100*80)/100){
		$gpa66633 = "A+";
		$grade66633 = "4.00";
	}
	elseif($marks66633 >= (100*75)/100 && $marks66633 < (100*80)/100){
		$gpa66633 = "A";
		$grade66633 = "3.75";
	}
	elseif($marks66633 >= (100*70)/100 && $marks66633 < (100*75)/100){
		$gpa66633 = "A-";
		$grade66633 = "3.50";
	}
	elseif($marks66633 >= (100*65)/100 && $marks66633 < (100*70)/100){
		$gpa66633 = "B+";
		$grade66633 = "3.25";
	}
	elseif($marks66633 >= (100*60)/100 && $marks66633 < (100*65)/100){
		$gpa66633 = "B";
		$grade66633 = "3.00";
	}
	elseif($marks66633 >= (100*55)/100 && $marks66633 < (100*60)/100){
		$gpa66633 = "B-";
		$grade66633 = "2.75";
	}
	elseif($marks66633 >= (100*50)/100 && $marks66633 < (100*55)/100){
		$gpa66633 = "C+";
		$grade66633 = "2.50";
	}
	elseif($marks66633 >= (100*45)/100 && $marks66633 < (100*50)/100){
		$gpa66633 = "C";
		$grade66633 = "2.25";
	}
	elseif($marks66633 >= (100*40)/100 && $marks66633 < (100*45)/100){
		$gpa66633 = "D";
		$grade66633 = "2.00";
	}
	elseif($marks66633 < (100*40)/100){
		$gpa66633 = "F";
		$grade66633 = "0.00";
	}



	if($marks66634 >= (100*80)/100){
		$gpa66634 = "A+";
		$grade66634 = "4.00";
	}
	elseif($marks66634 >= (100*75)/100 && $marks66634 < (100*80)/100){
		$gpa66634 = "A";
		$grade66634 = "3.75";
	}
	elseif($marks66634 >= (100*70)/100 && $marks66634 < (100*75)/100){
		$gpa66634 = "A-";
		$grade66634 = "3.50";
	}
	elseif($marks66634 >= (100*65)/100 && $marks66634 < (100*70)/100){
		$gpa66634 = "B+";
		$grade66634 = "3.25";
	}
	elseif($marks66634 >= (100*60)/100 && $marks66634 < (100*65)/100){
		$gpa66634 = "B";
		$grade66634 = "3.00";
	}
	elseif($marks66634 >= (100*55)/100 && $marks66634 < (100*60)/100){
		$gpa66634 = "B-";
		$grade66634 = "2.75";
	}
	elseif($marks66634 >= (100*50)/100 && $marks66634 < (100*55)/100){
		$gpa66634 = "C+";
		$grade66634 = "2.50";
	}
	elseif($marks66634 >= (100*45)/100 && $marks66634 < (100*50)/100){
		$gpa66634 = "C";
		$grade66634 = "2.25";
	}
	elseif($marks66634 >= (100*40)/100 && $marks66634 < (100*45)/100){
		$gpa66634 = "D";
		$grade66634 = "2.00";
	}
	elseif($marks66634 < (100*40)/100){
		$gpa66634 = "F";
		$grade66634 = "0.00";
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


	if($grade66631>0 && $grade66632>0 && $grade66633>0 && $grade66634>0 && $grade65931>0 && $grade65913>0 && $grade65811>0){
		$grade = ($grade66631+$grade66632 +$grade66633+$grade66634 +$grade65931 +$grade65913 +$grade65811)/7 .".00";
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
	<title>Computer 3rd Semester Result</title>
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
							<td>: 666-Computer Technology</td>
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
						<td>66631 - Programming Essential</td>
						<td>4</td>
						<td><?php echo $marks66631; ?></td>
						<td><?php echo $gpa66631; ?></td>
						<td><?php echo $grade66631; ?></td>
					</tr>
					<tr>
						<td>66632 - Web Design</td>
						<td>4</td>
						<td><?php echo $marks66632; ?></td>
						<td><?php echo $gpa66632; ?></td>
						<td><?php echo $grade66632; ?></td>
					</tr>
					<tr>
						<td>66633 - Graphics Design-2</td>
						<td>4</td>
						<td><?php echo $marks66633; ?></td>
						<td><?php echo $gpa66633; ?></td>
						<td><?php echo $grade66633; ?></td>
					</tr>
					<tr>
						<td>66634 - IT Support-2</td>
						<td>4</td>
						<td><?php echo $marks66634; ?></td>
						<td><?php echo $gpa66634; ?></td>
						<td><?php echo $grade66634; ?></td>
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
						<td>4</td>
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