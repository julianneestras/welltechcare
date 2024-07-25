<?php
session_start();
ob_start();
?>

<?php
//Class for Add Result

class WellTechAddResult
{
	public function WellTechInsertResult ($Result_ID, $Patient_ID, $appointment_id, $Result_Uploaded, $doctor_name, $First_Name, $Middle_Name, $Last_Name, $Age, $Address, $Birthdate, $Height, $Weight, $Gender,$Email, $BloodType, $Patient_HeartRate, $Patient_BloodPressure, $Patient_Urinalysis, $Patient_Xray, $Patient_RBC, $Patient_WBC, $Patient_Platelet, $Patient_Hemoglobin, $Patient_Hematocrit, $appointment_status)
	{
		include ('db.php');

		$WellTechInsertResult = "INSERT INTO result"."(Result_ID, Patient_ID, appointment_id, Result_Uploaded,doctor_name, First_Name, Middle_Name, Last_Name, Age, Address, Birthdate, Height, Weight, Gender,Email, BloodType, Patient_HeartRate, Patient_BloodPressure, Patient_Urinalysis, Patient_Xray, Patient_RBC, Patient_WBC, Patient_Platelet, Patient_Hemoglobin, Patient_Hematocrit, appointment_status)"."VALUES ('$Result_ID', '$Patient_ID','$appointment_id', '$Result_Uploaded','$doctor_name', '$First_Name', '$Middle_Name', '$Last_Name', '$Age', '$Address', '$Birthdate', '$Height', '$Weight', '$Gender','$Email', '$BloodType', '$Patient_HeartRate', '$Patient_BloodPressure', '$Patient_Urinalysis', '$Patient_Xray', '$Patient_RBC', '$Patient_WBC', '$Patient_Platelet', '$Patient_Hemoglobin', '$Patient_Hematocrit','$appointment_status')";

			$retval = mysqli_query($conn, $WellTechInsertResult);
				if (! $retval) 
				{
					die('Could not enter Results: '.mysqli_error($conn));
				}
				return $WellTechInsertResult;
				mysqli_error($conn);
	}
}



?>	