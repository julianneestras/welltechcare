<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php

include ('db.php');
  if (isset($_POST['UpdateDoctorProfile'])) {
    $Doctor_Image = $_FILES['Doctor_Image']['name'];
    $Image_Type = $_FILES['Doctor_Image']['type'];
    $Image_Data = addslashes(file_get_contents($_FILES['Doctor_Image']['tmp_name']));   
    $Update_Profile = "UPDATE doctor_account SET doctor_image='$Image_Data' WHERE doctor_email='$doctor_email'";
    $retval = mysqli_query( $conn,$Update_Profile);   
    if ($retval) 
    {
      echo "<script type='text/javascript'>
        $(document).ready(function() {
           swal({
                title: 'Doctor Profile Successfully Updated',
                text: 'You have succesfully updated your profile!',
                type: 'success',
                timer: 3000
              }, function(){
                    window.location.href = 'user-profile-doctor.php';
              });
            });
        </script>";

    }
    else{
      echo "<script type='text/javascript'>
        $(document).ready(function() {
           swal({
                title: 'Doctor Profile Failed to Updated',
                text: 'You have not succesfully updated your profile!',
                type: 'success',
                timer: 3000
              }, function(){
                    window.location.href = 'user-profile-doctor.php';
              });
            });
        </script>";
    }
  }

  // Patient_Image = input name
  
?>