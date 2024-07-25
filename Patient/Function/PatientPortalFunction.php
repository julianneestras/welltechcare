<?php 
include ('db.php');

$Username = $_COOKIE['PatientUsername'];
$Get_Info = mysqli_query($conn,"SELECT * FROM patient_account WHERE Username='$Username'")or die('Error Connecting in database');

if (mysqli_num_rows($Get_Info)>0) 
	while($row=mysqli_fetch_array($Get_Info))
	{
		$Patient_ID= $row["Patient_ID"];
		$First_Name = $row["First_Name"];
		$Middle_Name = $row["Middle_Name"];
		$Last_Name = $row["Last_Name"];
		$Birthdate = $row["Birthdate"];
		$Age = $row["Age"];
		$Height = $row["Height"];
		$Weight = $row["Weight"];
		$Gender = $row["Gender"];
		$BloodType = $row["BloodType"];
		$Address = $row["Address"];
		$ContactNo = $row["ContactNo"];
		$Email = $row["Email"];
		$Username = $row["Username"];
		$Password = $row["Password"];

	}
        $Get_Data = $conn->prepare("SELECT * FROM patient_account WHERE Username='$Username'");
        $Get_Data->execute();
        $Data_Results = $Get_Data->get_result();
        while ($row = $Data_Results->fetch_assoc())
        {
        		$Patient_Picture = $row["Patient_Picture"];
        }
        // Patient_Picture = name nung column na kukuhanan nyo

	
?>

<?php  
include('db.php');
?>

<?php 
function AppointmentID($l=4)
{
	return substr(str_shuffle("0123456789"), 0, $l);
}
?>