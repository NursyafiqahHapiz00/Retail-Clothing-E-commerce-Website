<html>
	<body>

<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

  <!-- MAIN -->
<br><br>

<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		<div class="col-md-12" ><!-- col-md-12 Starts -->

			<div class="box" ><!-- box Starts -->
				<div class="box-header" ><!-- box-header Starts -->
					<center><!-- center Starts -->
						<h2> Create New Account </h2>
					</center><!-- center Ends -->
			</div><!-- box-header Ends -->


<form action="customer_register.php" method="post" enctype="multipart/form-data" ><!-- form Starts -->
	<div class="form-group" ><!-- form-group Starts -->
		<label>First Name</label>
			<input type="text" class="form-control" name="cust_fname" required>
	</div><!-- form-group Ends -->
	
	<div class="form-group" ><!-- form-group Starts -->
		<label>Last Name</label>
			<input type="text" class="form-control" name="cust_lname" required>
	</div><!-- form-group Ends -->

	<div class="form-group"><!-- form-group Starts -->
		<label>Email Addresss</label>
			<input type="text" class="form-control" name="cust_email" required>
	</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->
	<label>Password </label>
		<div class="input-group"><!-- input-group Starts -->
			<span class="input-group-addon"><!-- input-group-addon Starts -->
				<i class="fa fa-check tick1"> </i>
				<i class="fa fa-times cross1"> </i>
			</span><!-- input-group-addon Ends -->
				<input type="password" class="form-control" id="pass" name="cust_pass" required>
					<span class="input-group-addon"><!-- input-group-addon Starts -->

	<div id="meter_wrapper"><!-- meter_wrapper Starts -->
		<span id="pass_type"> </span>
			<div id="meter"> </div>
			
			</div><!-- meter_wrapper Ends -->
		</span><!-- input-group-addon Ends -->
	</div><!-- input-group Ends -->
</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->
	<label> Confirm Password </label>
		<div class="input-group"><!-- input-group Starts -->
			<span class="input-group-addon"><!-- input-group-addon Starts -->
				<i class="fa fa-check tick2"> </i>
				<i class="fa fa-times cross2"> </i>
			</span><!-- input-group-addon Ends -->
				<input type="password" class="form-control confirm" id="con_pass" required>
	</div><!-- input-group Ends -->
</div><!-- form-group Ends -->

	<div class="form-group"><!-- form-group Starts -->
		<label> Street Address </label>
			<input type="text" class="form-control" name="cust_street" required>
	</div><!-- form-group Ends -->
	
	<div class="form-group"><!-- form-group Starts -->
		<label> Zip </label>
			<input type="text" class="form-control" name="cust_zip" required>
	</div><!-- form-group Ends -->
	
	<div class="form-group"><!-- form-group Starts -->
		<label> State </label>
			<input type="text" class="form-control" name="cust_state" required>
	</div><!-- form-group Ends -->

	<div class="form-group"><!-- form-group Starts -->
		<label>Contact No</label>
			<input type="text" class="form-control" name="cust_contact" required>
	</div><!-- form-group Ends -->

	<div class="form-group"><!-- form-group Starts -->
		<label>Profile Image </label>
			<input type="file" class="form-control" name="cust_image" required>
	</div><!-- form-group Ends -->

	<div class="form-group"><!-- form-group Starts -->
		<center>
			<!-- <label> Captcha Verification </label> -->
			<!-- <div class="g-recaptcha" data-sitekey="6LcHnoQaAAAAAF_WTAEPkd_XO_9XC80G6N1MjrH2"></div> -->
		</center>
	</div><!-- form-group Ends -->

	<div class="text-center"><!-- text-center Starts -->
		<button type="submit" name="register" class="btn btn-primary">
				<i class="fa fa-user-md"></i> Register
		</button>
	</div><!-- text-center Ends -->
	<br>
	<center><!-- center Starts -->
		<a href="checkout.php" >
			<h4>Already have an account? Sign In</h4>
		</a>
	</center><!-- center Ends -->
	

		</form><!-- form Ends -->
	</div><!-- box Ends -->
</div><!-- col-md-12 Ends -->

	</div><!-- container Ends -->
</div><!-- content Ends -->

<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){

$('.tick1').hide();
$('.cross1').hide();

$('.tick2').hide();
$('.cross2').hide();


$('.confirm').focusout(function(){

var password = $('#pass').val();

var confirmPassword = $('#con_pass').val();

if(password == confirmPassword){

$('.tick1').show();
$('.cross1').hide();

$('.tick2').show();
$('.cross2').hide();



}
else{

$('.tick1').hide();
$('.cross1').show();

$('.tick2').hide();
$('.cross2').show();


}


});


});
</script>

