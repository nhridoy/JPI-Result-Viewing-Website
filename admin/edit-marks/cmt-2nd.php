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



	$marks = "SELECT * FROM cmt2nd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markspc66621 = $marks_loop->pc66621; 
	$markspf66621 = $marks_loop->pf66621; 
	$markspc66612 = $marks_loop->pc66612; 
	$markspf66612 = $marks_loop->pf66612; 
	$markspc66623 = $marks_loop->pc66623; 
	$markspf66623 = $marks_loop->pf66623; 
	$markstc66822 = $marks_loop->tc66822; 
	$markstf66822 = $marks_loop->tf66822; 
	$markspc66822 = $marks_loop->pc66822; 
	$markspf66822 = $marks_loop->pf66822; 
	$markstc65921 = $marks_loop->tc65921; 
	$markstf65921 = $marks_loop->tf65921; 
	$markspc65921 = $marks_loop->pc65921; 
	$markstc65922 = $marks_loop->tc65922; 
	$markstf65922 = $marks_loop->tf65922; 
	$markspc65922 = $marks_loop->pc65922; 
	$markspf65922 = $marks_loop->pf65922; 
	$markstc65722 = $marks_loop->tc65722; 
	$markstf65722 = $marks_loop->tf65722; 
	$markspc65722 = $marks_loop->pc65722; 

	if($markspc66621 >= (50*40)/100 && $markspf66621 >= (50*40)/100){
		$marks66621=$markspc66621 + $markspf66621;
	}else{
		$marks66621 = 0;
	}
	if($markspc66612 >= (50*40)/100 && $markspf66612 >= (50*40)/100){
		$marks66612=$markspc66612 + $markspf66612;
	}else{
		$marks66612 = 0;
	}
	if($markspc66623 >= (50*40)/100 && $markspf66623 >= (50*40)/100){
		$marks66623=$markspc66623 + $markspf66623;
	}else{
		$marks66623 = 0;
	}
	if($markstc66822 >= (40*40)/100 && $markstf66822 >= (60*40)/100 && $markspc66822 >= (25*40)/100 && $markspf66822 >= (25*40)/100){
		$marks66822=$markstc66822 + $markstf66822 + $markspc66822 + $markspf66822;
	}else{
		$marks66822 = 0;
	}
	if($markstc65921 >= (60*40)/100 && $markstf65921 >= (90*40)/100 && $markspc65921 >= (50*40)/100){
		$marks65921=$markstc65921 + $markstf65921 + $markspc65921;
	}else{
		$marks65921 = 0;
	}
	if($markstc65922 >= (60*40)/100 && $markstf65922 >= (90*40)/100 && $markspc65922 >= (25*40)/100 && $markspf65922 >= (25*40)/100){
		$marks65922=$markstc65922 + $markstf65922 + $markspc65922 + $markspf65922;
	}else{
		$marks65922 = 0;
	}
	if($markstc65722 >= (20*40)/100 && $markstf65722 >= (30*40)/100 && $markspc65722 >= (50*40)/100){
		$marks65722=$markstc65722 + $markstf65722 + $markspc65722;
	}else{
		$marks65722 = 0;
	}




	if($marks66621 >= (100*80)/100){
		$gpa66621 = "A+";
		$grade66621 = "4.00";
	}
	elseif($marks66621 >= (100*75)/100 && $marks66621 < (100*80)/100){
		$gpa66621 = "A";
		$grade66621 = "3.75";
	}
	elseif($marks66621 >= (100*70)/100 && $marks66621 < (100*75)/100){
		$gpa66621 = "A-";
		$grade66621 = "3.50";
	}
	elseif($marks66621 >= (100*65)/100 && $marks66621 < (100*70)/100){
		$gpa66621 = "B+";
		$grade66621 = "3.25";
	}
	elseif($marks66621 >= (100*60)/100 && $marks66621 < (100*65)/100){
		$gpa66621 = "B";
		$grade66621 = "3.00";
	}
	elseif($marks66621 >= (100*55)/100 && $marks66621 < (100*60)/100){
		$gpa66621 = "B-";
		$grade66621 = "2.75";
	}
	elseif($marks66621 >= (100*50)/100 && $marks66621 < (100*55)/100){
		$gpa66621 = "C+";
		$grade66621 = "2.50";
	}
	elseif($marks66621 >= (100*45)/100 && $marks66621 < (100*50)/100){
		$gpa66621 = "C";
		$grade66621 = "2.25";
	}
	elseif($marks66621 >= (100*40)/100 && $marks66621 < (100*45)/100){
		$gpa66621 = "D";
		$grade66621 = "2.00";
	}
	elseif($marks66621 < (100*40)/100){
		$gpa66621 = "F";
		$grade66621 = "0.00";
	}





	if($marks66612 >= (100*80)/100){
		$gpa66612 = "A+";
		$grade66612 = "4.00";
	}
	elseif($marks66612 >= (100*75)/100 && $marks66612 < (100*80)/100){
		$gpa66612 = "A";
		$grade66612 = "3.75";
	}
	elseif($marks66612 >= (100*70)/100 && $marks66612 < (100*75)/100){
		$gpa66612 = "A-";
		$grade66612 = "3.50";
	}
	elseif($marks66612 >= (100*65)/100 && $marks66612 < (100*70)/100){
		$gpa66612 = "B+";
		$grade66612 = "3.25";
	}
	elseif($marks66612 >= (100*60)/100 && $marks66612 < (100*65)/100){
		$gpa66612 = "B";
		$grade66612 = "3.00";
	}
	elseif($marks66612 >= (100*55)/100 && $marks66612 < (100*60)/100){
		$gpa66612 = "B-";
		$grade66612 = "2.75";
	}
	elseif($marks66612 >= (100*50)/100 && $marks66612 < (100*55)/100){
		$gpa66612 = "C+";
		$grade66612 = "2.50";
	}
	elseif($marks66612 >= (100*45)/100 && $marks66612 < (100*50)/100){
		$gpa66612 = "C";
		$grade66612 = "2.25";
	}
	elseif($marks66612 >= (100*40)/100 && $marks66612 < (100*45)/100){
		$gpa66612 = "D";
		$grade66612 = "2.00";
	}
	elseif($marks66612 < (100*40)/100){
		$gpa66612 = "F";
		$grade66612 = "0.00";
	}



	if($marks66623 >= (100*80)/100){
		$gpa66623 = "A+";
		$grade66623 = "4.00";
	}
	elseif($marks66623 >= (100*75)/100 && $marks66623 < (100*80)/100){
		$gpa66623 = "A";
		$grade66623 = "3.75";
	}
	elseif($marks66623 >= (100*70)/100 && $marks66623 < (100*75)/100){
		$gpa66623 = "A-";
		$grade66623 = "3.50";
	}
	elseif($marks66623 >= (100*65)/100 && $marks66623 < (100*70)/100){
		$gpa66623 = "B+";
		$grade66623 = "3.25";
	}
	elseif($marks66623 >= (100*60)/100 && $marks66623 < (100*65)/100){
		$gpa66623 = "B";
		$grade66623 = "3.00";
	}
	elseif($marks66623 >= (100*55)/100 && $marks66623 < (100*60)/100){
		$gpa66623 = "B-";
		$grade66623 = "2.75";
	}
	elseif($marks66623 >= (100*50)/100 && $marks66623 < (100*55)/100){
		$gpa66623 = "C+";
		$grade66623 = "2.50";
	}
	elseif($marks66623 >= (100*45)/100 && $marks66623 < (100*50)/100){
		$gpa66623 = "C";
		$grade66623 = "2.25";
	}
	elseif($marks66623 >= (100*40)/100 && $marks66623 < (100*45)/100){
		$gpa66623 = "D";
		$grade66623 = "2.00";
	}
	elseif($marks66623 < (100*40)/100){
		$gpa66623 = "F";
		$grade66623 = "0.00";
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


	if($grade66621>0 && $grade66612>0 && $grade66623>0 && $grade66822>0 && $grade65921>0 && $grade65922>0 && $grade65722>0){
		$grade = ($grade66621+$grade66612 +$grade66623+$grade66822 +$grade65921 +$grade65922 +$grade65722)/7 .".00";
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
	<title>Computer 2nd Semester Result</title>
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
						<td>66621 - Database Application</td>
						<td>2</td>
						<td><?php echo $marks66621; ?></td>
						<td><?php echo $gpa66621; ?></td>
						<td><?php echo $grade66621; ?></td>
					</tr>
					<tr>
						<td>66612 - Computer Lab Practice</td>
						<td>2</td>
						<td><?php echo $marks66612; ?></td>
						<td><?php echo $gpa66612; ?></td>
						<td><?php echo $grade66612; ?></td>
					</tr>
					<tr>
						<td>66623 - Graphics Design-1</td>
						<td>2</td>
						<td><?php echo $marks66623; ?></td>
						<td><?php echo $gpa66623; ?></td>
						<td><?php echo $grade66623; ?></td>
					</tr>
					<tr>
						<td>66822 - Electronic Engineering Fundamentals</td>
						<td>3</td>
						<td><?php echo $marks66822; ?></td>
						<td><?php echo $gpa66822; ?></td>
						<td><?php echo $grade66822; ?></td>
					</tr>
					<tr>
						<td>65921 - Mathematics-2</td>
						<td>4</td>
						<td><?php echo $marks65921; ?></td>
						<td><?php echo $gpa65921; ?></td>
						<td><?php echo $grade65921; ?></td>
					</tr>
					<tr>
						<td>65922 - Physics-2</td>
						<td>4</td>
						<td><?php echo $marks65922; ?></td>
						<td><?php echo $gpa65922; ?></td>
						<td><?php echo $grade65922; ?></td>
					</tr>
					<tr>
						<td>65722 - Communicative English</td>
						<td>2</td>
						<td><?php echo $marks65722; ?></td>
						<td><?php echo $gpa65722; ?></td>
						<td><?php echo $grade65722; ?></td>
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
			<a style="display: inline-block;color: #fff;background: red;padding: 5px 10px;" href="cmt/cmt2nd.php?edit=<?php echo $select_loop->roll; ?>">Edit</a>
			<a href="../edit.php">Edit Again</a>
		</center></div>
	</div>

</body>
</html>