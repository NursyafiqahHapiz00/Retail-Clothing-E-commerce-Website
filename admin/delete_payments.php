<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['delete_payments'])){

		$delete_id = $_GET['delete_payments'];
		$delete_payments = "delete from payments where payment_id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_payments);

		if($run_delete){
			echo "<script>alert('One payment has been deleted')</script>";
			echo "<script>window.open('index.php?view_payments','_self')</script>";
		}
	}
?>

<?php 
	} 
?>