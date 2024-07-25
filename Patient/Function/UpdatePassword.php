<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
error_reporting(0);
ini_set('display_errors', 0);
include ('db.php');
$error_Password ='';
$Username = $_COOKIE['PatientUsername'];
$Get_Info = mysqli_query($conn,"SELECT * FROM patient_account WHERE Username='$Username'")or die('Error Connecting in database');

if (mysqli_num_rows($Get_Info)>0) 
	while($row=mysqli_fetch_array($Get_Info))
	{
		$OldPassword = $row["Password"];

	}

    
		if(isset($_POST['UpdatePatientProfilePass']))
        {
	          $Password = $_POST['Password'];
				$PasswordHash = md5($Password); 
	          $NewPassword = $_POST['NewPassword'];
				$NewPasswordHash = md5($NewPassword); 

	          $ConPassword  = $_POST['ConPassword'];
				$ConPasswordHash = md5($ConPassword); 

				//Password
				$Password_Uppercase = preg_match('@[A-Z]@', $NewPassword);
				$Password_Lowercase = preg_match('@[a-z]@', $NewPassword);
				$Password_Number = preg_match('@[0-9]@', $NewPassword);
				$Password_SpecialCharac =  preg_match('@[^\w]@', $NewPassword);

	          if ($OldPassword == $PasswordHash)
	          {
	          	if ((!$Password_Uppercase) || (!$Password_Lowercase) || (!$Password_Number) || (!$Password_SpecialCharac) || (strlen($NewPassword) <8))
				{
					$error_Password = '<label class ="text-danger">There must be at least 8 characters in the password, with at least 1 lowercase, 1 uppercase, 1 numeric, and 1 special character in the format (!@#$%&*).</label>';
				}
	            elseif (($Password_Uppercase) || ($Password_Lowercase) || ($Password_Number) || ($Password_SpecialCharac) || (strlen($NewPassword) >8))
	            {
	            	if ($NewPasswordHash == $ConPasswordHash) 
	            	{
	            		$Update_Profile = "UPDATE patient_account SET Password='$NewPasswordHash' WHERE Username='$Username'";
	                	$retval = mysqli_query( $conn,$Update_Profile);   
					    if ($retval) 
					    {
					    	echo '<script type="text/javascript">
					    	$(document).ready(function() {
						       swal({
						            title: "Password Changed",
						            text: "You have change your Password Successfully",
						            type: "success",
						            showConfirmButton: true
						          }, function(){
						                window.location.href = "user-profile-patient.php";
						          });
						        });
					    	</script>';
					     }
	            	}
	            	else
	            	{
	            		echo '<script type="text/javascript">
				    $(document).ready(function() {
				       swal({
				            title: "Update Password Unsuccessul",
				            text: "Please match your password correctly!",
				            type: "error",
				            showConfirmButton: true
				          }, function(){
				                window.location.href = "user-profile-patient.php";
				          });
				        });
				    </script>';
	            	}

	                
				}              			
	            else
	            {
	                echo '<script type="text/javascript">
				    $(document).ready(function() {
				       swal({
				            title: "Update Password Unsuccessul",
				            text: "Please confirm your password correctly!",
				            type: "error",
				            showConfirmButton: true
				          }, function(){
				                window.location.href = "user-profile-patient.php";
				          });
				        });
				    </script>';
	             }
	         }
	         else
	         {
	         	echo '<script type="text/javascript">
				    $(document).ready(function() {
				       swal({
				            title: "Update Password Unsuccessul",
				            text: "Please enter a correct current password!",
				            type: "error",
				            showConfirmButton: true
				          }, function(){
				                window.location.href = "user-profile-patient.php";
				          });
				        });
				    </script>';
	         }


	         }
	     
	  
 	

?>