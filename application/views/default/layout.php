<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<title>Athletic Gym Performance Apparel That Gives to Charity Every Purchase – Kora Fitness LLC.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
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
							<!--<img src="https://ca.slack-edge.com/T0CDKKV3R-U0CDPR5ME-c9b149502a45-48" alt="avatar">-->
							<?php if ($this->session->userdata('logged_user')) { ?>
								Welcome <?php echo $this->session->userdata['logged_user']['username']; ?>
							<?php  } ?>
						</a>
						<ul>
							<li><a href="#0">My Account</a></li>
							<li><a href="<?php echo $this->config->item('base_url_with_index').'logout/' ?>">Logout</a></li>
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
						<a href="<?php echo base_url(); ?>">Dashboard</a>
					</li>
					<!--<li class="customers">
						<a href="https://korafitness.com/">Customers</a>
					</li>
					<li class="orders">
						<a href="orders.html">Orders</a>
					</li>-->
				</ul>
				<ul>
					<li class="cd-label">Action</li>
					<li class="action-btn"><a href="<?php echo $this->config->item('base_url_with_index').'logout/' ?>">+ Logout</a></li>
				</ul>
			</nav>

<?php $this->load->view($view, $data); ?>


<!-- Main Page End -->

		<!-- Footer Page Start -->
		<footer class="container-fluid text-center footer-section">
		  <p><a href="https://korafitness.com" title="korafitness">www.korafitness.com</a></p>
		</footer>
		<!-- Footer Page End -->

	  <!-- Script Start-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.menu-aim.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
		
		<!-- Data Table Starts Script -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
		  
		  function filterGlobal () {
		    $('#example').DataTable().search(
		        $('#global_filter').val(),
		        $('#global_regex').prop('checked'),
		        $('#global_smart').prop('checked')
		    ).draw();
		}
		 
		function filterColumn ( i ) {
		    $('#example').DataTable().column( i ).search(
		        $('#col'+i+'_filter').val(),
		        $('#col'+i+'_regex').prop('checked'),
		        $('#col'+i+'_smart').prop('checked')
		    ).draw();
		}
		 
		function refundAmount() {
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
					  	window.location.href="<?php echo $this->config->item('base_url_with_index').'Admin/amountRefund/' ?>" + $amount + "/"  + $refundAmt + "/" + $customerid;
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
			    $('#example').DataTable({
				"order": []
			    });
			 
			    $('input.global_filter').on( 'keyup click', function () {
			        filterGlobal();
			    } );
			 
			    $('input.column_filter').on( 'keyup click', function () {
			        filterColumn( $(this).parents('tr').attr('data-column') );
			    } );

			$(document).on("click", "#resetBtn", function() {
			  	 var shopifyid = $(this).data('shopifyid');
			  	 var creditamount = $(this).data('creditamount');
			  	 $(".modal-body #customerid").val(shopifyid);
			  	 $(".modal-body #creditamt").val(creditamount);
			  });


			$("#btnRefund").click(function(){
			  	 var customerid = document.getElementById("customerid").value;
			  	 var refundAmt = document.getElementById("refundamount").value;
			  	 var creditamt = document.getElementById("creditamt").value;
			  	 var button1 = document.getElementById("addrefund");
				 var button2 = document.getElementById("subtractrefund");
				  	 if (button1.checked){

						if (refundAmt == '') { 
					  		$('#refundamount').focus();
					  		document.getElementById("errormsg").innerHTML = "<p style='color:red;text-align:center;'><b>Please fill required field</b></p>";
					  		$("#addModal").modal({
					            backdrop: 'static',
					            keyboard: false
					        });
							return false;
					    }
					  else {
					    var customerid = document.getElementById("customerid").value;
			  	 		var refundAmt = document.getElementById("refundamount").value;
			  	 		var creditamt = document.getElementById("creditamt").value;
						$customerid = customerid;
			  	 		$creditamt = creditamt;
			  	 		$refundAmt = refundAmt;
			  	 		window.location.href="<?php echo $this->config->item('base_url_with_index').'Admin/addRefund/' ?>" + $customerid + "/"  + $creditamt + "/" + $refundAmt;
					  }

					} else if (button2.checked) {

					if (refundAmt == '') { 
					  		$('#refundamount').focus();
					  		document.getElementById("errormsg").innerHTML = "<p style='color:red;text-align:center;'><b>Please fill required field</b></p>";
					  		$("#addModal").modal({
					            backdrop: 'static',
					            keyboard: false
					        });
							return false;
					    }
					  else {
					  	if (refundAmt > creditamt) {
					  	document.getElementById("error").innerHTML = "<p style='color:red;text-align:center;'><b>Amount to subtract should not be greater then amount in wallet</b></p>";
					  	return false;
					  	}
					  else {
					  	var customerid = document.getElementById("customerid").value;
			  	 		var refundAmt = document.getElementById("refundamount").value;
			  	 		var creditamt = document.getElementById("creditamt").value;
						 $customerid = customerid;
					  	 $creditamt = creditamt;
					  	 $refundAmt = refundAmt;
					  	 window.location.href="<?php echo $this->config->item('base_url_with_index').'Admin/subtractRefund/' ?>" + $customerid + "/"  + $creditamt + "/" + $refundAmt;
					  	}
					  }
					}
			  });
			});
		</script>
		<!--Data Table End Script -->
		<!-- Script End-->

	</body>
</html>
