
<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
	include "slider.php";
?>


	
    <!-- Main -->
    <div class="wrapper">
        <h1>Featured Collections<h1>          
    </div>

    <div id="content" class="container"><!-- container Starts -->
		<div class="row"><!-- row Starts -->
			<?php
				getPro();
			?>
		</div><!-- row Ends -->
    </div><!-- container Ends -->
	
    <!-- FOOTER -->
    <footer class="page-footer">

	<div class="footer-nav">
		<div class="container clearfix">

			<div class="footer-nav__col footer-nav__col--info">
				<div class="footer-nav__heading">About us</div>
					<ul class="footer-nav__list">
						<li class="footer-nav__item">
							<a href="about.php" class="footer-nav__link">About us</a>
						</li>
						
						<li class="footer-nav__item">
							<a href="terms_conditions.php" class="footer-nav__link">Terms & Conditions</a>
						</li>
					</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--whybuy">
				<div class="footer-nav__heading">Delivery</div>
					<ul class="footer-nav__list">
						<li class="footer-nav__item">
							<a href="delivery.php" class="footer-nav__link">Delivery & shipping</a>
						</li>
						
						<li class="footer-nav__item">
							<a href="track.php" class="footer-nav__link">Track your order</a>
						</li>
					</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--account">
				<div class="footer-nav__heading">Customer services</div>
					<ul class="footer-nav__list">
						<li class="footer-nav__item">
							<a href="contactus2.php" class="footer-nav__link">Contact us</a>
						</li>
						
						<li class="footer-nav__item">
							<a href="faq.php" class="footer-nav__link">FAQs</a>
						</li>
						
						<li class="footer-nav__item">
							<a href="contactus2.php" class="footer-nav__link">Customer feedback</a>
						</li>
					</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--contacts">
				<div class="footer-nav__heading">Newsletter</div>
					<address class="address">
				
			<form method="POST" action="newsletter.php">
				<?php
					$emailaddress = "";
				?>
				<div class="form-group" >
					<div class="container_news" style="background-color: ;color:black;">
						<input type="text" placeholder="Enter your email address" name="emailaddress" required value="<?php echo $emailaddress ?>" >
					   <br>
					   <br>			   
					</div>
					
			<div class="container_news">
				<button name="subscribe" value="subscribe" class="btn btn-primary" >
					<i class="fa fa-sign-in" ></i> Subscribe
			</div>
			
				</div>
			 </form>
			 
			 <span>
				FOLLOW US
			</span>
				<a class="fa fa-facebook-square" href="https://www.facebook.com/" target="_blank" style='font-size:30px;color:black'></a>
				<a class="fa fa-linkedin-square" href="https://www.linkedin.com/" target="_blank" style='font-size:30px;color:black'></a>
				<a class="fa fa-instagram" href="https://www.instagram.com/" target="_blank" style='font-size:30px;color:black'></a>
			</address>
				
			</div>
		</div>
	</div>

	<!-- <div class="banners">
		<div class="container clearfix">

			<div class="banner-award">
				<span>Award winner</span><br> Fashion awards 2016
			</div>

			<div class="banner-social">
				<a href="#" class="banner-social__link">
				<i class="icon-facebook"></i>
			</a>
				<a href="#" class="banner-social__link">
				<i class="icon-twitter"></i>
			</a>
				<a href="#" class="banner-social__link">
				<i class="icon-instagram"></i>
			</a>
				<a href="#" class="banner-social__link">
				<i class="icon-pinterest-circled"></i>
			</a>
			</div>

		</div>
	</div> -->

	<div class="page-footer__subline">
		<div class="container clearfix">

			<div class="copyright">
				&copy; 2021 SSTHO &trade;
				All rights reserved.
			</div>

			<div class="developer">
				Developed by Group 3
			</div>

			<div class="designby">
				Design by Group 3
			</div>
		</div>
	</div>
</footer>
<html>
	<body>

	</body>
</html>
