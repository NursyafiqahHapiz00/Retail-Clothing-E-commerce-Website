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
			<span class="nero__bold">Terms & </span> Conditions
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
	$get_terms = "select * from terms";
	$run_terms = mysqli_query($con,$get_terms);
	$row_terms = mysqli_fetch_array($run_terms);
							
	$terms_heading = $row_terms['terms_heading'];
	$terms_short_desc = $row_terms['terms_short_desc'];
	$terms_long_desc = $row_terms['terms_long_desc'];
?>

	<h1> <?php echo $terms_heading ?></h1>
		<p> <?php echo $terms_short_desc ?>
		<br>
			<p> <?php echo $terms_long_desc ?> 
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



