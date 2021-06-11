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



	$marks = "SELECT * FROM pw3rd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc67131 = $marks_loop->tc67131; 
	$markstf67131 = $marks_loop->tf67131; 
	$markspc67131 = $marks_loop->pc67131; 
	$markspf67131 = $marks_loop->pf67131; 
	$markstc67033 = $marks_loop->tc67033; 
	$markstf67033 = $marks_loop->tf67033; 
	$markspc67033 = $marks_loop->pc67033; 
	$markspf67033 = $marks_loop->pf67033; 
	$markspc66611 = $marks_loop->pc66611; 
	$markspf66611 = $marks_loop->pf66611; 
	$markstc66822 = $marks_loop->tc66822; 
	$markstf66822 = $marks_loop->tf66822; 
	$markspc66822 = $marks_loop->pc66822; 
	$markspf66822 = $marks_loop->pf66822; 
	$markstc65931 = $marks_loop->tc65931; 
	$markstf65931 = $marks_loop->tf65931; 
	$markspc65931 = $marks_loop->pc65931; 
	$markstc65913 = $marks_loop->tc65913; 
	$markstf65913 = $marks_loop->tf65913;  
	$markspc65913 = $marks_loop->pc65913;  
	$markspf65913 = $marks_loop->pf65913;  
	$markstc65811 = $marks_loop->tc65811;  
	$markstf65811 = $marks_loop->tf65811;  

	if($markstc67131 >= (60*40)/100 && $markstf67131 >= (90*40)/100 && $markspc67131 >= (25*40)/100 && $markspf67131 >= (25*40)/100){
		$marks67131=$markstc67131 + $markstf67131 + $markspc67131 + $markspf67131;
	}else{
		$marks67131 = 0;
	}
	if($markstc67033 >= (20*40)/100 && $markstf67033 >= (30*40)/100 && $markspc67033 >= (25*40)/100 && $markspf67033 >= (25*40)/100){
		$marks67033=$markstc67033 + $markstf67033 + $markspc67033 + $markspf67033;
	}else{
		$marks67033 = 0;
	}
	if($markspc66611 >= (50*40)/100 && $markspf66611 >= (50*40)/100){
		$marks66611=$markspc66611 + $markspf66611;
	}else{
		$marks66611 = 0;
	}
	if($markstc66822 >= (40*40)/100 && $markstf66822 >= (60*40)/100 && $markspc66822 >= (25*40)/100 && $markspf66822 >= (25*40)/100){
		$marks66822=$markstc66822 + $markstf66822 + $markspc66822 + $markspf66822;
	}else{
		$marks66822 = 0;
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




	if($marks67131 >= (200*80)/100){
		$gpa67131 = "A+";
		$grade67131 = "4.00";
	}
	elseif($marks67131 >= (20075)/100 && $marks67131 < (200*80)/100){
		$gpa67131 = "A";
		$grade67131 = "3.75";
	}
	elseif($marks67131 >= (200*70)/100 && $marks67131 < (200*75)/100){
		$gpa67131 = "A-";
		$grade67131 = "3.50";
	}
	elseif($marks67131 >= (200*65)/100 && $marks67131 < (200*70)/100){
		$gpa67131 = "B+";
		$grade67131 = "3.25";
	}
	elseif($marks67131 >= (200*60)/100 && $marks67131 < (200*65)/100){
		$gpa67131 = "B";
		$grade67131 = "3.00";
	}
	elseif($marks67131 >= (200*55)/100 && $marks67131 < (200*60)/100){
		$gpa67131 = "B-";
		$grade67131 = "2.75";
	}
	elseif($marks67131 >= (200*50)/100 && $marks67131 < (200*55)/100){
		$gpa67131 = "C+";
		$grade67131 = "2.50";
	}
	elseif($marks67131 >= (200*45)/100 && $marks67131 < (200*50)/100){
		$gpa67131 = "C";
		$grade67131 = "2.25";
	}
	elseif($marks67131 >= (200*40)/100 && $marks67131 < (200*45)/100){
		$gpa67131 = "D";
		$grade67131 = "2.00";
	}
	elseif($marks67131 < (200*40)/100){
		$gpa67131 = "F";
		$grade67131 = "0.00";
	}





	if($marks67033 >= (100*80)/100){
		$gpa67033 = "A+";
		$grade67033 = "4.00";
	}
	elseif($marks67033 >= (100*75)/100 && $marks67033 < (100*80)/100){
		$gpa67033 = "A";
		$grade67033 = "3.75";
	}
	elseif($marks67033 >= (100*70)/100 && $marks67033 < (100*75)/100){
		$gpa67033 = "A-";
		$grade67033 = "3.50";
	}
	elseif($marks67033 >= (100*65)/100 && $marks67033 < (100*70)/100){
		$gpa67033 = "B+";
		$grade67033 = "3.25";
	}
	elseif($marks67033 >= (100*60)/100 && $marks67033 < (100*65)/100){
		$gpa67033 = "B";
		$grade67033 = "3.00";
	}
	elseif($marks67033 >= (100*55)/100 && $marks67033 < (100*60)/100){
		$gpa67033 = "B-";
		$grade67033 = "2.75";
	}
	elseif($marks67033 >= (100*50)/100 && $marks67033 < (100*55)/100){
		$gpa67033 = "C+";
		$grade67033 = "2.50";
	}
	elseif($marks67033 >= (100*45)/100 && $marks67033 < (100*50)/100){
		$gpa67033 = "C";
		$grade67033 = "2.25";
	}
	elseif($marks67033 >= (100*40)/100 && $marks67033 < (100*45)/100){
		$gpa67033 = "D";
		$grade67033 = "2.00";
	}
	elseif($marks67033 < (100*40)/100){
		$gpa67033 = "F";
		$grade67033 = "0.00";
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



	if($marks66822 >= (150*80)/100){
		$gpa66822 = "A+";
		$grade66822 = "4.00";
	}
	elseif($marks66822 >= (150*75)/100 && $marks66822 < (150*80)/100){
		$gpa66822 = "A";
		$grade66822 = "3.75";
	}
	elseif($marks66822 >= (150*70)/100 && $marks66822 < (150*75)/100){
		$gpa66822 = "A-";
		$grade66822 = "3.50";
	}
	elseif($marks66822 >= (150*65)/100 && $marks66822 < (150*70)/100){
		$gpa66822 = "B+";
		$grade66822 = "3.25";
	}
	elseif($marks66822 >= (150*60)/100 && $marks66822 < (150*65)/100){
		$gpa66822 = "B";
		$grade66822 = "3.00";
	}
	elseif($marks66822 >= (150*55)/100 && $marks66822 < (150*60)/100){
		$gpa66822 = "B-";
		$grade66822 = "2.75";
	}
	elseif($marks66822 >= (150*50)/100 && $marks66822 < (150*55)/100){
		$gpa66822 = "C+";
		$grade66822 = "2.50";
	}
	elseif($marks66822 >= (150*45)/100 && $marks66822 < (150*50)/100){
		$gpa66822 = "C";
		$grade66822 = "2.25";
	}
	elseif($marks66822 >= (150*40)/100 && $marks66822 < (150*45)/100){
		$gpa66822 = "D";
		$grade66822 = "2.00";
	}
	elseif($marks66822 < (150*40)/100){
		$gpa66822 = "F";
		$grade66822 = "0.00";
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


	if($grade67131>0 && $grade67033>0 && $grade66611>0 && $grade66822>0 && $grade65931>0 && $grade65913>0 && $grade65811>0){
		$grade = ($grade67131+$grade67033 +$grade66611+$grade66822 +$grade65931 +$grade65913 +$grade65811)/7 .".00";
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
	<title>Power 3rd Semester Result</title>
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
							<td>: 671-Power Technology</td>
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
						<td>67131 - Engineering Thermodynamics</td>
						<td>4</td>
						<td><?php echo $marks67131; ?></td>
						<td><?php echo $gpa67131; ?></td>
						<td><?php echo $grade67131; ?></td>
					</tr>
					<tr>
						<td>67033 - Machine Shop Practice</td>
						<td>4</td>
						<td><?php echo $marks67033; ?></td>
						<td><?php echo $gpa67033; ?></td>
						<td><?php echo $grade67033; ?></td>
					</tr>
					<tr>
						<td>66611 - Computer Application</td>
						<td>4</td>
						<td><?php echo $marks66611; ?></td>
						<td><?php echo $gpa66611; ?></td>
						<td><?php echo $grade66611; ?></td>
					</tr>
					<tr>
						<td>66822 - Electronic Engineering Fundamentals</td>
						<td>4</td>
						<td><?php echo $marks66822; ?></td>
						<td><?php echo $gpa66822; ?></td>
						<td><?php echo $grade66822; ?></td>
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