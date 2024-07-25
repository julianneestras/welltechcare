<!-- sa pagination to -->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
error_reporting(0);
ini_set('display_errors', 0);
include ('db.php');


  if (isset($_POST['UpdateDoctorProfile'])) 
  {

    $doctor_id = $_POST['doctor_id'];
     $doctor_email = trim($_POST['doctor_email']);
    $doctor_contactno = trim($_POST['doctor_contactno']);
    $doctor_username = trim($_POST['doctor_username']);

    

    if(empty($doctor_email) || empty($doctor_contactno) || empty($doctor_username))
    {      
     echo "<script type='text/javascript'>
    $(document).ready(function() {
       swal({
            title: 'User Profile Update not Successful',
            text: 'Please complete all the details!',
            type: 'error',
            showConfirmButton: true
          }, function(){
                window.location.href = 'manage-doctors-all-doctors-admin.php';
          });
        });
    </script>";   
    }
    else
    {

      $Update_Profile = "UPDATE doctor_account SET doctor_email='$doctor_email', doctor_contactno='$doctor_contactno', 
      doctor_username='$doctor_username'WHERE doctor_id='$doctor_id'";
      $retval = mysqli_query( $conn,$Update_Profile);   
      if ($retval) 
      {
        echo "<script type='text/javascript'>
    $(document).ready(function() {
       swal({
            title: 'Update Successful',
            text: 'User Profile Update Successful',
            type: 'success',
            showConfirmButton: true
          }, function(){
                 window.location.href = 'manage-doctors-all-doctors-admin.php';
          });
        });
    </script>";
      }
      else{
        echo "<script>alert('User Profile Not Updated.');</script>";
          header("refresh:0;url=manage-doctors-all-doctors-admin.php");
      }
    }
    
  }

?>
<?php
error_reporting(0);
ini_set('display_errors', 0);
include ('db.php');


  if (isset($_POST['DeleteDoctorProfile'])) 
  {
    $doctor_id = $_POST['doctor_id'];
    $Delete_Profile = "DELETE FROM doctor_account WHERE doctor_id='$doctor_id'";
      $retval = mysqli_query( $conn,$Delete_Profile);   
      if ($retval) 
      {
        echo "<script type='text/javascript'>
    $(document).ready(function() {
       swal({
            title: 'Profile Deleted',
            text: 'User Profile Update Successful',
            type: 'success',
            showConfirmButton: true
          }, function(){
                window.location.href = 'manage-doctors-all-doctors-admin.php';
          });
        });
    </script>";
      }
      else
      {
        echo "<script>alert('User Profile Not Updated.');</script>";
          header("refresh:0;url=manage-doctors-all-doctors-admin.php");
      }
  }
  

