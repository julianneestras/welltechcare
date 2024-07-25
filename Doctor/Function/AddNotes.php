<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
include ('db.php');

if (isset($_POST['SaveNote'])) 
{
	$appointment_id = $_POST['appointment_id'];
	$doctors_note = $_POST['doctors_note'];


	$query = "UPDATE appointments SET doctors_note='$doctors_note' WHERE appointment_id='$appointment_id'";  
    $query_run = mysqli_query($conn, $query);
    if ($query_run) 
    {
    	echo '<script type="text/javascript">
               $(document).ready(function() {
                    swal({
                        title: "Note Added Successfully!",
                        type: "success",
                        timer: 5000
                    });
                });
            </script>';
    }
}




?>