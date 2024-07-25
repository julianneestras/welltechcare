<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
include ('Function/db.php');
if (isset($_POST['Approve'])) 
{
  $appointment_id = $_POST['appointment_id'];
  $Patient_ID = $_POST['Patient_ID'];
  $PatientName = $_POST['PatientName'];
  $First_Name = $_POST['First_Name'];
  $doctor_name = $_POST['doctor_name'];
  $appointment_datetime = $_POST['appointment_datetime'];
  $appointment_reason = $_POST['appointment_reason'];
  $Email = $_POST['Email'];
  $decision_date = $_POST['decision_date'];
  $appointment_status = "Approve";


$to=$Email;
$link="<a href='http://localhost/WellTech Care PME System/Admin/login-admin.php'>Login Now</a>";

$from = "welltechcare@gmail.com";  
$fromName = "welltechcare@gmail.com";  
 
$subject = "APPOINTMENT CONFIRMED"; 
 


$topatient = ' 
   <html> 
    <head> 
     <link rel="icon" href="img/logo.png" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" href="index-splash-design.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <style>
      @import url("http://fonts.cdnfonts.com/css/amiko");
        @import url("http://fonts.cdnfonts.com/css/poppins");
        @import url("http://fonts.cdnfonts.com/css/readiness");
      </style>
    </head> 
    <body> 
    <center>
           <table width="90%" cellpadding="30" cellspacing="0" border="0" style="background-color: #F9FAFB">
            <tr>
            <td>
            <center>
            <table cellspacing="0" cellpadding="40" style="border: 0px solid; width: 70%; background-color: white">
            <tr>
            <h1>We cannot wait to see you!</h1> 
            <p>
            <h3>
              Good day, '.$First_Name.' </h3><br>

              <h4>The purpose of this email is to let you know that your appointment request has been granted, and our doctor will be waiting for you on the specified date and time as long as you show the appointment ID that can be found in this email.</h4>
            </p>
            <tr> 
                <td colspan=3 style="font-family: Arial; font-size: 22px; font-weight: bold">
                <p style="font-weight: bold; font-size: 16px">APPOINTMENT NUMBER: '.$appointment_id.' </p>
                    APPOINTMENT SUMMARY <br><br>

                     <font style="font-size: 14px; color: dimgray; margin-left: 50px">
                        Patient Name: '.$PatientName.' <br>
                    </font>

                    <font style="font-size: 14px; color: dimgray; margin-left: 50px">
                        Patient Concern: '.$appointment_reason.' <br>
                    </font>
                      <hr>
                     <font style="font-size: 14px; color: dimgray; margin-left: 50px">
                        Doctor Name: '.$doctor_name.'<br>
                    </font>
                    <font style="font-size: 14px; color: dimgray; margin-left: 50px">
                        You can come into our clinic in the said date: '.$appointment_datetime.' <br>
                    </font>
                   

                </td>
            </tr> 
            
        </table> 
        </center>

        <br><br>
        
            Email our customer service department at  <a href = "mailto:jncclinicoffice@gmail.com">welltechcare@gmail.com </a>if you have any inquiries about your appointment.
            <br>
              WellTech Care Clinic
        
                </td>
            </tr>
           </table>
    </center>
    </body> 
    </html>'; 



// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$fromName.'>' . "\r\n"; 
 
// Send email
if(mail($to, $subject, $topatient, $headers))
{ 
    $query = "UPDATE appointments SET appointment_status='$appointment_status', decision_date='$decision_date' WHERE appointment_id='$appointment_id'";  
    $query_run = mysqli_query($conn, $query);
    if ($query_run) 
    {
        echo "<script type='text/javascript'>
        $(document).ready(function() {
           swal({
                title: 'Appointment Approval Email Sent!',
                text: 'An email sent to the patient in regards of his/her appointment.',
                type: 'success',
                timer: 10000
              }, function(){
                    window.location.href = 'manage-appointments-admin.php';
              });
            });
        </script>";
    }

     
}else{ 
   echo "<script>alert('Appointment Failed');</script>";
   header('refresh:0;url=confirm-appointment.php'); 
}
}
?>



<?php
include ('Function/db.php');
if (isset($_POST['Reject'])) 
{
  $appointment_id = $_POST['appointment_id'];
  $Patient_ID = $_POST['Patient_ID'];
  $PatientName = $_POST['PatientName'];
  $First_Name = $_POST['First_Name'];
  $doctor_name = $_POST['doctor_name'];
  $appointment_datetime = $_POST['appointment_datetime'];
  $appointment_reason = $_POST['appointment_reason'];
  $Email = $_POST['Email'];
  $decision_date = $_POST['decision_date'];
  $appointment_status = "Rejected";


$to=$Email;
$link="<a href='http://localhost/WellTech Care PME System/Admin/login-admin.php'>Login Now</a>";

$from = "welltechcare@gmail.com";  
$fromName = "welltechcare@gmail.com";  
 
$subject = "APPOINTMENT REJECTED"; 
 


$topatient = ' 
   <html> 
    <head> 
     <link rel="icon" href="img/logo.png" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" href="index-splash-design.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <style>
      @import url("http://fonts.cdnfonts.com/css/amiko");
        @import url("http://fonts.cdnfonts.com/css/poppins");
        @import url("http://fonts.cdnfonts.com/css/readiness");
      </style>
    </head> 
    <body> 
    <center>
           <table width="90%" cellpadding="30" cellspacing="0" border="0" style="background-color: #F9FAFB">
            <tr>
            <td>
            <center>
            <table cellspacing="0" cellpadding="40" style="border: 0px solid; width: 70%; background-color: white">
            <tr>
            <h1>Apologies for any inconvenience.!</h1> 
            <p>
            <h3>
              Good day, '.$First_Name.' </h3><br>

              <h4>This email informs you that the appointment you had scheduled with appointment ID: <b>'.$appointment_id.'</b> has been canceled because your preferred doctor will be working on his or her own schedule. You could attempt to see a different doctor on a different date. We apologize for this inconvenience we caused. Thank you for your patience.</h4>
            </p>
        <br><br>
            
            Email our customer service department at  <a href = "mailto:jncclinicoffice@gmail.com">welltechcare@gmail.com </a>if you have any inquiries about your appointment.
            <br>
              WellTech Care Clinic
        
                </td>
            </tr>
           </table>
    </center>
    </body> 
    </html>'; 



// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$fromName.'>' . "\r\n"; 
 
// Send email
if(mail($to, $subject, $topatient, $headers))
{ 
    $query = "UPDATE appointments SET appointment_status='$appointment_status', decision_date='$decision_date' WHERE appointment_id='$appointment_id'";  
    $query_run = mysqli_query($conn, $query);
    if ($query_run) 
    {
        echo "<script type='text/javascript'>
        $(document).ready(function() {
           swal({
                title: 'Appointment Rejection Email Sent!',
                text: 'An email sent to the patient in regards of his/her appointment.',
                type: 'error',
                timer: 10000
              }, function(){
                    window.location.href = 'manage-appointments-admin.php';
              });
            });
        </script>";
    }
}else{ 
   echo "<script>alert('Appointment Failed');</script>";
   header('refresh:0;url=confirm-appointment.php'); 
}
}
?>

