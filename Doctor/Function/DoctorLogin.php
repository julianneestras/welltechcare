<?php
include ('Function/DoctorClass.php');


$WellTechDoctorLogin =  new WellTechDoctorLogin();

if (isset($_POST['DoctorSignIn'])) 
{
	$doctor_password = $_POST['doctor_password'];
	$DoctorLogin = $WellTechDoctorLogin ->DoctorLogin($_POST['doctor_username'], $_POST['doctor_password']);
	if ($DoctorLogin) 
	{
		echo "<script>alert('Welcome Admin! You have succesfully logged in to your admin account')</script>";
		header("refresh:0;url=doctor-portal-home.php");
	}


	$doctor_username = $_POST['doctor_username'];
	setcookie("DoctorUsername", "$doctor_username", time()+3600, "/","",0);
}


?>
