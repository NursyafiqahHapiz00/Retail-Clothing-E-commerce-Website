<h1 align="center">Change Password </h1>

<!-- To create form -->
<form action="" method="post"><!-- form Starts -->
	<div class="form-group"><!-- form-group Starts -->
		<label>Current Password</label>
			<input type="text" name="old_pass" class="form-control" required>
	</div><!-- form-group Ends -->

	<div class="form-group"><!-- form-group Starts -->
		<label>New Password</label>
			<input type="text" name="new_pass" class="form-control" required>
	</div><!-- form-group Ends -->

	<div class="form-group"><!-- form-group Starts -->
		<label>Re-type New Password</label>
			<input type="text" name="new_pass_again" class="form-control" required>
	</div><!-- form-group Ends -->

	<div class="text-center"><!-- text-center Starts -->
		<button type="submit" name="submit" class="btn btn-primary">
			<i class="fa fa-user-md"> </i> Change Password
		</button>
	</div><!-- text-center Ends -->
</form><!-- form Ends -->

<?php
	if(isset($_POST['submit'])){
		
	$cust_email = $_SESSION['cust_email'];
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$new_pass_again = $_POST['new_pass_again'];

	$sel_old_pass = "select * from customers where cust_pass='$old_pass'";
	$run_old_pass = mysqli_query($con,$sel_old_pass);
	$check_old_pass = mysqli_num_rows($run_old_pass);

		if($check_old_pass==0){
			echo "<script>alert('Your current password is not valid. Please try again!')</script>";
			exit();
		}

		if($new_pass!=$new_pass_again){
			echo "<script>alert('Your new password does not match!')</script>";
			exit();
		}

		$update_pass = "update customers set cust_pass='$new_pass' where cust_email='$cust_email'";
		$run_pass = mysqli_query($con,$update_pass);

		if($run_pass){
			echo "<script>alert('Your password has been changed successfully!')</script>";
			echo "<script>window.open('my_account.php?my_orders','_self')</script>";
		}
	}
?>







