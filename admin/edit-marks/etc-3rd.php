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



	$marks = "SELECT * FROM etc3rd WHERE roll='$roll'";
	$select_marks = $object->marks($marks);
	/*while($select_loop=$select_result->fetch_object()){
		echo $select_loop->user_name;
	}*/
	$marks_loop=$select_marks->fetch_object();
	$markstc66831 = $marks_loop->tc66831; 
	$markstf66831 = $marks_loop->tf66831; 
	$markspc66831 = $marks_loop->pc66831; 
	$markspf66831 = $marks_loop->pf66831; 
	$markspc66832 = $marks_loop->pc66832; 
	$markspf66832 = $marks_loop->pf66832; 
	$markstc66833 = $marks_loop->tc66833; 
	$markstf66833 = $marks_loop->tf66833; 
	$markspc66833 = $marks_loop->pc66833; 
	$markspf66833 = $marks_loop->pf66833; 
	$markstc66835 = $marks_loop->tc66835; 
	$markstf66835 = $marks_loop->tf66835; 
	$markspc66835 = $marks_loop->pc66835; 
	$markspf66835 = $marks_loop->pf66835; 
	$markstc65931 = $marks_loop->tc65931; 
	$markstf65931 = $marks_loop->tf65931; 
	$markspc65931 = $marks_loop->pc65931; 
	$markstc65922 = $marks_loop->tc65922; 
	$markstf65922 = $marks_loop->tf65922;  
	$markspc65922 = $marks_loop->pc65922;  
	$markspf65922 = $marks_loop->pf65922;  
	$markstc65722 = $marks_loop->tc65722;  
	$markstf65722 = $marks_loop->tf65722;  
	$markspc65722 = $marks_loop->pc65722;  

	if($markstc66831 >= (60*40)/100 && $markstf66831 >= (90*40)/100 && $markspc66831 >= (25*40)/100 && $markspf66831 >= (25*40)/100){
		$marks66831=$markstc66831 + $markstf66831 + $markspc66831 + $markspf66831;
	}else{
		$marks66831 = 0;
	}
	if($markspc66832 >= (50*40)/100 && $markspf66832 >= (50*40)/100){
		$marks66832=$markspc66832 + $markspf66832;
	}else{
		$marks66832 = 0;
	}
	if($markstc66833 >= (40*40)/100 && $markstf66833 >= (60*40)/100 && $markspc66833 >= (25*40)/100 && $markspf66833 >= (25*40)/100){
		$marks66833=$markstc66833 + $markstf66833 + $markspc66833 + $markspf66833;
	}else{
		$marks66833 = 0;
	}
	if($markstc66835 >= (40*40)/100 && $markstf66835 >= (60*40)/100 && $markspc66835 >= (25*40)/100 && $markspf66835 >= (25*40)/100){
		$marks66835=$markstc66835 + $markstf66835 + $markspc66835 + $markspf66835;
	}else{
		$marks66835 = 0;
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
	if($markstc65722 >= (20*40)/100 && $markstf65722 >= (30*40)/100 && $markspc65722 >= (50*40)/100){
		$marks65722=$markstc65722 + $markstf65722 + $markspc65722;
	}else{
		$marks65722 = 0;
	}




	if($marks66831 >= (200*80)/100){
		$gpa66831 = "A+";
		$grade66831 = "4.00";
	}
	elseif($marks66831 >= (200*75)/100 && $marks66831 < (200*80)/100){
		$gpa66831 = "A";
		$grade66831 = "3.75";
	}
	elseif($marks66831 >= (200*70)/100 && $marks66831 < (200*75)/100){
		$gpa66831 = "A-";
		$grade66831 = "3.50";
	}
	elseif($marks66831 >= (200*65)/100 && $marks66831 < (200*70)/100){
		$gpa66831 = "B+";
		$grade66831 = "3.25";
	}
	elseif($marks66831 >= (200*60)/100 && $marks66831 < (200*65)/100){
		$gpa66831 = "B";
		$grade66831 = "3.00";
	}
	elseif($marks66831 >= (200*55)/100 && $marks66831 < (200*60)/100){
		$gpa66831 = "B-";
		$grade66831 = "2.75";
	}
	elseif($marks66831 >= (200*50)/100 && $marks66831 < (200*55)/100){
		$gpa66831 = "C+";
		$grade66831 = "2.50";
	}
	elseif($marks66831 >= (200*45)/100 && $marks66831 < (200*50)/100){
		$gpa66831 = "C";
		$grade66831 = "2.25";
	}
	elseif($marks66831 >= (200*40)/100 && $marks66831 < (200*45)/100){
		$gpa66831 = "D";
		$grade66831 = "2.00";
	}
	elseif($marks66831 < (200*40)/100){
		$gpa66831 = "F";
		$grade66831 = "0.00";
	}





	if($marks66832 >= (100*80)/100){
		$gpa66832 = "A+";
		$grade66832 = "4.00";
	}
	elseif($marks66832 >= (100*75)/100 && $marks66832 < (100*80)/100){
		$gpa66832 = "A";
		$grade66832 = "3.75";
	}
	elseif($marks66832 >= (100*70)/100 && $marks66832 < (100*75)/100){
		$gpa66832 = "A-";
		$grade66832 = "3.50";
	}
	elseif($marks66832 >= (100*65)/100 && $marks66832 < (100*70)/100){
		$gpa66832 = "B+";
		$grade66832 = "3.25";
	}
	elseif($marks66832 >= (100*60)/100 && $marks66832 < (100*65)/100){
		$gpa66832 = "B";
		$grade66832 = "3.00";
	}
	elseif($marks66832 >= (100*55)/100 && $marks66832 < (100*60)/100){
		$gpa66832 = "B-";
		$grade66832 = "2.75";
	}
	elseif($marks66832 >= (100*50)/100 && $marks66832 < (100*55)/100){
		$gpa66832 = "C+";
		$grade66832 = "2.50";
	}
	elseif($marks66832 >= (100*45)/100 && $marks66832 < (100*50)/100){
		$gpa66832 = "C";
		$grade66832 = "2.25";
	}
	elseif($marks66832 >= (100*40)/100 && $marks66832 < (100*45)/100){
		$gpa66832 = "D";
		$grade66832 = "2.00";
	}
	elseif($marks66832 < (100*40)/100){
		$gpa66832 = "F";
		$grade66832 = "0.00";
	}



	if($marks66833 >= (150*80)/100){
		$gpa66833 = "A+";
		$grade66833 = "4.00";
	}
	elseif($marks66833 >= (150*75)/100 && $marks66833 < (150*80)/100){
		$gpa66833 = "A";
		$grade66833 = "3.75";
	}
	elseif($marks66833 >= (150*70)/100 && $marks66833 < (150*75)/100){
		$gpa66833 = "A-";
		$grade66833 = "3.50";
	}
	elseif($marks66833 >= (150*65)/100 && $marks66833 < (150*70)/100){
		$gpa66833 = "B+";
		$grade66833 = "3.25";
	}
	elseif($marks66833 >= (150*60)/100 && $marks66833 < (150*65)/100){
		$gpa66833 = "B";
		$grade66833 = "3.00";
	}
	elseif($marks66833 >= (150*55)/100 && $marks66833 < (150*60)/100){
		$gpa66833 = "B-";
		$grade66833 = "2.75";
	}
	elseif($marks66833 >= (150*50)/100 && $marks66833 < (150*55)/100){
		$gpa66833 = "C+";
		$grade66833 = "2.50";
	}
	elseif($marks66833 >= (150*45)/100 && $marks66833 < (150*50)/100){
		$gpa66833 = "C";
		$grade66833 = "2.25";
	}
	elseif($marks66833 >= (150*40)/100 && $marks66833 < (150*45)/100){
		$gpa66833 = "D";
		$grade66833 = "2.00";
	}
	elseif($marks66833 < (150*40)/100){
		$gpa66833 = "F";
		$grade66833 = "0.00";
	}



	if($marks66835 >= (150*80)/100){
		$gpa66835 = "A+";
		$grade66835 = "4.00";
	}
	elseif($marks66835 >= (150*75)/100 && $marks66835 < (150*80)/100){
		$gpa66835 = "A";
		$grade66835 = "3.75";
	}
	elseif($marks66835 >= (150*70)/100 && $marks66835 < (150*75)/100){
		$gpa66835 = "A-";
		$grade66835 = "3.50";
	}
	elseif($marks66835 >= (150*65)/100 && $marks66835 < (150*70)/100){
		$gpa66835 = "B+";
		$grade66835 = "3.25";
	}
	elseif($marks66835 >= (150*60)/100 && $marks66835 < (150*65)/100){
		$gpa66835 = "B";
		$grade66835 = "3.00";
	}
	elseif($marks66835 >= (150*55)/100 && $marks66835 < (150*60)/100){
		$gpa66835 = "B-";
		$grade66835 = "2.75";
	}
	elseif($marks66835 >= (150*50)/100 && $marks66835 < (150*55)/100){
		$gpa66835 = "C+";
		$grade66835 = "2.50";
	}
	elseif($marks66835 >= (150*45)/100 && $marks66835 < (150*50)/100){
		$gpa66835 = "C";
		$grade66835 = "2.25";
	}
	elseif($marks66835 >= (150*40)/100 && $marks66835 < (150*45)/100){
		$gpa66835 = "D";
		$grade66835 = "2.00";
	}
	elseif($marks66835 < (150*40)/100){
		$gpa66835 = "F";
		$grade66835 = "0.00";
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


	if($grade66831>0 && $grade66832>0 && $grade66833>0 && $grade66835>0 && $grade65931>0 && $grade65922>0 && $grade65722>0){
		$grade = ($grade66831+$grade66832 +$grade66833+$grade66835 +$grade65931 +$grade65922 +$grade65722)/7 .".00";
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
	<title>Electronics 3rd Semester Result</title>
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
						<td>66831 - Advanced Electronic Device & Circuits</td>
						<td>4</td>
						<td><?php echo $marks66831; ?></td>
						<td><?php echo $gpa66831; ?></td>
						<td><?php echo $grade66831; ?></td>
					</tr>
					<tr>
						<td>66832 - PCB Design & Prototyping</td>
						<td>2</td>
						<td><?php echo $marks66832; ?></td>
						<td><?php echo $gpa66832; ?></td>
						<td><?php echo $grade66832; ?></td>
					</tr>
					<tr>
						<td>66833 - Electronic Appliance</td>
						<td>3</td>
						<td><?php echo $marks66833; ?></td>
						<td><?php echo $gpa66833; ?></td>
						<td><?php echo $grade66833; ?></td>
					</tr>
					<tr>
						<td>66835 - Basic Communication Engineering</td>
						<td>3</td>
						<td><?php echo $marks66835; ?></td>
						<td><?php echo $gpa66835; ?></td>
						<td><?php echo $grade66835; ?></td>
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
			<a style="display: inline-block;color: #fff;background: red;padding: 5px 10px;" href="etc/etc3rd.php?edit=<?php echo $select_loop->roll; ?>">Edit</a>
			<a href="../edit.php">Edit Again</a>
		</center></div>
	</div>

</body>
</html>