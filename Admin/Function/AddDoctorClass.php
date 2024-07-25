<?php  
session_start();
ob_start();
?>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php  
// Class for Add Doctor

class WellTechAddDoctor
{
	public function WellTechInsertDoctor($doctor_id, $doctor_firstname, $doctor_middleinitial, $doctor_lastname, $doctor_age, $doctor_birthdate, $doctor_profession, $doctor_gender, $doctor_dayschedule, $doctor_timeschedule, $doctor_email, $doctor_contactno, $doctor_username, $doctor_password, $doctor_image)
	{
		include ('db.php');

		$doctor_username = $_POST['doctor_username'];
		$Select_Username = "SELECT doctor_username FROM doctor_account WHERE doctor_username='$doctor_username'";
		$Username_Result = mysqli_query($conn,$Select_Username);

		if(mysqli_num_rows($Username_Result) == 1) 
		{
			echo '<script type="text/javascript">
                            $(document).ready(function() {
                               swal({
                                    title: "Oopss!",
                                    text: "Username was already taken.",
                                    type: "error",
                                    timer: 5000
                                  });
                                });
                        </script>';
		}
		else
		{

		$WellTechInsertDoctor = "INSERT INTO doctor_account"."(doctor_id, doctor_firstname, doctor_middleinitial, doctor_lastname, doctor_age, doctor_birthdate, doctor_profession, doctor_gender, doctor_dayschedule, doctor_timeschedule, doctor_email, doctor_contactno, doctor_username, doctor_password, doctor_image)".
		"VALUES('$doctor_id', '$doctor_firstname', '$doctor_middleinitial', '$doctor_lastname',
		'$doctor_age', '$doctor_birthdate','$doctor_profession', '$doctor_gender', '$doctor_dayschedule', 
		'$doctor_timeschedule', '$doctor_email', '$doctor_contactno', '$doctor_username', '$doctor_password', 
		'$doctor_image')";
		
		$retval = mysqli_query( $conn, $WellTechInsertDoctor);


                          if(! $retval) 
                               {
                                    die('Could not enter data: ' . mysqli_error($conn));
                               }
                    return $WellTechInsertDoctor; 
                    mysqli_close($conn);
  
		}
	}
}

?>


