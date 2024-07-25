<?php 
include ('db.php');
?>

<?php
$doctor_username = $_COOKIE['DoctorUsername'];
$Get_Doctor_Info = mysqli_query($conn, "SELECT *  FROM doctor_account WHERE doctor_username='$doctor_username'") or die("Error Connecting in database");

if(mysqli_num_rows($Get_Doctor_Info)>0)
	while ($row = mysqli_fetch_array($Get_Doctor_Info)) 
	{
		$doctor_firstname = $row['doctor_firstname'];
		$doctor_middleinitial = $row['doctor_middleinitial'];
		$doctor_lastname = $row['doctor_lastname'];
		$doctor_age = $row['doctor_age'];
		$doctor_birthdate = $row['doctor_birthdate'];
		$doctor_profession = $row['doctor_profession'];
		$doctor_gender = $row['doctor_gender'];
		$doctor_dayschedule = $row['doctor_dayschedule'];
		$doctor_timeschedule = $row['doctor_timeschedule'];
		$doctor_email = $row['doctor_email'];
		$doctor_contactno = $row['doctor_contactno'];
		
	}

	$Get_Data = $conn->prepare("SELECT *  FROM doctor_account WHERE doctor_username='$doctor_username'");
	$Get_Data -> execute();
	$Data_Results = $Get_Data->get_result();
	while($row = $Data_Results ->fetch_assoc())
	{
		$doctor_image = $row['doctor_image'];
	}




?>