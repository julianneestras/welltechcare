<?php
if(isset($_POST['search']))
{
    $DoctorSN = $_POST['DoctorSN'];
    $DoctorFN = $_POST['DoctorFN'];
    $DocSched = $_POST['DocSched'];
    $DocTime = $_POST['DocTime'];
    $query = "SELECT * FROM `doctor_account` WHERE doctor_firstname LIKE '%$DoctorFN%' AND doctor_lastname LIKE '%$DoctorSN%' AND doctor_dayschedule LIKE '%$DocSched%' OR doctor_timeschedule LIKE '%$DocTime%'";
    $search_result = filterTable($query);    
}
elseif (isset($_POST['ClrBtn'])) 
{
   $query = "SELECT * FROM doctor_account";
    $search_result = filterTable($query);
}
else  
{
    $query = "SELECT * FROM doctor_account";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    include 'Function/db.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
?>

