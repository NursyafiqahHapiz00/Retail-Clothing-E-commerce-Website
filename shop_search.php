<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<br><br>

<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<div class="col-md-10">
<form class="form" method="post" action="shop_search.php" style="display: flex;">
<input type="text" name="keyword" style="width:60%;flex-grow:1;" placeholder="Search for products" />
<button type="submit" name="search" style="background-color:#ffb4b4;">Search</button>
</form>
</div>
	  

</div><!--- col-md-12 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->

				<br>
				<?php //to make the text between the horizontal line ?>
				
				<div style="width: 100%; height: 10px; border-bottom: 1px solid pink; text-align: center">
					<span style="font-size: 20px; background-color: #ffedec; padding: 0 5px;">
						<b>Categories</b>
					</span>
				</div>
				<br><br>
				
				<?php
	$aMan  = array();
	$aPCat = array();
	$aCat  = array();
	$aPrice  = array();

	/// Products Categories Code Starts ///
	if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){
		foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

			if((int)$sVal!=0){
				$aPCat[(int)$sVal] = (int)$sVal;
				}
		}
	}
	/// Products Categories Code Ends ///
	
	///Price Code Starts XSURE BTOI KA DAK///
	if(isset($_REQUEST['price'])&&is_array($_REQUEST['price'])){
		foreach($_REQUEST['price'] as $sKey=>$sVal){
 
			if((int)$sVal!=0){  
				$aPrice[(int)$sVal] = (int)$sVal;    
			}  
		}   
    }   
    /// Price Code Ends ///
?>


	<div class="panel panel-default sidebar-menu"><!--- panel panel-default sidebar-menu Starts -->
		<div class="panel-heading"><!-- panel-heading Starts -->
			<h3 class="panel-title"><!-- panel-title Starts -->
			<center>Product Categories</center>
			</h3><!-- panel-title Ends -->
		</div><!-- panel-heading Ends -->


				<div class="panel-body"><!-- panel-body Starts -->
<div class="form-group" ><!-- form-group Starts -->
<form action="shop_category.php" method="POST">
<select name="category" class="form-control">
<option> Select  a Category</option>

<?php
	$get_p_cats = "select * from product_categories";
	$run_p_cats = mysqli_query($con,$get_p_cats);
		while($row_p_cats = mysqli_fetch_array($run_p_cats)){

	$p_cat_id = $row_p_cats['p_cat_id'];
	$p_cat_title = $row_p_cats['p_cat_title'];
	$p_cat_image = $row_p_cats['p_cat_image'];
	echo "<option value='$p_cat_id'>$p_cat_title</option>";
	}
?>
</select>
<br>
<div class="pull-right">
<input class="btn btn-primary" type="submit" name="filter" value="Filter">
</div>
</form>
</div>
</div><!-- panel-body Ends -->




	</div><!--- panel panel-default sidebar-menu Ends -->
	<br>
				
	<div class="panel panel-default sidebar-menu"><!--- panel panel-default sidebar-menu Starts -->
	<div class="panel-heading"><!-- panel-heading Starts -->
		<h3 class="panel-title"><!-- panel-title Starts -->
			<center>Filter by Price</center>
		</h3><!-- panel-title Ends -->
	</div><!-- panel-heading Ends -->


		<div class="panel-body"><!-- panel-body Starts -->
			<div class="input-group" align="center"><!-- input-group Starts -->
						<form action="shop.php" method="POST">
                            <div class="row">
                                <div class="col-md-4" align="center">
                                    <label for="" align="center">Start Price</label>
                                    <input type="text" name="start_price" value="<?php if(isset($_POST['start_price'])){echo $_POST['start_price']; }else{echo "0";} ?>" class="form-control">
                                </div>
                                <div class="col-md-4" align="center">
                                    <label for="" align="center">End Price</label>
                                    <input type="text" name="end_price" value="<?php if(isset($_POST['end_price'])){echo $_POST['end_price']; }else{echo "300";} ?>" class="form-control">
                                </div>	
	
<br>								
				<input class="btn btn-primary" type="submit" name="filter" value="Filter">
				</div>

	  
				</div><!-- input-group Ends -->
			</div><!-- panel-body Ends -->
	</div><!--- panel panel-default sidebar-menu Ends -->
	
	</div><!-- col-md-3 Ends -->
	
	
	
	<div class="col-md-9" ><!-- col-md-9 Starts --->

				<br>
				<?php //to make the text between the horizontal line ?>
				
				<div style="width: 100%; height: 10px; border-bottom: 1px solid pink; text-align: center">
					<span style="font-size: 20px; background-color: #ffedec; padding: 0 5px;">
						<b>Products</b>
					</span>
				</div>
				<br><br>
				
             <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="row">
                        <?php  
                        $con = mysqli_connect("localhost","root","","sstho");

                        if(ISSET($_POST['search'])){
						$keyword = $_POST['keyword'];
					
						$query = "SELECT * FROM `products` WHERE `product_title` LIKE '%$keyword%'";
                        }
                        else
                        {
                            $query = "SELECT * FROM products";
                        }
                        
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                // 
                                ?>
							
                                <div class="col-md-4 col-sm-6 center-responsive">
								<div class="product">
								<a href=<?php echo $row['product_url']?>>
								<img src="admin/product_images/<?php echo $row['product_img1'];?>" width="840" height="840" class="img-responsive">
								</a>
								<div class="text">
								<hr>
								<center>
								<a href=<?php echo $row['product_url']?>>
								<?php echo $row['product_title'];?>
								</a>
								<p class="price">RM<?php echo $row['product_price'];?> </p>
								<p class='buttons' >
								<a href=<?php echo $row['product_url']?> class='btn btn-default' >View details</a>
								<a href=<?php echo $row['product_url']?> class='btn btn-danger'>
								<i class='fa fa-shopping-cart' data-price=<?php echo $row['product_price'];?>></i> Add To Cart
								</a>
								</p>
								</center>		
								</div>
						        </div>
                                </div>
						
						
                                <?php
                            }
                        }
                        else
                        {
                            echo "<h3>No Record Found</h3>";
                        }
                        ?>
						
						
                        </div>
                    </div>
                </div>
            </div>