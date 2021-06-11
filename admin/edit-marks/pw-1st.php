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



	$marks = "SELECT * FROM pw1st WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc67111 = $marks_loop->tc67111; 
	$markstf67111 = $marks_loop->tf67111; 
	$markspc67111 = $marks_loop->pc67111; 
	$markspf67111 = $marks_loop->pf67111; 
	$markspc61011 = $marks_loop->pc61011; 
	$markspf61011 = $marks_loop->pf61011; 
	$markstc65911 = $marks_loop->tc65911; 
	$markstf65911 = $marks_loop->tf65911; 
	$markspc65911 = $marks_loop->pc65911; 
	$markstc65912 = $marks_loop->tc65912; 
	$markstf65912 = $marks_loop->tf65912; 
	$markspc65912 = $marks_loop->pc65912; 
	$markspf65912 = $marks_loop->pf65912; 
	$markstc65712 = $marks_loop->tc65712; 
	$markstf65712 = $marks_loop->tf65712; 
	$markstc65711 = $marks_loop->tc65711; 
	$markstf65711 = $marks_loop->tf65711; 
	$markspc65711 = $marks_loop->pc65711; 

	if($markstc67111 >= (60*40)/100 && $markstf67111 >= (90*40)/100 && $markspc67111 >= (25*40)/100 && $markspf67111 >= (25*40)/100){
		$marks67111=$markstc67111 + $markstf67111 + $markspc67111 + $markspf67111;
	}else{
		$marks67111 = 0;
	}
	if($markspc61011 >= (50*40)/100 && $markspf61011 >= (50*40)/100){
		$marks61011=$markspc61011 + $markspf61011;
	}else{
		$marks61011 = 0;
	}
	if($markstc65911 >= (60*40)/100 && $markstf65911 >= (90*40)/100 && $markspc65911 >= (50*40)/100){
		$marks65911=$markstc65911 + $markstf65911 + $markspc65911;
	}else{
		$marks65911 = 0;
	}
	if($markstc65912 >= (60*40)/100 && $markstf65912 >= (90*40)/100 && $markspc65912 >= (25*40)/100 && $markspf65912 >= (25*40)/100){
		$marks65912=$markstc65912 + $markstf65912 + $markspc65912 + $markspf65912;
	}else{
		$marks65912 = 0;
	}
	if($markstc65712 >= (40*40)/100 && $markstf65712 >= (60*40)/100){
		$marks65712=$markstc65712 + $markstf65712;
	}else{
		$marks65712 = 0;
	}
	if($markstc65711 >= (60*40)/100 && $markstf65711 >= (90*40)/100 && $markspc65711 >= (50*40)/100){
		$marks65711=$markstc65711 + $markstf65711 + $markspc65711;
	}else{
		$marks65711 = 0;
	}




	

	if($marks67111 >= (200*80)/100){
		$gpa67111 = "A+";
		$grade67111 = "4.00";
	}
	elseif($marks67111 >= (200*75)/100 && $marks67111 < (200*80)/100){
		$gpa67111 = "A";
		$grade67111 = "3.75";
	}
	elseif($marks67111 >= (200*70)/100 && $marks67111 < (200*75)/100){
		$gpa67111 = "A-";
		$grade67111 = "3.50";
	}
	elseif($marks67111 >= (200*65)/100 && $marks67111 < (200*70)/100){
		$gpa67111 = "B+";
		$grade67111 = "3.25";
	}
	elseif($marks67111 >= (200*60)/100 && $marks67111 < (200*65)/100){
		$gpa67111 = "B";
		$grade67111 = "3.00";
	}
	elseif($marks67111 >= (200*55)/100 && $marks67111 < (200*60)/100){
		$gpa67111 = "B-";
		$grade67111 = "2.75";
	}
	elseif($marks67111 >= (200*50)/100 && $marks67111 < (200*55)/100){
		$gpa67111 = "C+";
		$grade67111 = "2.50";
	}
	elseif($marks67111 >= (200*45)/100 && $marks67111 < (200*50)/100){
		$gpa67111 = "C";
		$grade67111 = "2.25";
	}
	elseif($marks67111 >= (200*40)/100 && $marks67111 < (200*45)/100){
		$gpa67111 = "D";
		$grade67111 = "2.00";
	}
	elseif($marks67111 < (200*40)/100){
		$gpa67111 = "F";
		$grade67111 = "0.00";
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



	

	if($grade67111>0 && $grade61011>0 && $grade65911>0 && $grade65912>0 && $grade65712>0 && $grade65711>0){
		$grade = ($grade67111+$grade61011 +$grade65911+$grade65912 +$grade65712 +$grade65711)/6 .".00";
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
	<title>Power 1st Semester Result</title>
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
						<td>67111 - Power Engineering Fundamental</td>
						<td>4</td>
						<td><?php echo $marks67111; ?></td>
						<td><?php echo $gpa67111; ?></td>
						<td><?php echo $grade67111; ?></td>
					</tr>
					<tr>
						<td>61011 - Engineering Drawing</td>
						<td>2</td>
						<td><?php echo $marks61011; ?></td>
						<td><?php echo $gpa61011; ?></td>
						<td><?php echo $grade61011; ?></td>
					</tr>
					<tr>
						<td>65911 - Mathematics-1</td>
						<td>4</td>
						<td><?php echo $marks65911; ?></td>
						<td><?php echo $gpa65911; ?></td>
						<td><?php echo $grade65911; ?></td>
					</tr>
					<tr>
						<td>65912 - Physics-1</td>
						<td>4</td>
						<td><?php echo $marks65912; ?></td>
						<td><?php echo $gpa65912; ?></td>
						<td><?php echo $grade65912; ?></td>
					</tr>
					<tr>
						<td>65712 - English</td>
						<td>2</td>
						<td><?php echo $marks65712; ?></td>
						<td><?php echo $gpa65712; ?></td>
						<td><?php echo $grade65712; ?></td>
					</tr>
					<tr>
						<td>65711 - Bangla</td>
						<td>4</td>
						<td><?php echo $marks65711; ?></td>
						<td><?php echo $gpa65711; ?></td>
						<td><?php echo $grade65711; ?></td>
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
			<a style="display: inline-block;color: #fff;background: red;padding: 5px 10px;" href="pw/pw1st.php?edit=<?php echo $select_loop->roll; ?>">Edit</a>
			<a href="../edit.php">Edit Again</a>
		</center></div>
	</div>

</body>
</html>