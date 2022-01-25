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
			<span class="nero__bold">Delivery & </span> Shipping
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
	$get_delivery_shipping = "select * from delivery_shipping";
	$run_delivery_shipping = mysqli_query($con,$get_delivery_shipping);
	$row_delivery_shipping = mysqli_fetch_array($run_delivery_shipping);
							
	$delivery_heading = $row_delivery_shipping['delivery_heading'];
	$delivery_short_desc = $row_delivery_shipping['delivery_short_desc'];
	$delivery_long_desc = $row_delivery_shipping['delivery_long_desc'];
?>

	<h1> <?php echo $delivery_heading ?></h1>
		<p> <?php echo $delivery_short_desc ?>
		<br>
			<p> <?php echo $delivery_long_desc ?> 
			</div><!-- box Ends -->
		</div><!-- col-md-12 Ends -->
	</div><!-- container Ends -->
</div><!-- content Ends -->

<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html>
