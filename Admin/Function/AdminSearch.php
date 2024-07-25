<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `appointments` WHERE appointment_id LIKE '%$valueToSearch%' OR appointment_status LIKE '%$valueToSearch%' ";
    $search_result = filterTable($query);    
}
else 
{
    $query = "SELECT * FROM appointments WHERE appointment_status='Approve' OR appointment_status='Booked' OR appointment_status='Rejected' ORDER BY date DESC ";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    include 'Function/db.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
?>

