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
// Login for Admin Class
class WellTechAdminLogin
{

	public function AdminLogin($admin_username, $admin_password)
	{
		include ('db.php');
		$admin_username = $_POST['admin_username'];
		$admin_password = $_POST['admin_password'];

		$CheckAdmin_record = "SELECT * FROM admin_account WHERE admin_username ='$admin_username' AND admin_password='$admin_password'";
		$Adminrecord_Result = mysqli_query($conn, $CheckAdmin_record);
		{

		while ($AdminPass = mysqli_fetch_array($Adminrecord_Result, MYSQLI_ASSOC))
		{
			if ((mysqli_num_rows($Adminrecord_Result))>0)
			{
				echo "<script type='text/javascript'>
		    $(document).ready(function() {
		       swal({
		            title: 'Welcome $admin_username!',
		            text: 'You have succesfully logged in to your account',
		            timer: 3000
		          }, function(){
		                window.location.href = '../Admin/admin-portal-home.php';
		          });
		        });
		    </script>";
			}
		}

		if (mysqli_num_rows($Adminrecord_Result) == 0) 
			{
			$admin_username = $_POST['admin_username'];
			$admin_password = $_POST['admin_password'];

			$Check_Username = "SELECT admin_username FROM admin_account WHERE admin_username ='$admin_username'";
			$Check_Password = "SELECT admin_password FROM admin_account WHERE admin_password ='$admin_password'";

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
		                window.location.href = "../Admin/admin-portal-home.php";
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
		                window.location.href = "../Admin/admin-portal-home.php";
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
		                window.location.href = "../Admin/admin-portal-home.php";
		          });
		        });
		    </script>';
			}

		}

	}








}

}


?>