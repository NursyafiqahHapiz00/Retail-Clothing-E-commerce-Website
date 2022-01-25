<html>
	<body>

<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

	<main>
		<!-- HERO -->
		<div class="nero">
		  <div class="nero__heading">
			<span class="nero__bold">FAQs</span> 
		  </div>
		  
		  <p class="nero__text">
		  </p>
		  
		</div>
  </main>
  
<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		<div class="col-md-12" ><!-- col-md-12 Starts -->
			<div class="box" ><!-- box Starts -->
<?php
	$get_faqs = "select * from faqs";
	$run_faqs = mysqli_query($con,$get_faqs);
	$row_faqs = mysqli_fetch_array($run_faqs);
							
	$faqs_heading = $row_faqs['faqs_heading'];
	$faqs_short_desc = $row_faqs['faqs_short_desc'];
	$faqs_long_desc = $row_faqs['faqs_long_desc'];
?>

	<h1> <?php echo $faqs_heading ?></h1>
		<p> <?php echo $faqs_short_desc ?>
		<br>
			<p> <?php echo $faqs_long_desc ?> 
			</div><!-- box Ends -->
		</div><!-- col-md-12 Ends -->
	</div><!-- container Ends -->
</div><!-- content Ends -->		

<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

	</body>
</html>
