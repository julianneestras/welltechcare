<?php

include ('Function/Classes.php');

$WellTechPatientLogin = new WellTechPatientLogin();

if(isset($_POST['login']))
{
  $Password = $_POST['Password'];
	$PatientLogin = $WellTechPatientLogin ->PatientLogin($_POST['Username'], $_POST['Password']);
	if (($PatientLogin) && password_verify($Password, $PasswordHash)) 
	{
		$patient_login = '<script type="text/javascript">
    $(document).ready(function() {
       swal({
            title: "Welcome!",
            text: "You have succesfully logged in to your account",
            timer: 3000
          }, function(){
                window.location.href = "../Patient/patient-portal-home.php";
          });
        });
    </script>';
    echo $patient_login;
	 	// echo "<script>alert('Welcome! You have succesfully logged in to your account')</script>";
		// header("refresh:0;url=../Patient/patient-portal-home.php");
	} 

}
?>

<!-- Cookies in Login -->
<?php 
if (isset($_POST['login'])) 
{
  $Username = $_POST['Username'];
  setcookie("PatientUsername", "$Username", time()+3600, "/", "", 0);
  
  
}

?>