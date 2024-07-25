<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php 
include("Function/db.php");
include("Function/Validations.php");

if (isset($_POST['verify'])) 
{
	$Email = $_POST['Email'];

	$Get_Email = "SELECT Email FROM patient_account WHERE Email='$Email'";
	$Email_Result = mysqli_query($conn,$Get_Email);

	$First_Name = $_POST['First_Name'];
	$Middle_Name = $_POST['Middle_Name'];
	$Last_Name = $_POST['Last_Name'];
	// $Username = $_POST['Username'];
	// $Password = $_POST['Password'];

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
	// $Password_Uppercase = preg_match('@[A-Z]@', $Password);
	// $Password_Lowercase = preg_match('@[a-z]@', $Password);
	// $Password_Number = preg_match('@[0-9]@', $Password);
	// $Password_SpecialCharac =  preg_match('@[^\w]@', $Password);

	//Sending Email

	$to_patient = $_POST['Email'];
	$V_Code = rand(1000000,9999999);

	$_SESSION['V_Code'] = $V_Code;
	$NameofPatient = $_POST['First_Name'];
	$From = "welltechcare@gmail.com";
	$FromComp = "welltechcare@gmail.com";
	$Email = $_POST['Email'];
	$Subject_ofthe_Email = "Verification Code for " .$NameofPatient;

	$EmailMessage = '
	<html> 
    <head> 
    </head> 
    <body> 
        <h1>Your OTP Verification Code</h1> 
        <p>Hi!, '.$NameofPatient.'! <br><br>

        Here is the confirmation code for your registration form: <br><br>

        Your Verification Code is: '.$V_Code.' <br><br>

        All you have to do is copy the confirmation code and paste it to the form to complete the email verification process.

        <br>
        WellTech Care
        </p>

    
        
    </body> 
    </html>'; 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    $headers .= 'From: '.$From.'<'.$FromComp.'>' . "\r\n";  


    if (mysqli_num_rows($Email_Result)>0)
    {
    	$SameEmail ='<script type="text/javascript">
                            $(document).ready(function() {
                               swal({
                                    title: "Verification Failed!",
                                    text: "Email is already registered!",
                                    type: "error",
                                    timer: 5000
                                  });
                                });
                            </script>';
        echo $SameEmail;
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
			$error_FirstName_Numeric = '<label style="color:red"> First Name must not contain any numbers. </label>';
		}
		elseif ($Middle_Name_Numeric) 
		{
			$error_MiddleName_Numeric = '<label style="color:red"> Middle Name must not contain any numbers. </label>';
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
		else
		{
			if(mail($to_patient, $Subject_ofthe_Email, $EmailMessage, $headers))
			{
				$emailsent ='<script type="text/javascript">
                            $(document).ready(function() {
                               swal({
                                    title: "Email Sent!",
                                    text: "Kindly check your email inbox for the verification code.",
                                    type: "success",
                                    timer: 5000
                                  });
                                });
                            </script>';;
              echo $emailsent;
			}
			else
			{
				$emailfailed ='<script type="text/javascript">
                            $(document).ready(function() {
                               swal({
                                    title: "Email not Sent!",
                                    text: "An error occurred in sending an email!",
                                    type: "error",
                                    timer: 5000
                                  });
                                });
                            </script>';
                echo $emailfailed;
			}
		}
}



?>