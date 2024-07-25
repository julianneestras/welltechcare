<!-- Insertion of Doctor's Information -->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php  
include('db.php');
include('AddDoctorClass.php');
include('AddDoctorValidations.php');
$WellTechAddDoctor = new WellTechAddDoctor ();
//Getting the Data

if (isset($_POST['AddDoctor'])) 
{
	$doctor_id = $_POST['doctor_id'];
	$doctor_firstname = $_POST['doctor_firstname'];
	$doctor_middleinitial = $_POST['doctor_middleinitial'];
	$doctor_lastname = $_POST['doctor_lastname'];
	$doctor_age = $_POST['doctor_age'];
	$doctor_birthdate = $_POST['doctor_birthdate'];
	$doctor_profession = $_POST['doctor_profession'];
	$doctor_gender = $_POST['doctor_gender'];
	$doctor_dayschedule = $_POST['doctor_dayschedule'];

	$doctor_dayschedule = implode(', ' ,$doctor_dayschedule);

	$doctor_timeschedule = $_POST['doctor_timeschedule'];

	$doctor_timeschedule = implode(', ' ,$doctor_timeschedule);
	$doctor_email = $_POST['doctor_email'];
	$doctor_contactno = $_POST['doctor_contactno'];
	$doctor_username = $_POST['doctor_username'];
	$doctor_password = $_POST['doctor_password'];
	$doctor_passwordHash = md5($doctor_password);
	$Doctor_Image = $_FILES['image']['name'];
    $type = $_FILES['image']['type'];
    $data = addslashes(file_get_contents($_FILES['image']['tmp_name']));



   // Validations in input data in doctor
	// First Name
	$doctor_firstname_Numeric = preg_match('@[0-9]@', $doctor_firstname);
	$doctor_firstname_SpecialCharac = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $doctor_firstname);
	// Middle Initial
	$doctor_middleinitial_Numeric = preg_match('@[0-9]@', $doctor_middleinitial);
	$doctor_middleinitial_SpecialCharac = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $doctor_middleinitial);
	// Last Name
	$doctor_lastname_Numeric = preg_match('@[0-9]@', $doctor_lastname);
	$doctor_lastname_SpecialCharac = preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $doctor_lastname);

	// // Validations for Password
	// $doctor_password_Uppercase = preg_match('@[A-Z]@', $doctor_password);
	// $doctor_password_Lowercase = preg_match('@[a-z]@', $doctor_password);
	// $doctor_password_Numeric = preg_match('@[0-9]@', $doctor_password);
	// $doctor_password_SpecialCharac = preg_match('@[^\w]@', $doctor_password);

	if (strlen($doctor_firstname)<2) 
		{
			$error_doctorfirstname_length  = '<label class ="text-danger">Enter a correct First Name</label>';
		}
		elseif (strlen($doctor_middleinitial)>1) 
		{
			$error_doctormiddleinitial_length = '<label class ="text-danger"> Enter a correct Middle Name </label>';
		}
		elseif (strlen($doctor_lastname)<2) 
		{
			$error_doctorlastname_length = '<label class ="text-danger">Enter a correct Last Name</label>';
		}
		elseif ($doctor_firstname_Numeric) 
		{
			$error_doctorfirstname_numeric = '<label class ="text-danger"> First Name must not contain any numbers. />';
		}
		elseif ($doctor_middleinitial_Numeric) 
		{
			$error_doctormiddleinitial_numeric = '<label class ="text-danger"> Middle Name must not contain any numberss. />';
		}
		elseif ($doctor_lastname_Numeric) 
		{
			$error_doctorlastname_numeric = '<label class ="text-danger"> Last Name must not contain any numbers. </label>';
		}
		elseif ($doctor_firstname_SpecialCharac) 
		{
			$error_doctorfirstname_specialcharac = '<label class ="text-danger"> First Name must not contain any special characters. </label>';
		}
		elseif ($doctor_middleinitial_Numeric) 
		{
			$error_doctormiddleinitial_specialcharac = '<label class ="text-danger">Middle Name must not contain any special characters </label>';
		}
		elseif ($doctor_lastname_SpecialCharac) 
		{
			$error_doctorlastname_specialcharac = '<label class = "text-danger"> Last Name must not contain any special characters. </label>';
		}
		else
		{

			$WellTechInsertDoctor = $WellTechAddDoctor -> WellTechInsertDoctor($_POST['doctor_id'],$_POST['doctor_firstname'], $_POST['doctor_middleinitial'], $_POST['doctor_lastname'], $_POST['doctor_age'], $_POST['doctor_birthdate'], $_POST['doctor_profession'], $_POST['doctor_gender'], $doctor_dayschedule, $doctor_timeschedule, $_POST['doctor_email'], $_POST['doctor_contactno'], $_POST['doctor_username'], $doctor_passwordHash, $data);

			if ($WellTechInsertDoctor) 
			{

				echo '<script type="text/javascript">
    $(document).ready(function() {
       swal({
            title: "Doctor Added Successfully!",
            text: "You have succesfully add a doctor!",
            type: "success",
            timer: 3000
          }, function(){
                window.location.href = "../Admin/manage-doctors-admin.php";
          });
        });
    </script>';
			}
		
		else
		{
			echo "<script>alert('Adding of Doctor is not Successful');</script>";  
            header('refresh:0;url=index.php');
		}
	}

    		// $WellTechInsertDoctor = $WellTechAddDoctor -> WellTechInsertDoctor($_POST['doctor_id'],$_POST['doctor_firstname'], $_POST['doctor_middleinitial'], $_POST['doctor_lastname'], $_POST['doctor_age'], $_POST['doctor_birthdate'], $_POST['doctor_profession'], $_POST['doctor_gender'], $doctor_dayschedule, $doctor_timeschedule, $_POST['doctor_email'], $_POST['doctor_contactno'], $_POST['doctor_username'], $doctor_passwordHash, $data);

			// if ($WellTechInsertDoctor) 
			// {

			// 	echo '<script type="text/javascript">
         //                    $(document).ready(function() {
         //                       swal({
         //                            title: "Added Successfully!",
         //                            text: "Doctor Added Successfully.",
         //                            type: "success",
         //                            timer: 5000
         //                          });
         //                        });
         //                </script>';
			// }
			// else
			// {
			// 	echo '<script type="text/javascript">
            //                 $(document).ready(function() {
            //                    swal({
            //                         title: "Adding was not Successful!",
            //                         text: "Add Doctor not Successful.",
            //                         type: "error",
            //                         timer: 5000
            //                       });
            //                     });
            //             </script>';
			// }
		}

	




?>

