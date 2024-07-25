<?php
if(isset($_POST['searchdoctor']))
{
    $valueToSearch = $_POST['valueToSearchdoctor'];
    $query = "SELECT * FROM `doctor_account` WHERE doctor_id LIKE '%$valueToSearch%'";
    $search_result = filterTableDoctor($query);    
}
else 
{
    $query = "SELECT * FROM doctor_account";
    $search_result = filterTableDoctor($query);
}
function filterTableDoctor($query)
{
    include 'Function/db.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
?>