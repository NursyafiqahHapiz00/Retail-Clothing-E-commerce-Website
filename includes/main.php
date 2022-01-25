  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customers/my_account.php?my_orders">
		  		  <img class="logo__img" src="images/logo.jpeg" alt="SSTHO logotype" width="35" height="35">
				<?php
					if(!isset($_SESSION['cust_email'])){
						echo "Welcome!"; 
					} 
					
						else { 
						
						$cust_session = $_SESSION['cust_email'];
						$get_customer = "select * from customers where cust_email='$cust_session'";
						$run_customer = mysqli_query($con,$get_customer);
						$row_customer = mysqli_fetch_array($run_customer);
						
						$cust_fname = $row_customer['cust_fname'];
							echo "Welcome, " .$cust_fname. "!";
						}
				?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
				<?php 
					items(); 
				?> items
          </a>
        </div>
       
       <ul class="login">
		<li class="login__item">
			<?php
				if(!isset($_SESSION['cust_email'])){
				  echo '<a href="customer_register.php" class="login__link">Register</a>';
				} 
				  else { 
					  echo '<a href="customers/my_account.php?my_orders" class="login__link">My Account</a>';
				  }   
			?>  
		</li>

		<li class="login__item">
			<?php
				if(!isset($_SESSION['cus_email'])){
				  echo '<a href="checkout.php" class="login__link">Sign In</a>';
				} 
				  else { 
					  echo '<a href="./logout.php" class="login__link">Logout</a>';
				  }   
			?>  		 
		</li>
	</ul> 
    
    </div>
</div>

    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/logo.jpg" alt="SSTHO logotype" width="200" height="100">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">  
		  
			<li class="categories__item">
              <a class="categories__link" href="index.php">
                Home               
              </a>
            </li>
			
            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                Shop
              </a>
            </li>
			
            <li class="categories__item">
              <a class="categories__link" href="contactus2.php">
                Contact
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="customers/my_account.php?my_orders">
                My Account
                <i class="icon-down-open-1"></i>
              </a>
			  
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Account Settings</div>
						<ul class="dropdown__items">
						  <li class="dropdown__item">
							<a href="customers/my_account.php?my_wishlist" class="dropdown__link">My Wishlist</a>
						  </li>
						  
						  <li class="dropdown__item">
							<a href="customers/my_account.php?my_orders" class="dropdown__link">My Orders</a>
						  </li>
						  
						  <li class="dropdown__item">
							<a href="cart.php" class="dropdown__link">View Shopping Cart</a>
						  </li>
						</ul>
                  </div>
				  
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
						<ul class="dropdown__items">
						  <li class="dropdown__item">
							<a href="customers/my_account.php?edit_account" class="dropdown__link">Edit Your Account</a>
						  </li>
						  
						  <li class="dropdown__item">
							<a href="customers/my_account.php?change_pass" class="dropdown__link">Change Password</a>
						  </li>
						  
						  <li class="dropdown__item">
							<a href="customers/my_account.php?delete_account" class="dropdown__link">Delete Account</a>
						  </li>
						</ul>
                  </div>
                </div>
             
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>