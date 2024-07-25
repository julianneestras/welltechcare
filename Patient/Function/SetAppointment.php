<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
if (isset($_POST['ChangeDocBtn'])) {
  $stmt = $conn->prepare('DELETE FROM select_doctor');
  $stmt->execute();

   header("Location: schedule-appointment.php");
}
?>


<?php
include ('Function/db.php');
include ('Function/AddApointmentClass.php');
$WellTechAppointment = new WellTechAppointment();
if (isset($_POST['Confirm'])) 
{
  $appointment_id = $_POST['appointment_id'];
  $Patient_ID = $_POST['Patient_ID'];
  $First_Name = $_POST['First_Name'];
  $Middle_Name = $_POST['Middle_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Middle_Name = $_POST['Middle_Name'];
  $Last_Name = $_POST['Last_Name'];
  $doctor_id = $_POST['doctor_id'];
  $doctor_firstname = $_POST['doctor_firstname'];
  $doctor_middleinitial = $_POST['doctor_middleinitial'];
  $doctor_lastname = $_POST['doctor_lastname'];
  $doctor_username = $_POST['doctor_username'];
  $doctor_contactno = $_POST['doctor_contactno'];
  $doctor_email = $_POST['doctor_email'];
  $appointment_date = $_POST['appointment_date'];
  $appointment_time = $_POST['appointment_time'];
  $appointment_reason = $_POST['appointment_reason'];
  $appointment_status = $_POST['appointment_status'];
  $Email = $_POST['Email'];
  $Age = $_POST['Age'];
  $Gender = $_POST['Gender'];

  $WellTechAddAppointment = $WellTechAppointment -> WellTechAddAppointment($_POST['appointment_id'], $_POST['Patient_ID'], $_POST['First_Name'], $_POST['Middle_Name'], $_POST['Last_Name'], $_POST['Age'], $_POST['Gender'],  $_POST['Email'],$_POST['doctor_id'], $_POST['doctor_firstname'], $_POST['doctor_middleinitial'], $_POST['doctor_lastname'], $_POST['doctor_username'], $_POST['doctor_contactno'],$_POST['doctor_email'],$_POST['appointment_date'], $_POST['appointment_time'], $_POST['appointment_reason'], $_POST['appointment_status']);

  if ($WellTechAddAppointment) 
      {
        



$to="jncclinicoffice@gmail.com";
$link="<a href='http://localhost/WellTech Care PME System/Admin/login-admin.php'>Login Now</a>";

$from = $Email;  
$fromName = $Email;  
 
$subject = "SOMEONE BOOKED AN APPOINTMENT"; 
$subject2 = "THANK YOU FOR BOOKING AN APPOINTMENT WITH US!"; 
 
$toadmin = ' 
    <html> 
    <head> 
    </head> 
    <body> 
        <h1>SOMEONE BOOKED AN APPOINTMENT!</h1> 
        <p>Good day, admin!<br><br>

        You have just received an appointment '.$First_Name.' '.$Last_Name.' with Patient No.: <b>'.$Patient_ID.'</b> .
        Process it now by logging into your account faster by clicking '.$link.'. <br><br>

        WellTech Care Clinic Team
        </p>

    </body> 
    </html>'; 

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
            <h1>Thanks for scheduling an appointment to us!</h1> 
            <p>
            <h3>
              Good day, '.$First_Name .' </h3><br>

              <h4>This email is to imform you that we received your appointment schedule.</h4>
            </p>
            <tr> 
                <td colspan=3 style="font-family: Arial; font-size: 22px; font-weight: bold">
                <p style="font-weight: bold; font-size: 16px">APPOINTMENT NUMBER: '.$appointment_id.' </p>
                    APPOINTMENT SUMMARY <br><br>

                     <font style="font-size: 14px; color: dimgray; margin-left: 50px">
                        Patient Name: '.$First_Name.' '.$Middle_Name.' '.$Last_Name.' <br>
                    </font>

                    <font style="font-size: 14px; color: dimgray; margin-left: 50px">
                        Patient Concern: '.$appointment_reason.' <br>
                    </font>
                      <hr>
                     <font style="font-size: 14px; color: dimgray; margin-left: 50px">
                        Doctor Name: Dr. '.$doctor_firstname.' '.$doctor_middleinitial.' '.$doctor_lastname.'<br>
                    </font>
                    <font style="font-size: 14px; color: dimgray; margin-left: 50px">
                        You can come into our clinic in the said date: '.$appointment_date.' at '.$appointment_time.' <br>
                    </font>
                   

                </td>
            </tr> 

             The following has been received by our team. For the confirmation of your appointment, please wait patiently as we process it and we will get back to you soon. 
            
        </table> 
        </center>

        <br><br>
             If you have any questions regarding your order, please email our customer service team at 
             <a href = "mailto:jncclinicoffice@gmail.com">jncclinicoffice@gmail.com.</a> <br>
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
$headers2 = "MIME-Version: 1.0" . "\r\n"; 
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$fromName.'>' . "\r\n"; 
$headers2 .= 'From: '.$to.'<'.$fromName.'>' . "\r\n"; 
 
// Send email
mail($from, $subject2, $topatient, $headers2);
if(mail($to, $subject, $toadmin, $headers)){ 
    $stmt = $conn->prepare('DELETE FROM select_doctor');
    $stmt->execute();

    echo "<script type='text/javascript'>
        $(document).ready(function() {
           swal({
                title: 'Appointment Set',
                text: 'You have succesfully set an appointment!',
                type: 'success',
                timer: 10000
              }, function(){
                    window.location.href = 'patient-portal-home.php';
              });
            });
        </script>";
}else{ 
    echo "<script type='text/javascript'>
        $(document).ready(function() {
           swal({
                title: 'Appointment Not Set',
                text: 'You have not succesfully set an appointment!',
                type: 'error',
                timer: 10000
              }, function(){
                    window.location.href = 'patient-portal-home.php';
              });
            });
        </script>";
}
}
}
  


?>



