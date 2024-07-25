<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php

include ('db.php');
  if (isset($_POST['UpdateAdminProfile'])) {
    $Admin_Image = $_FILES['Admin_Image']['name'];
    $Image_Type = $_FILES['Admin_Image']['type'];
    $Image_Data = addslashes(file_get_contents($_FILES['Admin_Image']['tmp_name']));   
    $Update_Profile = "UPDATE admin_account SET admin_picture ='$Image_Data' WHERE `admin_account`.`admin_username` = '$admin_username'";
    $retval = mysqli_query( $conn,$Update_Profile );   
    if ($retval) 
    {
      echo "<script type='text/javascript'>
    $(document).ready(function() {
       swal({
            title: 'Update Successful',
            text: 'Admin Profile Update Successful',
            type: 'success',
            showConfirmButton: true
          }, function(){
                window.location.href = 'user-profile-admin.php';
          });
        });
    </script>";
    	
    }
    else{
    	 echo "<script type='text/javascript'>
    $(document).ready(function() {
       swal({
            title: 'Update is not Successful',
            text: 'Admin Profile Fails to Update',
            type: 'success',
            showConfirmButton: true
          }, function(){
                window.location.href = 'user-profile-admin.php';
          });
        });
    </script>";
    }
        
  }
  
?>