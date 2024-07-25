<?php
if(isset($_POST['search']))
{
    $valueToSearch = trim($_POST['SearchHistory']);
    $query = "SELECT * FROM `appointments` WHERE appointment_status LIKE '%$valueToSearch%' ";
    $search_result = filterTable($query);    
}
else 
{
    $query = "SELECT * FROM appointments WHERE appointment_status='Result Sent' OR appointment_status='Result Uploaded'";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    include 'Function/db.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
?>

