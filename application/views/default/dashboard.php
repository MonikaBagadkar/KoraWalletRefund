
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
								                <td><?php echo $UserDetails['shopify_customer_id']; ?></td>
								                <td><?php echo $UserDetails['credit_amount']; ?></td>
								                <td><?php echo $UserDetails['created_at']; ?></td>
								                <td><?php echo $UserDetails['next_charge_scheduled_at']; ?></td>
								                <td>
								                	<a class="btn btn-xs btn-view" href="<?php echo $this->config->item('base_url_with_index').'orders/'.$UserDetails['shopify_customer_id']; ?>">
								                		<i class="fa fa-search"></i> View</a>
									        		<!--<a href="#" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>-->
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
		