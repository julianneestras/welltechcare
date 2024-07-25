<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `appointments` WHERE Patient_ID LIKE '%$valueToSearch%' AND doctor_username='$doctor_username' AND appointment_status='Approve'";
    $search_result = filterTable($query);    
}
else 
{
    $doctor_username = $_COOKIE['DoctorUsername'];
    $query = "SELECT * FROM appointments WHERE doctor_username='$doctor_username' AND `appointment_status` IN ( 'Result Uploaded', 'Approve') ORDER BY date DESC ";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    include 'Function/db.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
?>