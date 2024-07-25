<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php  
include ('db.php');
if (isset($_GET['Appointment-ID'])) 
   {
      $appointment_id = $_GET['Appointment-ID'];
      $Delete_Profile = "DELETE FROM appointments WHERE appointment_id='$appointment_id'";
      $retval = mysqli_query($conn,$Delete_Profile);   
      if ($retval) 
      {
        echo "<script type='text/javascript'>
    $(document).ready(function() {
       swal({
            title: 'Appointment Deleted',
            text: 'User Profile Update Successful',
            type: 'success',
            showConfirmButton: true
          }, function(){
                window.location.href = '../manage-appointments-admin.php';
          });
        });
    </script>";
      }
    }
      

?>
