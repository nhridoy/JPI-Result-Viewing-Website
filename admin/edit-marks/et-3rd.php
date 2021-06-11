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



	$marks = "SELECT * FROM et3rd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc66731 = $marks_loop->tc66731; 
	$markstf66731 = $marks_loop->tf66731; 
	$markspc66731 = $marks_loop->pc66731; 
	$markspf66731 = $marks_loop->pf66731; 
	$markstc66732 = $marks_loop->tc66732; 
	$markstf66732 = $marks_loop->tf66732; 
	$markspc66732 = $marks_loop->pc66732; 
	$markspf66732 = $marks_loop->pf66732; 
	$markspc66733 = $marks_loop->pc66733; 
	$markspf66733 = $marks_loop->pf66733; 
	$markstc65722 = $marks_loop->tc65722; 
	$markstf65722 = $marks_loop->tf65722; 
	$markspc65722 = $marks_loop->pc65722; 
	$markstc65931 = $marks_loop->tc65931; 
	$markstf65931 = $marks_loop->tf65931; 
	$markspc65931 = $marks_loop->pc65931; 
	$markstc65922 = $marks_loop->tc65922; 
	$markstf65922 = $marks_loop->tf65922; 
	$markspc65922 = $marks_loop->pc65922; 
	$markspf65922 = $marks_loop->pf65922; 
	$markstc65811 = $marks_loop->tc65811; 
	$markstf65811 = $marks_loop->tf65811; 

	
	if($markstc66731 >= (60*40)/100 && $markstf66731 >= (90*40)/100 && $markspc66731 >= (25*40)/100 && $markspf66731 >= (25*40)/100){
		$marks66731=$markstc66731 + $markstf66731 + $markspc66731 + $markspf66731;
	}else{
		$marks66731 = 0;
	}
	if($markstc66732 >= (40*40)/100 && $markstf66732 >= (60*40)/100 && $markspc66732 >= (25*40)/100 && $markspf66732 >= (25*40)/100){
		$marks66732=$markstc66732 + $markstf66732 + $markspc66732 + $markspf66732;
	}else{
		$marks66732 = 0;
	}
	if($markspc66733 >= (25*40)/100 && $markspf66733 >= (25*40)/100){
		$marks66733=$markspc66733 + $markspf66733;
	}else{
		$marks66733 = 0;
	}
	if($markstc65722 >= (20*40)/100 && $markstf65722 >= (30*40)/100 && $markspc65722 >= (50*40)/100){
		$marks65722=$markstc65722 + $markstf65722 + $markspc65722;
	}else{
		$marks65722 = 0;
	}
	if($markstc65931 >= (60*40)/100 && $markstf65931 >= (90*40)/100 && $markspc65931 >= (50*40)/100){
		$marks65931=$markstc65931 + $markstf65931 + $markspc65931;
	}else{
		$marks65931 = 0;
	}
	if($markstc65922 >= (60*40)/100 && $markstf65922 >= (90*40)/100 && $markspc65922 >= (25*40)/100 && $markspf65922 >= (25*40)/100){
		$marks65922=$markstc65922 + $markstf65922 + $markspc65922 + $markspf65922;
	}else{
		$marks65922 = 0;
	}
	if($markstc65811 >= (60*40)/100 && $markstf65811 >= (90*40)/100){
		$marks65811=$markstc65811 + $markstf65811;
	}else{
		$marks65811 = 0;
	}




	if($marks66731 >= (200*80)/100){
		$gpa66731 = "A+";
		$grade66731 = "4.00";
	}
	elseif($marks66731 >= (200*75)/100 && $marks66731 < (200*80)/100){
		$gpa66731 = "A";
		$grade66731 = "3.75";
	}
	elseif($marks66731 >= (200*70)/100 && $marks66731 < (200*75)/100){
		$gpa66731 = "A-";
		$grade66731 = "3.50";
	}
	elseif($marks66731 >= (200*65)/100 && $marks66731 < (200*70)/100){
		$gpa66731 = "B+";
		$grade66731 = "3.25";
	}
	elseif($marks66731 >= (200*60)/100 && $marks66731 < (200*65)/100){
		$gpa66731 = "B";
		$grade66731 = "3.00";
	}
	elseif($marks66731 >= (200*55)/100 && $marks66731 < (200*60)/100){
		$gpa66731 = "B-";
		$grade66731 = "2.75";
	}
	elseif($marks66731 >= (200*50)/100 && $marks66731 < (200*55)/100){
		$gpa66731 = "C+";
		$grade66731 = "2.50";
	}
	elseif($marks66731 >= (200*45)/100 && $marks66731 < (200*50)/100){
		$gpa66731 = "C";
		$grade66731 = "2.25";
	}
	elseif($marks66731 >= (200*40)/100 && $marks66731 < (200*45)/100){
		$gpa66731 = "D";
		$grade66731 = "2.00";
	}
	elseif($marks66731 < (200*40)/100){
		$gpa66731 = "F";
		$grade66731 = "0.00";
	}



	if($marks66732 >= (150*80)/100){
		$gpa66732 = "A+";
		$grade66732 = "4.00";
	}
	elseif($marks66732 >= (150*75)/100 && $marks66732 < (150*80)/100){
		$gpa66732 = "A";
		$grade66732 = "3.75";
	}
	elseif($marks66732 >= (150*70)/100 && $marks66732 < (150*75)/100){
		$gpa66732 = "A-";
		$grade66732 = "3.50";
	}
	elseif($marks66732 >= (150*65)/100 && $marks66732 < (150*70)/100){
		$gpa66732 = "B+";
		$grade66732 = "3.25";
	}
	elseif($marks66732 >= (150*60)/100 && $marks66732 < (150*65)/100){
		$gpa66732 = "B";
		$grade66732 = "3.00";
	}
	elseif($marks66732 >= (150*55)/100 && $marks66732 < (150*60)/100){
		$gpa66732 = "B-";
		$grade66732 = "2.75";
	}
	elseif($marks66732 >= (150*50)/100 && $marks66732 < (150*55)/100){
		$gpa66732 = "C+";
		$grade66732 = "2.50";
	}
	elseif($marks66732 >= (150*45)/100 && $marks66732 < (150*50)/100){
		$gpa66732 = "C";
		$grade66732 = "2.25";
	}
	elseif($marks66732 >= (150*40)/100 && $marks66732 < (150*45)/100){
		$gpa66732 = "D";
		$grade66732 = "2.00";
	}
	elseif($marks66732 < (150*40)/100){
		$gpa66732 = "F";
		$grade66732 = "0.00";
	}



	if($marks66733 >= (50*80)/100){
		$gpa66733 = "A+";
		$grade66733 = "4.00";
	}
	elseif($marks66733 >= (50*75)/100 && $marks66733 < (50*80)/100){
		$gpa66733 = "A";
		$grade66733 = "3.75";
	}
	elseif($marks66733 >= (50*70)/100 && $marks66733 < (50*75)/100){
		$gpa66733 = "A-";
		$grade66733 = "3.50";
	}
	elseif($marks66733 >= (50*65)/100 && $marks66733 < (50*70)/100){
		$gpa66733 = "B+";
		$grade66733 = "3.25";
	}
	elseif($marks66733 >= (50*60)/100 && $marks66733 < (50*65)/100){
		$gpa66733 = "B";
		$grade66733 = "3.00";
	}
	elseif($marks66733 >= (50*55)/100 && $marks66733 < (50*60)/100){
		$gpa66733 = "B-";
		$grade66733 = "2.75";
	}
	elseif($marks66733 >= (50*50)/100 && $marks66733 < (50*55)/100){
		$gpa66733 = "C+";
		$grade66733 = "2.50";
	}
	elseif($marks66733 >= (50*45)/100 && $marks66733 < (50*50)/100){
		$gpa66733 = "C";
		$grade66733 = "2.25";
	}
	elseif($marks66733 >= (50*40)/100 && $marks66733 < (50*45)/100){
		$gpa66733 = "D";
		$grade66733 = "2.00";
	}
	elseif($marks66733 < (50*40)/100){
		$gpa66733 = "F";
		$grade66733 = "0.00";
	}



	if($marks65722 >= (100*80)/100){
		$gpa65722 = "A+";
		$grade65722 = "4.00";
	}
	elseif($marks65722 >= (100*75)/100 && $marks65722 < (100*80)/100){
		$gpa65722 = "A";
		$grade65722 = "3.75";
	}
	elseif($marks65722 >= (100*70)/100 && $marks65722 < (100*75)/100){
		$gpa65722 = "A-";
		$grade65722 = "3.50";
	}
	elseif($marks65722 >= (100*65)/100 && $marks65722 < (100*70)/100){
		$gpa65722 = "B+";
		$grade65722 = "3.25";
	}
	elseif($marks65722 >= (100*60)/100 && $marks65722 < (100*65)/100){
		$gpa65722 = "B";
		$grade65722 = "3.00";
	}
	elseif($marks65722 >= (100*55)/100 && $marks65722 < (100*60)/100){
		$gpa65722 = "B-";
		$grade65722 = "2.75";
	}
	elseif($marks65722 >= (100*50)/100 && $marks65722 < (100*55)/100){
		$gpa65722 = "C+";
		$grade65722 = "2.50";
	}
	elseif($marks65722 >= (100*45)/100 && $marks65722 < (100*50)/100){
		$gpa65722 = "C";
		$grade65722 = "2.25";
	}
	elseif($marks65722 >= (100*40)/100 && $marks65722 < (100*45)/100){
		$gpa65722 = "D";
		$grade65722 = "2.00";
	}
	elseif($marks65722 < (100*40)/100){
		$gpa65722 = "F";
		$grade65722 = "0.00";
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



	if($marks65922 >= (200*80)/100){
		$gpa65922 = "A+";
		$grade65922 = "4.00";
	}
	elseif($marks65922 >= (200*75)/100 && $marks65922 < (200*80)/100){
		$gpa65922 = "A";
		$grade65922 = "3.75";
	}
	elseif($marks65922 >= (200*70)/100 && $marks65922 < (200*75)/100){
		$gpa65922 = "A-";
		$grade65922 = "3.50";
	}
	elseif($marks65922 >= (200*65)/100 && $marks65922 < (200*70)/100){
		$gpa65922 = "B+";
		$grade65922 = "3.25";
	}
	elseif($marks65922 >= (200*60)/100 && $marks65922 < (200*65)/100){
		$gpa65922 = "B";
		$grade65922 = "3.00";
	}
	elseif($marks65922 >= (200*55)/100 && $marks65922 < (200*60)/100){
		$gpa65922 = "B-";
		$grade65922 = "2.75";
	}
	elseif($marks65922 >= (200*50)/100 && $marks65922 < (200*55)/100){
		$gpa65922 = "C+";
		$grade65922 = "2.50";
	}
	elseif($marks65922 >= (200*45)/100 && $marks65922 < (200*50)/100){
		$gpa65922 = "C";
		$grade65922 = "2.25";
	}
	elseif($marks65922 >= (200*40)/100 && $marks65922 < (200*45)/100){
		$gpa65922 = "D";
		$grade65922 = "2.00";
	}
	elseif($marks65922 < (200*40)/100){
		$gpa65922 = "F";
		$grade65922 = "0.00";
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





	


	if($grade66731>0 && $grade66732>0 && $grade66733>0 && $grade65722>0 && $grade65931>0 && $grade65922>0 && $grade65811>0){
		$grade = ($grade66731+$grade66732 +$grade66733+$grade65722 +$grade65931 +$grade65922 +$grade65811)/7 .".00";
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
	<title>Electrical 3rd Semester Result</title>
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
						<td>66731 - Electrical Circuits-2</td>
						<td>4</td>
						<td><?php echo $marks66731; ?></td>
						<td><?php echo $gpa66731; ?></td>
						<td><?php echo $grade66731; ?></td>
					</tr>
					<tr>
						<td>66732 - Advanced Electricity</td>
						<td>4</td>
						<td><?php echo $marks66732; ?></td>
						<td><?php echo $gpa66732; ?></td>
						<td><?php echo $grade66732; ?></td>
					</tr>
					<tr>
						<td>66733 - Electrical Engineering Drawing</td>
						<td>4</td>
						<td><?php echo $marks66733; ?></td>
						<td><?php echo $gpa66733; ?></td>
						<td><?php echo $grade66733; ?></td>
					</tr>
					<tr>
						<td>65722 - Communicative English</td>
						<td>4</td>
						<td><?php echo $marks65722; ?></td>
						<td><?php echo $gpa65722; ?></td>
						<td><?php echo $grade65722; ?></td>
					</tr>
					<tr>
						<td>65931 - Mathematics-3</td>
						<td>4</td>
						<td><?php echo $marks65931; ?></td>
						<td><?php echo $gpa65931; ?></td>
						<td><?php echo $grade65931; ?></td>
					</tr>
					<tr>
						<td>65922 - Physics-2</td>
						<td>4</td>
						<td><?php echo $marks65922; ?></td>
						<td><?php echo $gpa65922; ?></td>
						<td><?php echo $grade65922; ?></td>
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
			<a style="display: inline-block;color: #fff;background: red;padding: 5px 10px;" href="et/et3rd.php?edit=<?php echo $select_loop->roll; ?>">Edit</a>
			<a href="../edit.php">Edit Again</a>
		</center></div>
	</div>

</body>
</html>