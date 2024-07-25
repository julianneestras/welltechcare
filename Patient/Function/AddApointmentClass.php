<?php
session_start();
ob_start();
?>

<?php
// Class for Placing an Appointments

class WellTechAppointment
{
	public function WellTechAddAppointment($appointment_id,$Patient_ID, $First_Name, $Middle_Name, $Last_Name, $Age, $Gender, $Email, $doctor_id, $doctor_firstname, $doctor_middleinitial, $doctor_lastname,$doctor_username,$doctor_contactno,$doctor_email, $appointment_date, $appointment_time, $appointment_reason, $appointment_status)
	{
		include ('db.php');

		$WellTechAddAppointment = "INSERT INTO appointments "."(appointment_id, Patient_ID, First_Name, Middle_Name, Last_Name, Age, 
			Gender,Email, doctor_id, doctor_firstname, doctor_middleinitial, doctor_lastname,doctor_username,doctor_contactno,
			doctor_email, appointment_date, appointment_time, appointment_reason, appointment_status)".
		"VALUES('$appointment_id', '$Patient_ID','$First_Name', '$Middle_Name', '$Last_Name','$Age', '$Gender' ,'$Email', '$doctor_id', '$doctor_firstname', '$doctor_middleinitial', '$doctor_lastname','$doctor_username','$doctor_contactno','$doctor_email', '$appointment_date', '$appointment_time', '$appointment_reason', '$appointment_status')";

		$retval = mysqli_query( $conn, $WellTechAddAppointment);


                          if(! $retval) 
                               {
                                    die('Could not enter data: ' . mysqli_error($conn));
                               }
                    return $WellTechAddAppointment; 
                    mysqli_close($conn);
	}



}






?>