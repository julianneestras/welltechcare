<?php
if(isset($_POST['Search']))
{
    $SearchHistory = $_POST['SearchHistory'];
    $query = "SELECT * FROM `appointments` WHERE Patient_ID='$Patient_ID' AND doctor_firstname LIKE '%$SearchHistory%' OR date LIKE '%$SearchHistory%'";
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
    $query = "SELECT * FROM appointments WHERE Patient_ID='$Patient_ID'";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    include 'Function/db.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
?>

