<!-- Insertion of Results -->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
include ('db.php');
include ('AddResultClass.php');

$WellTechAddResult = new WellTechAddResult ();

if (isset($_POST['AddResult'])) 
{
	$Result_ID = $_POST['Result_ID'];
	$Patient_ID = $_POST['Patient_ID'];
	$Result_Uploaded = $_POST['Result_Uploaded'];
	$First_Name = $_POST['First_Name'];
	$Middle_Name = $_POST['Middle_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Age = $_POST['Age'];
	$Address = $_POST['Address'];
	$Birthdate = $_POST['Birthdate'];
	$Height = $_POST['Height'];
	$Weight = $_POST['Weight'];
	$Gender = $_POST['Gender'];
	$BloodType = $_POST['BloodType'];
	$Patient_HeartRate = $_POST['Patient_HeartRate'];
	$Patient_BloodPressure = $_POST['Patient_BloodPressure'];
	$Patient_Urinalysis = $_POST['Patient_Urinalysis'];
	$Patient_Xray = $_POST['Patient_Xray'];
	$Patient_RBC = $_POST['Patient_RBC'];
	$Patient_WBC = $_POST['Patient_WBC'];
	$Patient_Platelet = $_POST['Patient_Platelet'];
	$Patient_Hemoglobin = $_POST['Patient_Hemoglobin'];
	$Patient_Hematocrit = $_POST['Patient_Hematocrit'];
	$appointment_id = $_POST['appointment_id'];
	$doctor_name = $_POST['doctor_name'];
	$appointment_status = "Result Uploaded";
	$Email = $_POST['Email'];

	$WellTechInsertResult = $WellTechAddResult -> WellTechInsertResult($Result_ID ,$Patient_ID,$appointment_id,$Result_Uploaded ,$doctor_name,$First_Name,$Middle_Name,$Last_Name,$Age ,$Address,$Birthdate,$Height,$Weight,$Gender,$Email,$BloodType,$Patient_HeartRate,$Patient_BloodPressure,$Patient_Urinalysis,$Patient_Xray,$Patient_RBC,$Patient_WBC,$Patient_Platelet,$Patient_Hemoglobin,$Patient_Hematocrit, $appointment_status);

	if ($WellTechInsertResult) 
	{

		echo "<script type='text/javascript'>
		    $(document).ready(function() {
		       swal({
		            title: 'Result Successfully Uploaded',
		            text: 'You have succesfully upload the result!',
		            type: 'success',
		            timer: 3000
		          }, function(){
		                window.location.href = 'enter-lab-results-doctor.php';
		          });
		        });
		    </script>";

		$query = "UPDATE appointments SET appointment_status='$appointment_status' WHERE appointment_id='$appointment_id'";  
    	$query_run = mysqli_query($conn, $query);


	}
	else
	{
		echo "<script type='text/javascript'>
		    $(document).ready(function() {
		       swal({
		            title: 'Result Failed to Upload',
		            text: 'You have failed to upload the result!',
		            type: 'error',
		            timer: 3000
		          }, function(){
		                window.location.href = 'enter-lab-results-doctor.php';
		          });
		        });
		    </script>";
	}
}




?>