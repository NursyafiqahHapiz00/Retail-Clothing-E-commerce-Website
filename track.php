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
			<span class="nero__bold">Track </span> Order
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
	$get_track = "select * from track_order";
	$run_track = mysqli_query($con,$get_track);
	$row_track = mysqli_fetch_array($run_track);
							
	$track_heading = $row_track['track_heading'];
	$track_short_desc = $row_track['track_short_desc'];
	$track_long_desc = $row_track['track_long_desc'];
?>

	<h1> <?php echo $track_heading ?></h1>
		<p> <?php echo $track_short_desc ?>
		<br>

<?php
	$get_carrier = "select * from carrier";
	$run_carrier = mysqli_query($con,$get_carrier);
		while($row_carrier=mysqli_fetch_array($run_carrier)){

		$carrier_name = $row_carrier['carrier_name'];
		$carrier_link = $row_carrier['carrier_link'];										
?>

			<a href = <?php echo $carrier_link ?>> Click here for <?php echo $carrier_name ?> shipments. </a>
			<br>
			
<?php
	}
?>
			<br>
			<p> <?php echo $track_long_desc ?>
		
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



