
<!--Insertion of Information-->


<!--Getting the Data with Validations and Verification Code-->
<?php
include("Function/db.php");
include("Function/Classes.php");
include("Function/Validations.php");
include("Function/Verification.php");
$WellTechRegistration =  new WellTechRegistration ();
//Getting the Input Data
if(isset($_POST['register']))
{
	$V_Code = $_SESSION['V_Code'];
	$Email = $_POST['Email'];
	$VCode = $_POST['VCode'];
	$First_Name = $_POST['First_Name'];
	$Middle_Name = $_POST['Middle_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$PasswordHash = md5($Password); 
	$Image_Data = addslashes(file_get_contents('https://www.kindpng.com/picc/m/269-2697881_computer-icons-user-clip-art-transparent-png-icon.png'));
	// $Patient_Image = $_FILES['image']['name'];
    // $type = $_FILES['image']['type'];
    // $data = addslashes(file_get_contents($_FILES['image']['tmp_name']));

	//Validations in input data
	//First Name
	$First_Name_Numeric = preg_match('@[0-9]@', $First_Name);
	$First_Name_SpecialCharac = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $First_Name);
	//Middle Name
	$Middle_Name_Numeric = preg_match('@[0-9]@', $Middle_Name);
	$Middle_Name_SpecialCharac = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $Middle_Name);
	//Last Name
	$Last_Name_Numeric = preg_match('@[0-9]@', $Last_Name);
	$Last_Name_SpecialCharac = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $Last_Name);
	//Username
	//$Username_Length = preg_match('@[0-9]@', $Username);

	//Password
	$Password_Uppercase = preg_match('@[A-Z]@', $Password);
	$Password_Lowercase = preg_match('@[a-z]@', $Password);
	$Password_Number = preg_match('@[0-9]@', $Password);
	$Password_SpecialCharac =  preg_match('@[^\w]@', $Password);

		if ($V_Code != $VCode)
		{
			$error_VCode = '<label class="text-danger"> Enter the Correct Verification Code / OTP Code </label>';
		}
		elseif (strlen($First_Name)<2) 
		{
			$error_FirstName_Length = '<label style="color:red">Enter a correct First Name</label>';
		}
		elseif (strlen($Middle_Name)<2) 
		{
			$error_MiddleName_Length = '<label style="color:red"> Enter a correct Middle Name </label>';
		}
		elseif (strlen($Last_Name)<2) 
		{
			$error_LastName_Length = '<label style="color:red">Enter a correct Last Name</label>';
		}
		elseif ($First_Name_Numeric) 
		{
			$error_FirstName_Numeric = '<label style="color:red"> First Name must not contain any numbers. />';
		}
		elseif ($Middle_Name_Numeric) 
		{
			$error_MiddleName_Numeric = '<label style="color:red"> Middle Name must not contain any numberss. />';
		}
		elseif ($Last_Name_Numeric) 
		{
			$error_LastName_Numeric = '<label style="color:red"> Last Name must not contain any numbers. </label>';
		}
		elseif ($First_Name_SpecialCharac) 
		{
			$error_FirstName_Speccharac = '<label style="color:red"> First Name must not contain any special characters. </label>';
		}
		elseif ($Middle_Name_SpecialCharac) 
		{
			$error_MiddleName_Speccharac = '<label style="color:red">Middle Name must not contain any special characters </label>';
		}
		elseif ($Last_Name_SpecialCharac) 
		{
			$error_LastName_Speccharac = '<label style="color:red"> Last Name must not contain any special characters. </label>';
		}
		elseif ((!$Password_Uppercase) || (!$Password_Lowercase) || (!$Password_Number) || (!$Password_SpecialCharac) || (strlen($Password) <8))
		{
			$error_Password = '<label style="color:red">There must be at least 8 characters in the password, with at least 1 lowercase, 1 uppercase, 1 numeric, and 1 special character in the format (!@#$%&*).</label>';
		}
		elseif(($V_Code == $VCode) 
			|| (strlen($First_Name)>2 || 
			 (strlen($Middle_Name)>2 ||
			 (strlen($Last_Name)>2 ||
			($First_Name_Numeric)||
			($First_Name_SpecialCharac)||
			 ($Middle_Name_Numeric)||
			($Middle_Name_SpecialCharac)||
			($Last_Name_Numeric)||
			($Last_Name_SpecialCharac)||
			($Password_Uppercase)||
			 ($Password_Lowercase)||
			($Password_Number)||
			($Password_SpecialCharac)||
			(strlen($Password)>8 ||
			(!empty($Username)||
			 (!empty($Password)||
			 (!empty($ConPassword)

	))))))))
		{
			$WellTech_InsertUser = $WellTechRegistration -> WellTech_InsertUser ($_POST['First_Name'], $_POST['Middle_Name'], 
				$_POST['Last_Name'], $_POST['Birthdate'], $_POST['Age'], $_POST['Height'], $_POST['Weight'], $_POST['Gender'], 
				$_POST['BloodType'], $_POST['Address'], $_POST['ContactNo'], $_POST['Email'], $_POST['VCode'], 
				$_POST['Username'], $PasswordHash, $Image_Data);

				if ($WellTech_InsertUser)
				{
					echo "<script>alert('Registration Successful');</script>";  
                 	header('refresh:0;url=index.php');
				}
				else
				{
					echo "<script>alert('Registration is not Successful');</script>";  
                 	header('refresh:0;url=index.php');
				}
		}
		elseif (empty($Username))
		{
			$error_Username = '<label class="text-danger">Please input username.</label>';
		}
		elseif (empty($Password))
		{
			$error_NoPass = '<label class="text-danger">Please input password.</label>';
		}
		elseif (empty($ConPassword))
		{
			$error_NoConfirmationPass = '<label class="text-danger">Please input Confirmation Password.</label>';
		}
		else
			{
				echo "<script>alert('Registration is not Successful');</script>";  
                header('refresh:0;url=index.php');
			}


}

?>

