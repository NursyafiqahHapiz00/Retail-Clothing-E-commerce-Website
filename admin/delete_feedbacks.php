<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	if(isset($_GET['delete_feedbacks'])){
	$delete_id = $_GET['delete_feedbacks'];
	$delete_feedbacks = "delete from cust_feedbacks where feedback_id='$delete_id'";
	$run_delete = mysqli_query($con,$delete_feedbacks);

	if($run_delete){
		echo "<script>alert('One feedback has been deleted')</script>";
		echo "<script>window.open('index.php?view_feedbacks','_self')</script>";
		}
	}
?>

<?php 
	} 
?>