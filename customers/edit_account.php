<?php
	$cust_session = $_SESSION['cust_email'];
	$get_customer = "select * from customers where cust_email='$cust_session'";
	$run_customer = mysqli_query($con,$get_customer);
	$row_customer = mysqli_fetch_array($run_customer);

	$cust_id = $row_customer['cust_id'];
	$cust_fname = $row_customer['cust_fname'];
	$cust_lname = $row_customer['cust_lname'];
	$cust_email = $row_customer['cust_email'];
	$cust_contact = $row_customer['cust_contact'];
	$cust_street = $row_customer['cust_street'];
	$cust_zip = $row_customer['cust_zip'];
	$cust_state = $row_customer['cust_state'];
	$cust_image = $row_customer['cust_image'];
?>

<h1 align="center" > Edit Your Account </h1>

<!-- To create form -->
<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->
	<div class="form-group" ><!-- form-group Starts -->
		<label> First Name: </label>
			<input type="text" name="cust_fname" class="form-control" required value="<?php echo $cust_fname; ?>">
	</div><!-- form-group Ends -->
	
	<div class="form-group" ><!-- form-group Starts -->
		<label> Last Name: </label>
			<input type="text" name="cust_lname" class="form-control" required value="<?php echo $cust_lname; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Email: </label>
			<input type="text" name="cust_email" class="form-control" required value="<?php echo $cust_email; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Contact No: </label>
			<input type="text" name="cust_contact" class="form-control" required value="<?php echo $cust_contact; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Street Address: </label>
			<input type="text" name="cust_street" class="form-control" required value="<?php echo $cust_street; ?>">
	</div><!-- form-group Ends -->
	
	<div class="form-group" ><!-- form-group Starts -->
		<label> Zip: </label>
			<input type="text" name="cust_zip" class="form-control" required value="<?php echo $cust_zip; ?>">
	</div><!-- form-group Ends -->
	
	<div class="form-group" ><!-- form-group Starts -->
		<label> State: </label>
			<input type="text" name="cust_state" class="form-control" required value="<?php echo $cust_state; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Profile Image: </label>
			<input type="file" name="cust_image" class="form-control" required >
				<br>
			<img src="cust_images/<?php echo $cust_image; ?>" width="100" height="100" class="img-responsive" >
	</div><!-- form-group Ends -->

	<div class="text-center" ><!-- text-center Starts -->
		<button name="update" class="btn btn-primary" >
			<i class="fa fa-user-md" ></i> Update Profile
		</button>
	</div><!-- text-center Ends -->

</form><!--- form Ends -->

<?php
	if(isset($_POST['update'])){

	$update_id = $cust_id;
	$cust_fname = $_POST['cust_fname'];
	$cust_lname = $_POST['cust_lname'];
	$cust_email = $_POST['cust_email'];
	$cust_contact = $_POST['cust_contact'];
	$cust_street = $_POST['cust_street'];
	$cust_zip = $_POST['cust_zip'];
	$cust_state = $_POST['cust_state'];
	$cust_image = $_FILES['cust_image']['name'];
	$cust_image_tmp = $_FILES['cust_image']['tmp_name'];

	move_uploaded_file($cust_image_tmp,"cust_images/$cust_image");

	$update_customer = "update customers set cust_fname='$cust_fname', cust_lname='$cust_lname', cust_email='$cust_email', cust_contact='$cust_contact', cust_street='$cust_street', cust_zip='$cust_zip', cust_state='$cust_state', cust_image='$cust_image' where cust_id='$update_id'";
	$run_customer = mysqli_query($con,$update_customer);

		if($run_customer){
			echo "<script>alert('Your account has been updated. Please login again!')</script>";
			echo "<script>window.open('logout.php','_self')</script>";
		}
	}
?>