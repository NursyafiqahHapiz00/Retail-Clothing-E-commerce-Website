<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	if(isset($_GET['delete_coupons'])){
		$delete_id = $_GET['delete_coupons'];
		$delete_coupons = "delete from coupons where coupon_id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_coupons);

	if($run_delete){
		echo "<script>alert('One coupon has been deleted')</script>";
		echo "<script> window.open('index.php?view_coupons','_self') </script>";
		}
	}
?>

<?php 
	} 
?>