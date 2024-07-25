<?php  
include ('db.php');

$Check_PatientID = "SELECT * FROM patient_account ORDER BY DESC limit 1";
$PatientID_Result = mysqli_query($conn, $Check_PatientID);
$row = mysqli_fetch_array($PatientID_Result);
$PatientID = $row['Patient_ID'];
if (empty($PatientID)) 
{
	$Patient_ID == "PTN-00001";
}
else
{
	$patient_ID = str_replace("PTN-", "", $PatientID);
	$Patient_FID = str_pad($patient_ID + 1, 5, 0, STR_PAD_LEFT);
	$Patient_ID = 'PTN-'.$Patient_FID;

}



?>