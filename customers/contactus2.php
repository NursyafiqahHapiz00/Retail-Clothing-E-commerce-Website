<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
        <div class="bg">
            <div class="row">           
                <div class="col-sm-12"> 
					<br><br>
					<!-- To make text between horizontal line -->
					<div style="width: 100%; height: 10px; border-bottom: 1px solid pink; text-align: center">
						<span style="font-size: 20px; background-color: #ffedec; padding: 0 5px;">
							<b>Contact Us</b>
						</span>
					</div>
                 </div>
            </div>                  
         </div>   

		<!-- To create google map -->
		<br><br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31729.497226383755!2d100.41790146814192!3d6.239046810959634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b59ebc8690d29%3A0x4a74e6f4b23437!2sTaman%20Mahsuri%2C%2006000%20Jitra%2C%20Kedah!5e0!3m2!1sen!2smy!4v1642058434961!5m2!1sen!2smy" width="1170" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

			<div class="row">   
                <div class="col-sm-8">
                    <div class="contact-form"><br>
						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid pink; text-align: center">
							<span style="font-size: 20px; background-color: #ffedc; padding: 0 5px;">
								<b>Customer Feedback</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
							<p><div class="form-group col-md-6">
                                <input type="text" name="invoice_no" class="form-control" required="required" placeholder="Your invoice no">
                            </div></p>
						

						<br><br> <center> <br>
						<p><strong>Please help us to serve you better by taking a couple of minutes.</strong></p>
						<p>How satisfied were you with our service.</p>
						
						  <input type="radio" id="excellent" name="feedback_rating" value="Excellent">
						  <label for="excellent">Excellent</label>
						
						  <input type="radio" id="good" name="feedback_rating" value="Good">
						  <label for="good">Good</label>
						
						  <input type="radio" id="neutral" name="feedback_rating" value="Neutral">
						  <label for="neutral">Neutral</label>
							
						  <input type="radio" id="poor" name="feedback_rating" value="Poor">
						  <label for="poor">Poor</label>
						
						<br><br>
						<p>If you have specific feedback, please write to us.... </p>
						
						<br>
                            <div class="form-group col-md-12">
                                 <textarea type="text" name="feedback_description" class="form-control" required="required" rows="8" placeholder="Additional Comments"></textarea>
                            </div>
							
                            <div class="form-group col-md-6">
                                <input type="text" name="cust_fname" class="form-control" required="required" placeholder="Your first name">
                            </div>
							
                            <div class="form-group col-md-6">
                                <input type="email" name="cust_email" class="form-control"  required="required" placeholder="Your email">
                            </div>
							
                            <div class="form-group col-md-6">
                                <input type="text" name="cust_contact" class="form-control" required="required" placeholder="Your contact number"><br><br>
                            </div>       
							
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
							$invoice_no = $_POST['invoice_no'];
							$feedback_rating = $_POST['feedback_rating'];
							$feedback_description = $_POST['feedback_description'];
							$cust_fname = $_POST['cust_fname'];
							$cust_email = $_POST['cust_email'];
							$cust_contact = $_POST['cust_contact'];

							$insert_cust_feedbacks = "insert into cust_feedbacks (invoice_no, feedback_rating, feedback_description, cust_fname, cust_email, cust_contact) values ('$invoice_no','$feedback_rating','$feedback_description','$cust_fname','$cust_email', '$cust_contact')";
							$run_cust_feedbacks = mysqli_query($con,$insert_cust_feedbacks);

								if($run_cust_feedbacks){
									echo "<script>alert('Your feedback has been received. Thankyou for your feedback!')</script>";
									echo "<script>window.open('contactus2.php','_self')</script>";
								}
							}
						?>

                    </div>
                </div>
				
                <div class="col-sm-4">
                    <div class="contact-info"><br>
						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid pink; text-align: center">
							<span style="font-size: 20px; background-color: #ffedc; padding: 0 5px;">
								<b>Contact Details</b>
							</span>
						</div>
						<br><br><br>

                        <address>
						<?php
							$get_contact_us = "select * from contact_us";
							$run_contact_us = mysqli_query($con,$get_contact_us);
							$row_contact_us = mysqli_fetch_array($run_contact_us);
													
							$contact_no = $row_contact_us['contact_no'];
							$store_street = $row_contact_us['store_street'];
							$store_zip = $row_contact_us['store_zip'];
							$store_state = $row_contact_us['store_state'];
							$contact_email = $row_contact_us['contact_email'];
							$store_day = $row_contact_us['store_day'];
							$store_hours = $row_contact_us['store_hours'];
						?>
						
							<p style="text-align:center;"><strong>Sacred Stitich Trendy and Hip Sdn. Bhd</strong></p>
							<p style="text-align:center;"> <?php echo $store_address = $store_street. ' ' .$store_zip. ' ' .$store_state; ?>
							<p style="text-align:center;"><strong>Customer Service:</strong> <?php echo $contact_no ?></p>
							<p style="text-align:center;"><strong>Email:</strong> <?php echo $contact_email ?></p>
							<br>
							<br>
							
							<p style="text-align:center;"><strong>Store Operating Hours:</strong></p>
							<p style="text-align:center;"> <?php echo $store_day ?> ............................. <?php echo $store_hours ?> 
                        </address>
                     
                    </div>
                </div>              
            </div>  
        </div>  
    </div><!--/#contact-page-->

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html>