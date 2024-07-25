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
// Login for Doctor Class
class WellTechDoctorLogin
{
	public function DoctorLogin ($doctor_username, $doctor_password)
	{
		include ('db.php');
		$doctor_username = $_POST['doctor_username'];
		$doctor_password = $_POST['doctor_password'];
		$doctor_password= md5($doctor_password);


		$CheckDoctor_Record = "SELECT * FROM doctor_account WHERE doctor_username='$doctor_username' AND doctor_password='$doctor_password'";
		$Doctor_Result = mysqli_query($conn, $CheckDoctor_Record);
		{
			while ($DoctorPass = mysqli_fetch_array($Doctor_Result, MYSQLI_ASSOC))
			{
				if ((mysqli_num_rows($Doctor_Result)) > 0)
				{
				echo "<script type='text/javascript'>
		    $(document).ready(function() {
		       swal({
		            title: 'Welcome $doctor_username!',
		            text: 'You have succesfully logged in to your account',
		            timer: 3000
		          }, function(){
		                window.location.href = '../Doctor/doctor-portal-home.php';
		          });
		        });
		    </script>";
				}

			}

			if (mysqli_num_rows($Doctor_Result) == 0) 
			{
			$doctor_username = $_POST['doctor_username'];
			$doctor_password = $_POST['doctor_password'];

			$Check_Username = "SELECT doctor_username FROM doctor_account WHERE doctor_username ='$doctor_username'";
			$Check_Password = "SELECT doctor_password FROM doctor_account WHERE doctor_password ='$doctor_password'";

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
		                window.location.href = "../Doctor/login-doctor.php";
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
		                window.location.href = "../Doctor/login-doctor.php";
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
		                window.location.href = "../Doctor/login-doctor.php";
		          });
		        });
		    </script>';
			}

		}
		}
	}











}









?>
