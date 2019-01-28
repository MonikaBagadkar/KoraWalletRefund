<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<title>Athletic Gym Performance Apparel That Gives to Charity Every Purchase – Kora Fitness LLC.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	</head>
	<body class="admin-body">

		<!-- Header Page Start -->
		<header class="cd-main-header">
			<a href="index.html" class="cd-logo"><img src="https://cdn.shopify.com/s/files/1/2676/8804/files/Kora_Logo_Black2_x22.png?v=1515087092" alt="Logo"></a>
			<a href="#0" class="cd-nav-trigger"><span></span></a>
			<nav class="cd-nav">
				<ul class="cd-top-nav">
					<li class="has-children account">
						<a href="#0">
							<img src="https://ca.slack-edge.com/T0CDKKV3R-U0CDPR5ME-c9b149502a45-48" alt="avatar">
							Account
						</a>
						<ul>
							<li><a href="#0">My Account</a></li>
							<li><a href="<?php echo $this->config->item('base_url_with_index').'/kora_controller/logOut/' ?>">Logout</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
	  <!-- Header Page End -->

	  <!-- Main Page Start -->
		<main class="cd-main-content">

			<!-- Sidenav Page Start -->
			<nav class="cd-side-nav">
				<ul>
					<li class="cd-label">Menu</li>
					<li class="dashboard">
						<a href="index.html">Dashboard</a>
					</li>
					<li class="customers">
						<a href="https://korafitness.com/">Customers</a>
					</li>
					<li class="orders">
						<a href="orders.html">Orders</a>
					</li>
				</ul>
				<ul>
					<li class="cd-label">Action</li>
					<li class="action-btn"><a href="<?php echo $this->config->item('base_url_with_index').'kora_controller/logOut/' ?>">+ Logout</a></li>
				</ul>
			</nav>
			<!-- Sidenav Page End -->

			<div class="content-wrapper">
				<section class="page page-dashboard">
					<div class="container-fluid">

						<!-- Page Header section start -->
					  <div class="row">
					  	<div class="col-md-12 col-lg-12">
					  		<div class="pageheader">
					  			<div class="page-bar">
					  				<ul class="page-breadcrumb">
					  					<li>
					  						<a href="#">
					  							<i class="fa fa-home"></i> Korafitness
					  						</a>
					  					</li>
					  					<li> 
					  						<a href="#"> Orders </a> 
					  					</li> 
					  				</ul> 
					  			</div>
					  	  </div>
					  	</div>
					  </div>
					  <!-- Page Header section End -->

	          <!-- Note section start -->
					  <div class="row">
					  	<div class="col-lg-12">
					  		<div class="alert alert-danger"> <strong>Note!</strong> Here we show important note. </div>
					  	</div>
					  </div>
					  <!-- Note section End -->
	          
	          <!-- Filter section start 
					  <div class="row">
					  	<div class="col-lg-12">
					  		<div class="search-filter mtb-15">
					  			<p>Filter</p>
								<form class="form-horizontal">
								  <div class="form-group">
								    <label class="control-label col-sm-2" for="Search">Search</label>
								    <div class="col-sm-4">
								      <input type="text" class="form-control" id="Search" placeholder="Search">
								    </div>
								    <label class="control-label col-sm-2" for="sort-by">Sort By</label>
								    <div class="col-sm-4">
								      <select class="form-control" id="sort-by">
								        <option>Latest</option>
								        <option>Oldest</option>
								      </select>
								    </div>
								  </div>
								  <div class="form-group"> 
								  	<div class="col-sm-12">
								      <button type="submit" class="btn filter-btn pull-right">Apply</button>
								    </div>
								  </div>
									</form>
					  		</div>
					  	</div>
					  </div>
					  Filter section End -->
	          
	          <!-- Orders List section start -->
					  <div class="row">
					  	<div class="col-lg-12">
					  		<div class="view-data-table">
					  			<h2>Orders List</h2>
								  <p>The Orders Information:</p>     
					  			<div class="table-responsive">
								  <table id="example" class="table table-bordered">
								    <thead class="data-table-head">
								      <tr>
								      	<th>Shopify Customer Id</th>
								      	<th>Order Id</th>
								        <th>Coupon Code</th>
								        <th>Credit Used</th>
								        <th>Credit Amount</th>
								        <th>Order Date</th>
								        <th>Action</th>
								      </tr>
								    </thead>
								    <tbody>
								    	<?php foreach ($orderDetails as $orders) {
								    		//echo "<pre>"; print_r($orders); ?>
								      <tr>
								      	<td><?php echo $orders['shopify_customer_id']; ?></td>
								      	<td><?php echo $orders['order_id']; ?></td>
								        <td><?php echo $orders['code']; ?></td>
								        <td><?php echo $orders['credit_used']; ?></td>
								        <td><?php echo $orders['credit_amount']; ?></td>
								        <td><?php echo $orders['starts_at']; ?></td>
								        <td>
								        	<button class="btn btn-xs btn-view" data-toggle="modal" data-target="#myModal" data-id="<?php echo $orders['order_id']; ?>" data-amount-id="<?php echo $orders['credit_used']; ?>"  data-customer-id="<?php echo $orders['shopify_customer_id']; ?>"  id="refund">Refund</button>
								        </td>
								      </tr>
								      <?php } ?>
								    </tbody>
								  </table>
								</div>
					  		</div>
					  	</div>
					  </div>
					  <!-- Orders List section End -->

					</div>
				</section>
			</div>
		</main>
		<!-- Main Page End -->

		<!-- Footer Page Start -->
		<footer class="container-fluid text-center footer-section">
		  <p><a href="https://korafitness.com" title="korafitness">www.korafitness.com</a></p>
		</footer>
		<!-- Footer Page End -->

		<!-- Modal Start-->
		<div id="myModal" class="admin-model modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		    	<form class="form-horizontal" id="login-form">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
		        <h4 class="modal-title">Refund</h4>
		      </div>
		      <div class="modal-body">
		        		
						  <!--<div class="form-group">
						    <label class="control-label col-sm-4" for="CustomerName">Customer Name</label>
						    <div class="col-sm-8"> 
						      <input type="text" class="form-control" id="pwd" placeholder="Customer Name">
						    </div>
						  </div> -->
						  <div class="form-group">
						    <label class="control-label col-sm-4" for="OrderId">Order Id</label>
						    <div class="col-sm-8"> 
						      <input type="text" class="form-control" id="showid" placeholder="Order Id" value="">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-4" for="RefundAmount">Refund Amount</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="RefundAmount" name="RefundAmount" placeholder="Refund Amount" required="">
						      <input type="hidden" class="form-control" id="amountid" placeholder="Refund Amount">
						      <input type="hidden" class="form-control" id="customerid" placeholder="Refund Amount">
						    </div>
						  </div>
						  <p id="error"></p>
						 
						
		      </div>
		      <div class="modal-footer text-center">
		         <button type="button" class="btn refund-btn" onclick="myFunction()" >SUBMIT</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<!-- Modal End-->

	  <!-- Script Start-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.menu-aim.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

		<!-- Data Table Starts Script -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

		<!-- Script End-->
		<script type="text/javascript">		
			
				function myFunction() {
					  var refundAmt = document.getElementById("RefundAmount").value;
					  var amountid = $(this).data('amount-id');
					  var amountUsed = document.getElementById("amountid").value;
					  if (refundAmt == '') { 
					  		$('#RefundAmount').focus();
					  		document.getElementById("error").innerHTML = "<p style='color:red;text-align:center;'><b>Please Fill Required Field</b></p>";
					  		$("#myModal").modal({
					            backdrop: 'static',
					            keyboard: false
					        });
            				return false;
					    }
					  else {

						 	if (refundAmt > amountUsed) {
							  	document.getElementById("error").innerHTML = "<p style='color:red;text-align:center;'><b>Refund Should not be greater then Amount Used</b></p>";
							  	return false;
							  }
							else {
							  	var adminid = document.getElementById("showid").value;
							  	var refundAmt = document.getElementById("RefundAmount").value;
							  	var customerid = document.getElementById("customerid").value;
							  	$refundAmt = refundAmt;
							  	$amount = adminid;
							  	$customerid = customerid;
							  	window.location.href="<?php echo $this->config->item('base_url_with_index').'kora_controller/amountRefund/' ?>" + $amount + "/"  + $refundAmt + "/" + $customerid;
							  }
					  }
					}
						$(document).on("click", "#refund", function() {
				    var adminid = $(this).data('id');
				    var amountid = $(this).data('amount-id');
				    var customerid = $(this).data('customer-id');
				    $(".modal-body #showid").val(adminid);
				    $(".modal-body #amountid").val(amountid);
				    $(".modal-body #customerid").val(customerid);
				});
					$(document).ready(function() {
					    $('#example').DataTable();
					 
					    $('input.global_filter').on( 'keyup click', function () {
					        filterGlobal();
					    } );
					 
					    $('input.column_filter').on( 'keyup click', function () {
					        filterColumn( $(this).parents('tr').attr('data-column') );
					    } );
					} );
		</script>
	</body>
</html>