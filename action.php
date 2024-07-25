<?php
	session_start();
	require 'db.php';

	// Add products into the cart table
	if (isset($_POST['doctor_id'])) {
	  $doctor_id = $_POST['doctor_id'];


	  $stmt = $conn->prepare('SELECT doctor_id FROM select_doctor WHERE doctor_id=?');
	  $stmt->bind_param('s',$doctor_id);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['doctor_id'] ?? '';

	  if (!$code) {
	    $query = $conn->prepare('INSERT INTO select_doctor (doctor_id) VALUES (?)');
	    $query->bind_param('s',$doctor_id);
	    $query->execute();

	    echo "<center><h3><script>alert('Item added in your cart!!');</script></h3></center>";
	    // echo '<div class="alert alert-success alert-dismissible mt-2">
					// 	  <button type="button" class="close" data-dismiss="alert">&times;</button>
					// 	  <strong>Item added to your cart!</strong>
					// 	</div>';
	  } else {

	  	echo "<center><h3><script>alert('Item is already in your cart!!');</script></h3></center>";
	    // echo '<div class="alert alert-danger alert-dismissible mt-2">
					// 	  <button type="button" class="close" data-dismiss="alert">&times;</button>
					// 	  <strong>Item already added to your cart!</strong>
					// 	</div>';
	  }
	}
?>