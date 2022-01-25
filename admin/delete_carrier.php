<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	if(isset($_GET['delete_carrier'])){
		$delete_id = $_GET['delete_carrier'];
		$delete_carrier = "delete from carrier where carrier_id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_carrier);

	if($run_delete){
		echo "<script>alert('One carrier has been deleted')</script>";
		echo "<script> window.open('index.php?view_carrier','_self') </script>";
		}
	}
?>

<?php 
	} 
?>