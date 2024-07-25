<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
error_reporting(0);
ini_set('display_errors', 0);
include ('db.php');
$Username = $_COOKIE['PatientUsername'];
//String error for Length Validations
$error_FirstName_Length = '';
$error_MiddleName_Length = '';
$error_LastName_Length = '';

//String error if the ff contains numbers
$error_FirstName_Numeric = '';
$error_MiddleName_Numeric ='';
$error_LastName_Numeric = '';

//String error if the ff contains special charac
$error_FirstName_Speccharac = '';
$error_MiddleName_Speccharac = '';
$error_LastName_Speccharac = '';

  if (isset($_POST['UpdatePatientProfile'])) 
  {

    $Patient_Image = $_FILES['Patient_Image']['name'];
    $Image_Type = $_FILES['Patient_Image']['type'];
    $Image_Data = addslashes(file_get_contents($_FILES['Patient_Image']['tmp_name']));   
    $First_Name = trim(ucfirst($_POST['First_Name']));
    $Middle_Name = trim(ucfirst($_POST['Middle_Name']));
    $Last_Name = trim(ucfirst($_POST['Last_Name']));
    $Height = trim($_POST['Height']);
    $Weight = trim($_POST['Weight']);
    $Address = trim($_POST['Address']);
    $ContactNo = trim($_POST['ContactNo']);
    $Username = trim($_POST['Username']);
    

    if(empty($First_Name) || empty($Middle_Name) || empty($Last_Name) || empty($Height) || empty($Weight) || empty($Address) 
      || empty($ContactNo) || empty($Username))
    {      
     echo '<script type="text/javascript">
    $(document).ready(function() {
       swal({
            title: "User Profile Update not Successful",
            text: "Please complete all the details!",
            type: "error",
            showConfirmButton: true
          }, function(){
                window.location.href = "user-profile-patient.php";
          });
        });
    </script>';   
    }

    elseif (($_FILES['Patient_Image']['name'] == ""))
    {
       $Update_Profile = "UPDATE patient_account SET First_Name='$First_Name', Middle_Name='$Middle_Name', Last_Name='$Last_Name', Height='$Height', Weight='$Weight', Address='$Address', ContactNo='$ContactNo', Username='$Username' WHERE Username='$Username'";
      $retval = mysqli_query( $conn,$Update_Profile);   
      if ($retval) 
      {
        echo '<script type="text/javascript">
    $(document).ready(function() {
       swal({
            title: "Update Successful",
            text: "User Profile Update Successful",
            type: "success",
            showConfirmButton: true
          }, function(){
                window.location.href = "user-profile-patient.php";
          });
        });
    </script>';
      }
      else{
        echo "<script>alert('User Profile Not Updated.');</script>";
          header("refresh:0;url=user-profile-patient.php");
      }
     
    }
    else
    {
      $Update_Profile = "UPDATE patient_account SET Patient_Picture='$Image_Data', First_Name='$First_Name', Middle_Name='$Middle_Name', Last_Name='$Last_Name', Height='$Height', Weight='$Weight', Address='$Address', ContactNo='$ContactNo', Username='$Username' WHERE Username='$Username'";
      $retval = mysqli_query( $conn,$Update_Profile);   
      if ($retval) 
      {
        echo '<script type="text/javascript">
    $(document).ready(function() {
       swal({
            title: "Update Successful",
            text: "User Profile Update Successful",
            type: "success",
            showConfirmButton: true
          }, function(){
                window.location.href = "user-profile-patient.php";
          });
        });
    </script>';
      }
      else{
        echo "<script>alert('User Profile Not Updated.');</script>";
          header("refresh:0;url=user-profile-patient.php");
      }
    }
  }
    
  
?>

<?php
include ('db.php');
$Username = $_COOKIE['PatientUsername'];

$Get_Data = $conn->prepare("SELECT * FROM patient_account WHERE Username='$Username'");
        $Get_Data->execute();
        $Data_Results = $Get_Data->get_result();
        while ($row = $Data_Results->fetch_assoc())
        {
            $Patient_Picture = $row["Patient_Picture"];
        }
?>