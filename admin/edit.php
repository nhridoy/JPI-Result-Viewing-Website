<?php 

  session_start();
  if(empty($_SESSION['user'])){
    header('location:edit-login.php');
  }
 error_reporting(0);
  
  if(isset($_POST['submit'])){
    try{
      include('../connect.php');
      $roll = $_POST['roll'];
      $registration = $_POST['reg'];
      $dep = $_POST['dep'];
      $sem = $_POST['sem'];
      $errormsg = "<div class='alert'>Result Not Found!!!</div>";
      $search = "SELECT roll,registration FROM student_info WHERE roll='$roll' && registration='$registration'";
      $object = new connect;
      $search_data = $object->search($search);
      echo $errormsg;
    }catch(exception $error){
      session_start();
      $_SESSION['roll'] = $roll;

      if(isset($dep) && $dep=="1"){
        if (isset($sem) && $sem=="f"){
          try{
            $cmt1st = "SELECT * FROM cmt1st WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->cmt1st($cmt1st);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/cmt-1st.php');
          }
        }
        if (isset($sem) && $sem=="s"){
          try{
            $cmt2nd = "SELECT * FROM cmt2nd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->cmt2nd($cmt2nd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/cmt-2nd.php');
          }
        }
        if (isset($sem) && $sem=="t"){
          try{
            $cmt3rd = "SELECT * FROM cmt3rd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->cmt3rd($cmt3rd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/cmt-3rd.php');
          }
        }
      }

       if(isset($dep) && $dep=="2"){
        if (isset($sem) && $sem=="f"){
          try{
            $c1st = "SELECT * FROM c1st WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->c1st($c1st);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/c-1st.php');
          }
        }
        if (isset($sem) && $sem=="s"){
          try{
            $c2nd = "SELECT * FROM c2nd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->c2nd($c2nd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/c-2nd.php');
          }
        }
        if (isset($sem) && $sem=="t"){
          try{
            $c3rd = "SELECT * FROM c3rd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->c3rd($c3rd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/c-3rd.php');
          }
        }
      }

      elseif(isset($dep) && $dep=="3"){
        if (isset($sem) && $sem=="f"){
          try{
            $m1st = "SELECT * FROM m1st WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->m1st($m1st);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/m-1st.php');
          }
        }
        if (isset($sem) && $sem=="s"){
          try{
            $m2nd = "SELECT * FROM m2nd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->m2nd($m2nd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/m-2nd.php');
          }
        }
        if (isset($sem) && $sem=="t"){
          try{
            $m3rd = "SELECT * FROM m3rd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->m3rd($m3rd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/m-3rd.php');
          }
        }
      }

      elseif(isset($dep) && $dep=="4"){
        if (isset($sem) && $sem=="f"){
          try{
            $et1st = "SELECT * FROM et1st WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->et1st($et1st);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/et-1st.php');
          }
        }
        if (isset($sem) && $sem=="s"){
          try{
            $et2nd = "SELECT * FROM et2nd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->et2nd($et2nd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/et-2nd.php');
          }
        }
        if (isset($sem) && $sem=="t"){
          try{
            $et3rd = "SELECT * FROM et3rd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->et3rd($et3rd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/et-3rd.php');
          }
        }
      }

      elseif(isset($dep) && $dep=="5"){
        if (isset($sem) && $sem=="f"){
          try{
            $etc1st = "SELECT * FROM etc1st WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->etc1st($etc1st);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/etc-1st.php');
          }
        }
        if (isset($sem) && $sem=="s"){
          try{
            $etc2nd = "SELECT * FROM etc2nd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->etc2nd($etc2nd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/etc-2nd.php');
          }
        }
        if (isset($sem) && $sem=="t"){
          try{
            $etc3rd = "SELECT * FROM etc3rd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->etc3rd($etc3rd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/etc-3rd.php');
          }
        }
      }

      elseif(isset($dep) && $dep=="6"){
        if (isset($sem) && $sem=="f"){
          try{
            $pw1st = "SELECT * FROM pw1st WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->pw1st($pw1st);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/pw-1st.php');
          }
        }
        if (isset($sem) && $sem=="s"){
          try{
            $pw2nd = "SELECT * FROM pw2nd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->pw2nd($pw2nd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/pw-2nd.php');
          }
        }
        if (isset($sem) && $sem=="t"){
          try{
            $pw3rd = "SELECT * FROM pw3rd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->pw3rd($pw3rd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/pw-3rd.php');
          }
        }
      }

      elseif(isset($dep) && $dep=="7"){
        if (isset($sem) && $sem=="f"){
          try{
            $tct1st = "SELECT * FROM tct1st WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->tct1st($tct1st);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/tct-1st.php');
          }
        }
        if (isset($sem) && $sem=="s"){
          try{
            $tct2nd = "SELECT * FROM tct2nd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->tct2nd($tct2nd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/tct-2nd.php');
          }
        }
        if (isset($sem) && $sem=="t"){
          try{
            $tct3rd = "SELECT * FROM tct3rd WHERE roll='$roll'";
            $object = new connect;
            $search_data = $object->tct3rd($tct3rd);
            echo $errormsg;
          }catch(exception $error){
            header('location:edit-marks/tct-3rd.php');
          }
        }
      }
      
    }
  }

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result-Jessore Polytechnic Institute</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css"/>
</head>
<body>
	<div class="main fix">
		<h2>Find Your Result</h2>
		<div class="form fix">
			<form method="post" enctype="multipart/form-data">
				<legend>Enter Your Details</legend><hr>
          		<label for="roll"><span class="number">1</span>Roll:</label><br>
          		<input type="text" id="roll" name="roll" placeholder="Enter Roll" /><br>
          		<label for="reg"><span class="number">2</span>Registration:</label><br>
          		<input type="text" id="reg" name="reg" placeholder="Enter Registration" /><br>
          		<label for="dep"><span class="number">3</span>Depertment:</label><br>
          		<select id="dep" name="dep">
          			<optgroup label="Select Depertment">
          				<option value="1">Computer</option>
          				<option value="2">Civil</option>
          				<option value="3">Mechanical</option>
          				<option value="4">Electrical</option>
          				<option value="5">Electronics</option>
          				<option value="6">Power</option>
          				<option value="7">Telecomunication</option>
          			</optgroup>
          		</select><br>
          		<label for="sem"><span class="number">4</span>Semester:</label><br>
            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 fix"> 
             	<input type="radio" id="first" name="sem" value="f" /> 1st
             	<input type="radio" id="second" name="sem" value="s" /> 2nd
             	<input type="radio" id="third" name="sem" value="t" /> 3rd
           		</div>
           		<button class=" fix" type="submit" name="submit">Search</button>
			</form>
			<center><a href="index.php">Home</a><br>
      <a href="edit-logout.php">Logout</a></center>
		</div>
	</div>
	<center><copyright>All Rights Reserved &copy;Jessore Polytechnic Institute-2017 <br> Design and Developed By- <a href="http://www.facebook.com/nahidujjaman.hridoy">Nahidujjaman Hridoy</a></copyright></center>
</body>
</html>