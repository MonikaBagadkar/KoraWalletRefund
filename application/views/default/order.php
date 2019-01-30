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
					  					<li > <a href="<?php echo base_url(); ?>" >dashboard</a> </li>
					  					<li> Orders </li> 
					  				</ul> 
					  			</div>
					  	  </div>
					  	</div>
					  </div>
					  <!-- Page Header section End -->

	          
	          
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