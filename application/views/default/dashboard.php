
			<!-- Sidenav Page End -->

			<div class="content-wrapper">
				<section class="page page-dashboard">
					<div class="container-fluid">

						<!-- Page Header section start -->
					  <div class="row">
					  	<div class="col-md-12 col-lg-12">
					  		<div class="pageheader">
					  			<h2> Dashboard <span>	Korafitness Admin Panel </span> </h2> 
					  			<div class="page-bar">
					  				<ul class="page-breadcrumb">
					  					<li>
					  						<a href="#">
					  							<i class="fa fa-home"></i> Korafitness
					  						</a>
					  					</li>
					  					<li> 
					  						<a href="./"> Dashboard </a> 
					  					</li> 
					  				</ul> 
					  			</div>
					  	  </div>
					  	</div>
					  </div>
					
					 
	      		 	
	          <!-- Customers List section start -->
					  <div class="row">
					  	<div class="col-lg-12">
					  		<div class="view-data-table">
					  			<h2>Customers List</h2>
								  	<p>The Customers Information:</p> 
						  			<div class="table-responsive">
									  <table id="example" class="table table-bordered" style="width:100%">
								        <thead class="data-table-head">
								            <tr>
								                <th>Customer Id</th>
								                <th>Email</th>
								                <th>Name</th>
										        <th>Shopify Customer Id</th>
										        <th>Credit Amount</th>
										        <th>Order Date</th>
										        <th>Next Scheduled Date</th>
										        <th>Action</th>
								            </tr>
								        </thead>
								        <tbody>
								        	 <?php 
						      				foreach ($userDetails as $UserDetails) {  //echo "<pre>"; print_r($UserDetails); ?> 
								            <tr>
								                <td><?php echo $UserDetails['customer_id']; ?></td>
								                <td><?php echo $UserDetails['customer_email']; ?></td>
								                <td><?php echo $UserDetails['customer_name']; ?></td>
								                <td><?php echo $UserDetails['shopify_customer_id']; ?></td>
								                <td><?php echo $UserDetails['credit_amount']; ?></td>
								                <td><?php echo $UserDetails['created_at']; ?></td>
								                <td><?php echo $UserDetails['next_charge_scheduled_at']; ?></td>
								                <td>
								                	<a class="btn btn-xs btn-view" href="<?php echo $this->config->item('base_url_with_index').'orders/'.$UserDetails['shopify_customer_id']; ?>"> View</a><br>
									        		<button class="btn btn-xs btn-view" id="resetBtn" data-toggle="modal" data-target="#resetModal"  data-shopifyid="<?php echo $UserDetails['shopify_customer_id']; ?>" data-creditamount="<?php echo $UserDetails['credit_amount']; ?>">Reset</button> 
								                </td>
								            </tr>
								            <?php } ?>  
								        </tbody>
								    	</table>
									</div>
					  		</div>
					  	</div>
					  </div>
					  <!-- Customers List section End -->

					</div>
				</section>
			</div>
		</main>
				<!-- Modal Start-->
		<div id="resetModal" class="admin-model modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		    	<form class="form-horizontal" id="login-form">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
		        <h4 class="modal-title">Reset Refund</h4>
		      </div>
		      <div class="modal-body">
		      				<div class="form-group">
							    <label class="control-label col-sm-4" for="CustomerId">Customer Id</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="customerid">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-4" for="RefundAmount">Credit Amount</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" readonly="" id="creditamt" placeholder="Credit Amount">
							    </div>
							  </div>
							    <div class="form-group">
							    <label class="control-label col-sm-4" for="RefundAmount">Select Option to reset refund</label>
							    <div class="col-sm-8">
							      <input type="radio" class="" id="addrefund" name="radio"> Add Refund   
							      	&nbsp&nbsp
							      <input type="radio" class="" id="subtractrefund"  name="radio">  Subtract Refund
							    </div>
							  </div>
							<div class="form-group">
							    <label class="control-label col-sm-4" for="RefundAmount">Refund Amount</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="refundamount" placeholder="Refund Amount">
							    </div>
							  </div> 
							  <p id="errormsg"></p>

						   <!-- <div class="btn-add-sub">
						  	<button type="button" class="btn refund-btn" id="add" data-toggle="modal" data-dismiss="modal" data-target="#addModal">Add Refund Reset</button>
						    <button type="button" class="btn refund-btn" id="add" data-toggle="modal" data-dismiss="modal" data-target="#subtractModal">Subtract Refund Reset</button>
						  </div>
						  <p id="error"></p>-->
						  
						<div class="modal-footer text-center">
					    	<button type="button" id="btnRefund" class="btn refund-btn" onclick="" >SUBMIT</button>
					    </div>
						  <p id="errormsg"></p>
						  <p id="error"></p>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<!-- Modal Start-->
		<div id="addModal" class="admin-model modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		    	<form class="form-horizontal" id="login-form">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
			        <h4 class="modal-title">Add Refund Reset</h4>
			      </div>
			      <div class="modal-body">
			      			  <div class="form-group">
							    <label class="control-label col-sm-4" for="CustomerId">Customer Id</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="customerid">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-4" for="RefundAmount">Credit Amount</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="creditamt" placeholder="Credit Amount">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-4" for="RefundAmount">Add Refund Amount</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="refundamount" placeholder="Refund Amount">
							    </div>
							  </div>
							  <p id="errormsg"></p>
			      </div>
			       <div class="modal-footer text-center">
			         <button type="button" id="btnAdd" class="btn refund-btn" onclick="addRefund()" >SUBMIT</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>

		<!-- Modal Start-->
		<div id="subtractModal" class="admin-model modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		    	<form class="form-horizontal" id="login-form">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
			        <h4 class="modal-title">Subtract Refund Reset</h4>
			      </div>
			      <div class="modal-body">
			      			  <div class="form-group">
							    <label class="control-label col-sm-4" for="CustomerId">Customer Id</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="customerid">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-4" for="RefundAmount">Credit Amount</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="creditamt" placeholder="Credit Amount">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-4" for="RefundAmount">Subtract Refund Amount</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="subtractrefund" placeholder="Refund Amount">
							    </div>
							  </div>
							  <p id="errormessage"></p>
			      </div>
			       <div class="modal-footer text-center">
			         <button type="button" id="btnSubtract" class="btn refund-btn" onclick="subtractRefund()" >SUBMIT</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>

