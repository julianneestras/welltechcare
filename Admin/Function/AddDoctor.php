<?php  
include('db.php');
?>

<?php 
function DoctorID($l=4)
{
	return substr(str_shuffle("0123456789"), 0, $l);
}
?>



