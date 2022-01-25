<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	if(isset($_GET['delete_shipment'])){
		$delete_id = $_GET['delete_shipment'];
		$delete_shipment = "delete from shipment where shipment_id='$delete_id'";
		$run_shipment = mysqli_query($con,$delete_shipment);

	if($run_shipment){
		echo "<script>alert('One shipment details has been deleted')</script>";
		echo "<script> window.open('index.php?view_shipment','_self') </script>";
		}
	}
?>

<?php 
	} 
?>