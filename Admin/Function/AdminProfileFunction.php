<?php 
include ('db.php');

?>

<?php 
$admin_username = $_COOKIE['AdminUsername'];
$Get_Admin_Info = mysqli_query($conn,"SELECT * FROM admin_account") or die("Error Connecting in database");

if (mysqli_num_rows($Get_Admin_Info)>0) 
	while ($row=mysqli_fetch_array($Get_Admin_Info))
	{
		$admin_firstname = $row["admin_firstname"];
		$admin_gender = $row["admin_gender"];
		$admin_age = $row["admin_age"];
		$admin_birthdate = $row["admin_birthdate"];
		$admin_email = $row["admin_email"];
		$admin_contactno = $row["admin_contactno"];
		$admin_username = $row["admin_username"];
		//$admin_profile = $row["admin_profile"];
	}
		$Get_Data = $conn->prepare('SELECT * FROM admin_account');
        $Get_Data->execute();
        $Data_Results = $Get_Data->get_result();
        while ($row = $Data_Results->fetch_assoc())
        {
        		$admin_picture = $row["admin_picture"];
        }


?>