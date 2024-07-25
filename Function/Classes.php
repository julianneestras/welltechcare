<?php
session_start();
ob_start();
?>

<?php 
// Class for Registration
class WellTechRegistration
{

	public function WellTech_InsertUser($First_Name, $Middle_Name, $Last_Name, $Birthdate, $Age, $Height, $Weight, $Gender, $BloodType, $Address, $ContactNo, $Email, $VCode, $Username, $Password, $Patient_Picture)
	{
		include ('db.php');
		$Select_Username = "SELECT Username FROM patient_account WHERE Username='$Username'";
		$Username_Result = mysqli_query($conn,$Select_Username);

		if((mysqli_num_rows($Username_Result))>0) 
		{
			echo "<center><h3><script>alert('Sorry. This username is already registered !!');</script></h3></center>";
		}
		else
		{



		$WellTech_InsertUser  = "INSERT INTO patient_account"."(First_Name, Middle_Name, Last_Name, Birthdate, Age, Height, Weight, Gender, BloodType, Address, ContactNo, Email, VCode, Username, Password, Patient_Picture)" . "VALUES('$First_Name', '$Middle_Name', '$Last_Name', '$Birthdate', '$Age' , '$Height', '$Weight', '$Gender', '$BloodType', '$Address', '$ContactNo', '$Email', '$VCode', '$Username', '$Password','$Patient_Picture')";

		mysqli_select_db($conn, 'welltechcare');

		if ($_POST["Password"] === $_POST['ConPassword'])
               {
                    $retval = mysqli_query( $conn, $WellTech_InsertUser);


                          if(! $retval) 
                               {
                                    die('Could not enter data: ' . mysqli_error($conn));
                               }
                    return $WellTech_InsertUser; 
                    mysqli_close($conn);
               }
               else
               {
                echo "<script>alert('Please input matching passwords!!');</script>";
                header("refresh:0;url=../Patient/login-patient.php");
               }           
		}
	}
}
?>

