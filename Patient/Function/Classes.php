<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
session_start();
ob_start();
?>

<?php
// Login for Patient Class

class WellTechPatientLogin
{
	
	public function PatientLogin($Username, $Password)
	{
		include ('Function/db.php');
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$Password = md5($Password);

		$Check_Records = "SELECT * FROM patient_account WHERE Username='$Username' AND Password='$Password'";
		$Records_Result = mysqli_query($conn, $Check_Records);

		while ($Pass = mysqli_fetch_array($Records_Result, MYSQLI_ASSOC))
		{
			if ((mysqli_num_rows($Records_Result))>0) 
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
			}
		}

		if (mysqli_num_rows($Records_Result) == 0) 
		{
			$Username = $_POST['Username'];
			$Password = $_POST['Password'];

			$Check_Username = "SELECT Username FROM patient_account WHERE Username ='$Username'";
			$Check_Password = "SELECT Password FROM patient_account WHERE Password ='$Password'";

			$Username_Result = mysqli_query($conn, $Check_Username);
			$Password_Result = mysqli_query($conn, $Check_Password);

			if ((mysqli_num_rows($Username_Result)) > 0 && (mysqli_num_rows($Password_Result)) == 0) 
			{

				echo '<script type="text/javascript">
		    $(document).ready(function() {
		       swal({
		            title: "Oopps..!",
		            text: "Wrong Password",
		            timer: 3000
		          }, function(){
		                window.location.href = "../Patient/login-patient.php";
		          });
		        });
		    </script>';
			}
			elseif((mysqli_num_rows($Password_Result))> 0 && (mysqli_num_rows($Username_Result)) == 0)
			{
				echo '<script type="text/javascript">
		    $(document).ready(function() {
		       swal({
		            title: "Oopps..!",
		            text: "Username does not exist!",
		            timer: 3000
		          }, function(){
		                window.location.href = "../Patient/login-patient.php";
		          });
		        });
		    </script>';
			}
			else
			{
				echo '<script type="text/javascript">
		    $(document).ready(function() {
		       swal({
		            title: "Oopps..!",
		            text: "Username and Password are incorrect.",
		            timer: 3000
		          }, function(){
		                window.location.href = "../Patient/login-patient.php";
		          });
		        });
		    </script>';
			}

		}
	}
}

?>

