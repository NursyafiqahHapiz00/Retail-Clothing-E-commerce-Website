<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	if(isset($_GET['delete_p_variations'])){
		$delete_p_variations_id = $_GET['delete_p_variations'];
		$delete_p_variations = "delete from product_variations where p_variations_id='$delete_p_variations_id'";
		$run_delete = mysqli_query($con,$delete_p_variations);

		if($run_delete){
			echo "<script>alert('One product variations has been deleted')</script>";
			echo "<script>window.open('index.php?view_products','_self')</script>";
		}
	}
?>

<?php
	}
 ?>