<?php 
include ('db.php');
?>

<?php 
    if (isset($_GET['Patient-ID']) && ($_GET['Appointment-ID']))
    {
       	$Patient_ID = $_GET['Patient-ID'];
       	$appointment_id = $_GET['Appointment-ID'];


    }         
    $sql = "SELECT * FROM result WHERE Patient_ID='$Patient_ID' AND appointment_id='$appointment_id' AND appointment_status='Result Uploaded'";
    $row = mysqli_fetch_assoc($conn->query($sql));

        $Result_ID = $row["Result_ID"];
        $Patient_ID = $row["Patient_ID"];
        $appointment_id = $row["appointment_id"];
        $Result_Uploaded = $row["Result_Uploaded"];
        $doctor_name = $row["doctor_name"];
        $First_Name = $row["First_Name"];
        $Middle_Name = $row["Middle_Name"];
        $Last_Name = $row["Last_Name"];
        $Age = $row["Age"];
        $Address = $row["Address"];
        $Birthdate = $row["Birthdate"];
        $Height = $row["Height"];
        $Weight = $row["Weight"];
        $Gender = $row["Gender"];
        $Email = $row["Email"];
        $BloodType = $row["BloodType"];
        // Results
        $Patient_HeartRate = $row["Patient_HeartRate"];
        $Patient_BloodPressure = $row["Patient_BloodPressure"];    
        $Patient_Urinalysis = $row["Patient_Urinalysis"];
        $Patient_Xray = $row["Patient_Xray"];
        $Patient_RBC = $row["Patient_RBC"];
        $Patient_WBC = $row["Patient_WBC"];
        $Patient_Platelet = $row["Patient_Platelet"];
        $Patient_Hemoglobin = $row["Patient_Hemoglobin"];
        $Patient_Hematocrit = $row["Patient_Hematocrit"];     
?>

