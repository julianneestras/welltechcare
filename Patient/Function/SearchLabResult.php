<?php
if(isset($_POST['Search_Result']))
{
    $whatResult = $_POST['valueToSearch'];
    $query = "SELECT * FROM `appointments` WHERE appointment_reason LIKE '%$whatResult%'";
    $search_result = filterTable($query);    
}

else 
{
    $Patient_ID = $_COOKIE['PatientUsername'];
    $FindPatientID = mysqli_query($conn,"SELECT * FROM patient_account WHERE Username='$Username'")or die('Error Connecting in database');
    while($row=mysqli_fetch_array($FindPatientID))
    {
        $Patient_ID= $row["Patient_ID"];
    }
    $Patient_ID = $Patient_ID;
    $query = "SELECT * FROM appointments WHERE appointment_status='Result Sent' AND Patient_ID='$Patient_ID'";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    include 'Function/db.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
?>

