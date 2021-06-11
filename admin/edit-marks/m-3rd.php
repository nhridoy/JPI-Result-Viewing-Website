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



	$marks = "SELECT * FROM m3rd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc67031 = $marks_loop->tc67031; 
	$markstf67031 = $marks_loop->tf67031; 
	$markspc67031 = $marks_loop->pc67031; 
	$markspf67031 = $marks_loop->pf67031; 
	$markstc67032 = $marks_loop->tc67032; 
	$markstf67032 = $marks_loop->tf67032; 
	$markspc67032 = $marks_loop->pc67032; 
	$markspf67032 = $marks_loop->pf67032; 
	$markstc66822 = $marks_loop->tc66822; 
	$markstf66822 = $marks_loop->tf66822; 
	$markspc66822 = $marks_loop->pc66822; 
	$markspf66822 = $marks_loop->pf66822; 
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
	$markspc66611 = $marks_loop->pc66611;  
	$markspf66611 = $marks_loop->pf66611;  

	
	if($markstc67031 >= (20*40)/100 && $markstf67031 >= (30*40)/100 && $markspc67031 >= (50*40)/100 && $markspf67031 >= (50*40)/100){
		$marks67031=$markstc67031 + $markstf67031 + $markspc67031 + $markspf67031;
	}else{
		$marks67031 = 0;
	}
	if($markstc67032 >= (40*40)/100 && $markstf67032 >= (60*40)/100 && $markspc67032 >= (25*40)/100 && $markspf67032 >= (25*40)/100){
		$marks67032=$markstc67032 + $markstf67032 + $markspc67032 + $markspf67032;
	}else{
		$marks67032 = 0;
	}
	if($markstc66822 >= (40*40)/100 && $markstf66822 >= (60*40)/100 && $markspc66822 >= (25*40)/100 && $markspf66822 >= (25*40)/100){
		$marks66822=$markstc66822 + $markstf66822 + $markspc66822 + $markspf66822;
	}else{
		$marks66822 = 0;
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
	if($markspc66611 >= (50*40)/100 && $markspf66611 >= (50*40)/100){
		$marks66611=$markspc66611 + $markspf66611;
	}else{
		$marks66611 = 0;
	}




	if($marks67031 >= (150*80)/100){
		$gpa67031 = "A+";
		$grade67031 = "4.00";
	}
	elseif($marks67031 >= (150*75)/100 && $marks67031 < (150*80)/100){
		$gpa67031 = "A";
		$grade67031 = "3.75";
	}
	elseif($marks67031 >= (150*70)/100 && $marks67031 < (150*75)/100){
		$gpa67031 = "A-";
		$grade67031 = "3.50";
	}
	elseif($marks67031 >= (150*65)/100 && $marks67031 < (150*70)/100){
		$gpa67031 = "B+";
		$grade67031 = "3.25";
	}
	elseif($marks67031 >= (150*60)/100 && $marks67031 < (150*65)/100){
		$gpa67031 = "B";
		$grade67031 = "3.00";
	}
	elseif($marks67031 >= (150*55)/100 && $marks67031 < (150*60)/100){
		$gpa67031 = "B-";
		$grade67031 = "2.75";
	}
	elseif($marks67031 >= (150*50)/100 && $marks67031 < (150*55)/100){
		$gpa67031 = "C+";
		$grade67031 = "2.50";
	}
	elseif($marks67031 >= (150*45)/100 && $marks67031 < (150*50)/100){
		$gpa67031 = "C";
		$grade67031 = "2.25";
	}
	elseif($marks67031 >= (150*40)/100 && $marks67031 < (150*45)/100){
		$gpa67031 = "D";
		$grade67031 = "2.00";
	}
	elseif($marks67031 < (150*40)/100){
		$gpa67031 = "F";
		$grade67031 = "0.00";
	}



	if($marks67032 >= (150*80)/100){
		$gpa67032 = "A+";
		$grade67032 = "4.00";
	}
	elseif($marks67032 >= (150*75)/100 && $marks67032 < (150*80)/100){
		$gpa67032 = "A";
		$grade67032 = "3.75";
	}
	elseif($marks67032 >= (150*70)/100 && $marks67032 < (150*75)/100){
		$gpa67032 = "A-";
		$grade67032 = "3.50";
	}
	elseif($marks67032 >= (150*65)/100 && $marks67032 < (150*70)/100){
		$gpa67032 = "B+";
		$grade67032 = "3.25";
	}
	elseif($marks67032 >= (150*60)/100 && $marks67032 < (150*65)/100){
		$gpa67032 = "B";
		$grade67032 = "3.00";
	}
	elseif($marks67032 >= (150*55)/100 && $marks67032 < (150*60)/100){
		$gpa67032 = "B-";
		$grade67032 = "2.75";
	}
	elseif($marks67032 >= (150*50)/100 && $marks67032 < (150*55)/100){
		$gpa67032 = "C+";
		$grade67032 = "2.50";
	}
	elseif($marks67032 >= (150*45)/100 && $marks67032 < (150*50)/100){
		$gpa67032 = "C";
		$grade67032 = "2.25";
	}
	elseif($marks67032 >= (150*40)/100 && $marks67032 < (150*45)/100){
		$gpa67032 = "D";
		$grade67032 = "2.00";
	}
	elseif($marks67032 < (150*40)/100){
		$gpa67032 = "F";
		$grade67032 = "0.00";
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


	if($grade67031>0 && $grade67032>0 && $grade66822>0 && $grade65722>0 && $grade65931>0 && $grade65922>0 && $grade66611>0){
		$grade = ($grade67031+$grade67032 +$grade66822+$grade65722 +$grade65931 +$grade65922 +$grade66611)/7 .".00";
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
	<title>Mechanical 3rd Semester Result</title>
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
						<td>67031 - Machine Shop Practice-2</td>
						<td>3</td>
						<td><?php echo $marks67031; ?></td>
						<td><?php echo $gpa67031; ?></td>
						<td><?php echo $grade67031; ?></td>
					</tr>
					<tr>
						<td>67032 - Foundry & Pattern Making</td>
						<td>3</td>
						<td><?php echo $marks67032; ?></td>
						<td><?php echo $gpa67032; ?></td>
						<td><?php echo $grade67032; ?></td>
					</tr>
					<tr>
						<td>66822 - Electronic Engineering Fundamentals</td>
						<td>3</td>
						<td><?php echo $marks66822; ?></td>
						<td><?php echo $gpa66822; ?></td>
						<td><?php echo $grade66822; ?></td>
					</tr>
					<tr>
						<td>65722 - Communicative English</td>
						<td>2</td>
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
						<td>66611 - Computer Application</td>
						<td>2</td>
						<td><?php echo $marks66611; ?></td>
						<td><?php echo $gpa66611; ?></td>
						<td><?php echo $grade66611; ?></td>
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
			<a style="display: inline-block;color: #fff;background: red;padding: 5px 10px;" href="m/m3rd.php?edit=<?php echo $select_loop->roll; ?>">Edit</a>
			<a href="../edit.php">Edit Again</a>
		</center></div>
	</div>

</body>
</html>