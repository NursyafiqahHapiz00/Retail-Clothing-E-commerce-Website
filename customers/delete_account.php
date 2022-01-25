<center>
<h1>Do You Really Want To Delete Your Account?</h1>

<!-- To create form -->
<form action="" method="post">
	<input class="btn btn-danger" type="submit" name="yes" value="Yes, I want to delete!">
		<input class="btn btn-primary" type="submit" name="no" value="No, I don't want to delete!">
</form>

</center>

<?php
	$cust_email = $_SESSION['cust_email'];

	if(isset($_POST['yes'])){
		$delete_customer = "delete from customers where cust_email='$cust_email'";
		$run_delete = mysqli_query($con,$delete_customer);

		if($run_delete){
			session_destroy();
			echo "<script>alert('Your account has been deleted! Goodbye!')</script>";
			echo "<script>window.open('../index.php','_self')</script>";
		}
	}

	if(isset($_POST['no'])){
		echo "<script>window.open('my_account.php?my_orders','_self')</script>";
	}
?>