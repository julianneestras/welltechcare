<?php
	session_start();
	require 'db.php';

	// Add products into the cart table
	if (isset($_POST['doctor_id'])) {
	  $doctor_id = $_POST['doctor_id'];
	  $doctor_firstname = $_POST['doctor_firstname'];
	  $doctor_middleinitial = $_POST['doctor_middleinitial'];
	  $doctor_lastname = $_POST['doctor_lastname'];
	  $doctor_dayschedule = $_POST['doctor_dayschedule'];
	  $doctor_timeschedule = $_POST['doctor_timeschedule'];
	  $doctor_email = $_POST['doctor_email'];
	  $doctor_contactno = $_POST['doctor_contactno'];
	  $doctor_username = $_POST['doctor_username'];
 
	  $stmt = $conn->prepare('SELECT doctor_id FROM select_doctor WHERE doctor_id=?');
	  $stmt->bind_param('s',$doctor_id);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['doctor_id'] ?? '';
	  $Insert_TempDoc = $conn->prepare('INSERT INTO select_doctor (doctor_id, doctor_firstname, doctor_middleinitial,doctor_lastname,doctor_dayschedule,doctor_timeschedule,doctor_email,doctor_contactno,doctor_username) VALUES (?,?,?,?,?,?,?,?,?)');
	    $Insert_TempDoc->bind_param('sssssssss',$doctor_id, $doctor_firstname, $doctor_middleinitial,$doctor_lastname,$doctor_dayschedule,$doctor_timeschedule,$doctor_email,$doctor_contactno,$doctor_username);
	    $Insert_TempDoc->execute();

	  if ($Insert_TempDoc) 
	  {
	   echo "<center><h3><script>alert('Doctor selected');</script></h3></center>";
	  } 

	  else 
	  {
	  	echo "<center><h3><script>alert('Doctor already selected');</script></h3></center>";
	  }
	}
	  
?>