<script>
$(document).ready(function(){

$("#pass").keyup(function(){

check_pass();

});

});

function check_pass() {
 var val=document.getElementById("pass").value;
 var meter=document.getElementById("meter");
 var no=0;
 if(val!="")
 {
// If the password length is less than or equal to 6
if(val.length<=6)no=1;

 // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
  if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

  // If the password length is greater than 6 and contain alphabet,number,special character respectively
  if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

  // If the password length is greater than 6 and must contain alphabets,numbers and special characters
  if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

  if(no==1)
  {
   $("#meter").animate({width:'50px'},300);
   meter.style.backgroundColor="red";
   document.getElementById("pass_type").innerHTML="Very Weak";
  }

  if(no==2)
  {
   $("#meter").animate({width:'100px'},300);
   meter.style.backgroundColor="#F5BCA9";
   document.getElementById("pass_type").innerHTML="Weak";
  }

  if(no==3)
  {
   $("#meter").animate({width:'150px'},300);
   meter.style.backgroundColor="#FF8000";
   document.getElementById("pass_type").innerHTML="Good";
  }

  if(no==4)
  {
   $("#meter").animate({width:'200px'},300);
   meter.style.backgroundColor="#00FF40";
   document.getElementById("pass_type").innerHTML="Strong";
  }
 }

 else
 {
  meter.style.backgroundColor="";
  document.getElementById("pass_type").innerHTML="";
 }
}
</script>

	</body>
</html>

<?php

if(isset($_POST['register'])){

// $secret = "6LcHnoQaAAAAAF3_pqQ55sZMDgaWCGcXq4ucLgkH";

// $response = $_POST['g-recaptcha-response'];

$remoteip = $_SERVER['REMOTE_ADDR'];

// $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");

// $result = json_decode($url, TRUE);

	if($result['success'] == 0){
		$cust_fname = $_POST['cust_fname'];
		$cust_lname = $_POST['cust_lname'];
		$cust_email = $_POST['cust_email'];
		$cust_pass = $_POST['cust_pass'];
		$cust_street = $_POST['cust_street'];
		$cust_zip = $_POST['cust_zip'];
		$cust_state = $_POST['cust_state'];
		$cust_contact = $_POST['cust_contact'];
		$cust_image = $_FILES['cust_image']['name'];
		$cust_image_tmp = $_FILES['cust_image']['tmp_name'];
		$cust_ip = getRealUserIp();

	move_uploaded_file($cust_image_tmp,"customers/cust_images/$cust_image");

	$get_email = "select * from customers where cust_email='$cust_email'";
	$run_email = mysqli_query($con,$get_email);
	$check_email = mysqli_num_rows($run_email);

	if($check_email == 1){
		echo "<script>alert('This email is already registered, try another one')</script>";
		exit();
	}

	$cust_confirm_code = mt_rand();
	$subject = "Email Confirmation Message";
	$from = "sad.ahmed22224@gmail.com";
	$message = "

		<h2>
			Email Confirmation By Computerfever.com $cust_fname
		</h2>

		<a href='localhost/sstho_file/sstho/customers/my_account.php?$cust_confirm_code'>
			Click Here To Confirm Email
		</a>
	";

	$headers = "From: $from \r\n";
	$headers .= "Content-type: text/html\r\n";
		mail($cust_email,$subject,$message,$headers);

	$insert_customer = "insert into customers (cust_fname, cust_lname, cust_email, cust_pass, cust_street, cust_zip, cust_state, cust_contact, cust_image, cust_ip, cust_confirm_code) values ('$cust_fname','$cust_lname', '$cust_email', '$cust_pass', '$cust_street', '$cust_zip', '$cust_state', '$cust_contact', '$cust_image','$cust_ip','$cust_confirm_code')";
	$run_customer = mysqli_query($con,$insert_customer);

	$sel_cart = "select * from cart where ip_add='$cust_ip'";
	$run_cart = mysqli_query($con,$sel_cart);
	$check_cart = mysqli_num_rows($run_cart);

	if($check_cart>0){
		$_SESSION['cust_email']=$cust_email;
		echo "<script>alert('You have been registered successfully!')</script>";
		echo "<script>window.open('checkout.php','_self')</script>";
	}

		else{
			$_SESSION['cust_email']=$cust_email;
			echo "<script>alert('You have been registered successfully!')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}

		else{
			echo "<script>alert('Please select captcha and try again')</script>";
		}
	}
?>
