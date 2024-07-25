<?php 

include ('Function/adminclass.php');

$WellTechAdminLogin =  new WellTechAdminLogin();

if (isset($_POST['AdminSignIn'])) 
{
	$AdminLogin = $WellTechAdminLogin ->AdminLogin($_POST['admin_username'], $_POST['admin_password']);
	if ($AdminLogin) 
	{
		echo "<script>alert('Welcome Admin! You have succesfully logged in to your admin account')</script>";
		header("refresh:0;url=admin-portal-home.php");
	}


	// Cookies in Admin Login
	$admin_username = $_POST['admin_username'];
	setcookie("AdminUsername", "$admin_username", time()+3600, "/", "", 0);
}
?>

