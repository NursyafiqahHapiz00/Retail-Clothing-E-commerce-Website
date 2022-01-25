/* To create filter dropdown value in view_customers.php */

	function selectstate() {
			var x = document.getElementById("cust_state").value;
			$.ajax ({
				url: "view_customers.php",
				method: "POST",
				data: {
					id: x
				},
				
				success:function(data){
					$("#data").html(data);
				}
			})
	}