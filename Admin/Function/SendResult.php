<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php 
include("Function/db.php");

if (isset($_POST['SendResult'])) 
{
	$Email = $_POST['Email'];
	$First_Name = $_POST['First_Name'];
	$Middle_Name = $_POST['Middle_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Result_ID = $_POST['Result_ID'];
	$appointment_id = $_POST['appointment_id'];
	$appointment_status = "Result Sent";
	$completed_date = $_POST['completed_date'];

	//Sending Email
	$to_patient = $_POST['Email'];
	$NameofPatient = $_POST['First_Name'];
	$From = "welltechcare@gmail.com";
	$FromComp = "welltechcare@gmail.com";
	$Email = $_POST['Email'];
	$Subject_ofthe_Email = " Your results are up for viewing " .$NameofPatient. "!";

	$EmailMessage = '
	<html> 
    <head> 
    </head> 
    <body> 
        <h1>Good Day, '.$NameofPatient.'!</h1> 
        <p>

        We are happy to inform you that your results from your Physical Medical Examination (PME), with the result ID of <b>'.$Result_ID.'</b> and appointment number of <b>'.$appointment_id.'</b> , have been uploaded to your designated account. To access your account, please enter the username and password you provided at registration.


        <br>
        WellTech Care
        </p>

    
        
    </body> 
    </html>'; 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    $headers .= 'From: '.$From.'<'.$FromComp.'>' . "\r\n";  


    if(mail($to_patient, $Subject_ofthe_Email, $EmailMessage, $headers))
			{
				$UpdateAppointments = "UPDATE appointments SET appointment_status='$appointment_status', completed_date='$completed_date' WHERE appointment_id='$appointment_id'";  
				$UpdateResult = "UPDATE result SET appointment_status='$appointment_status' WHERE appointment_id='$appointment_id'";
    			$UpdateAppointments_run = mysqli_query($conn, $UpdateAppointments);
    			$UpdateResult_run = mysqli_query($conn, $UpdateResult);
    			if ($UpdateAppointments_run && $UpdateResult_run) 
    			{
    				echo '<script type="text/javascript">
                            $(document).ready(function() {
                               swal({
                                    title: "Email Sent!",
                                    text: "Result successfully uploaded in to the account of the patient.",
                                    type: "success",
                                    timer: 5000
                                  });
                                });
                            </script>';
    			}
			}
			else
			{
				echo '<script type="text/javascript">
                            $(document).ready(function() {
                               swal({
                                    title: "Email not Sent!",
                                    text: "An error occurred in sending an email!",
                                    type: "error",
                                    timer: 5000
                                  });
                                });
                            </script>';
			}
		}