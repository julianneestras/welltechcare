<?php  
include('db.php');
?>

<?php 
function ResultID($l=5)
{
	return substr(str_shuffle("0123456789"), 0, $l);
}
?>



