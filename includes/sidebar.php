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
			Product Categories
				<div class="pull-right"><!-- pull-right Starts -->
					<a href="#" style="color:black;">
						<span class="nav-toggle hide-show">
							Hide
						</span>
					</a>
				</div><!-- pull-right Ends -->
			</h3><!-- panel-title Ends -->
		</div><!-- panel-heading Ends -->

	<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Starts -->
		<div class="panel-body"><!-- panel-body Starts -->
			<div class="input-group"><!-- input-group Starts -->
				<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-p-cats" placeholder="Filter Product Categories">
					<a class="input-group-addon"> <i class="fa fa-search"></i> </a>
			</div><!-- input-group Ends -->
		</div><!-- panel-body Ends -->

<div class="panel-body scroll-menu"><!-- panel-body scroll-menu Starts -->
	<ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cats"><!-- nav nav-pills nav-stacked category-menu Starts -->

<?php
	$get_p_cats = "select * from product_categories where p_cat_top='yes'";
	$run_p_cats = mysqli_query($con,$get_p_cats);
		while($row_p_cats = mysqli_fetch_array($run_p_cats)){

	$p_cat_id = $row_p_cats['p_cat_id'];
	$p_cat_title = $row_p_cats['p_cat_title'];
	$p_cat_image = $row_p_cats['p_cat_image'];

	if($p_cat_image == ""){
	}

		else{
			$p_cat_image = "<img src='admin/other_images/$p_cat_image' width='20'> &nbsp;";
		}

		echo "
		<li class='checkbox checkbox-primary' style='background:#dddddd;' >
		<a>
		<label>
		<input ";

	if(isset($aPCat[$p_cat_id])){ echo "checked='checked'"; }
		echo " type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat' id='p_cat' >
		<span>
		$p_cat_image
		$p_cat_title
		</span>
		</label>
		</a>
		</li>
		";
	}

	$get_p_cats = "select * from product_categories where p_cat_top='no'";
	$run_p_cats = mysqli_query($con,$get_p_cats);
		while($row_p_cats = mysqli_fetch_array($run_p_cats)){

	$p_cat_id = $row_p_cats['p_cat_id'];
	$p_cat_title = $row_p_cats['p_cat_title'];
	$p_cat_image = $row_p_cats['p_cat_image'];

	if($p_cat_image == ""){
	}

		else{
			$p_cat_image = "<img src='admin/other_images/$p_cat_image' width='20'> &nbsp;";
		}

		echo "
		<li class='checkbox checkbox-primary'>
		<a>
		<label>
		<input ";

	if(isset($aPCat[$p_cat_id])){ echo "checked='checked'"; }
		echo " type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat' id='p_cat' >
		<span>
		$p_cat_image
		$p_cat_title
		</span>
		</label>
		</a>
		</li>
		";
	}
?>

			</ul><!-- nav nav-pills nav-stacked category-menu Ends -->
		</div><!-- panel-body scroll-menu Ends -->
	</div><!-- panel-collapse collapse-data Ends -->
</div><!--- panel panel-default sidebar-menu Ends -->

<div class="panel panel-default sidebar-menu"><!--- panel panel-default sidebar-menu Starts -->
	<div class="panel-heading"><!-- panel-heading Starts -->
		<h3 class="panel-title"><!-- panel-title Starts -->
			Filter by Price 
				<div class="pull-right"><!-- pull-right Starts -->
					<a href="#" style="color:black;">
						<span class="nav-toggle hide-show">
							Hide
						</span>
					</a>
				</div><!-- pull-right Ends -->
		</h3><!-- panel-title Ends -->
	</div><!-- panel-heading Ends -->

	<div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Starts -->
		<div class="panel-body"><!-- panel-body Starts -->
			<div class="input-group"><!-- input-group Starts -->
				<div class="slidecontainer">
					<input type="range" min="0" max="300" step="10" value="50" class="slider" id="myRange">
						<p>Product Below Price: RM<span id="demo"></span></p>
				</div>

	<script>
	var slider = document.getElementById("myRange");
	var output = document.getElementById("demo");
	output.innerHTML = slider.value;

	slider.oninput = function() {
	  output.innerHTML = this.value;
	}
	</script>
	  
				</div><!-- input-group Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel-collapse collapse-data Ends -->
	</div><!--- panel panel-default sidebar-menu Ends -->
