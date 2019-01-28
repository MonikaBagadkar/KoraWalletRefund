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
	</head>
	<body class="admin-body">
		<!-- Login Page Start -->
	  <div class="container-fluid">
	    <div class="row login-page">
	      <div class="col-sm-offset-3 col-sm-6 col-lg-offset-4 col-lg-4">
		      <section class="log-in-box">
		      	<div class="logo-img">
	              <img src="https://cdn.shopify.com/s/files/1/2676/8804/files/Kora_Logo_Black2_x22.png?v=1515087092" alt="Korafitness" title="Korafitness" class="img-responsive ">
	            </div> 
	          	<h1>Korafitness Admin Panel</h1>
						<div class="login-form">
						  	<form action="<?php echo $this->config->item('base_url_with_index'); ?>kora_controller/adminLogin" method="post" enctype="multipart/form-data">
							  <div class="form-group">
							    <label for="email">User Name</label>
							    <input type="email" class="form-control" name="email" id="email" placeholder="User Name">
							  </div>
							  <div class="form-group">
							    <label for="pwd">Password</label>
							    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
							  </div>
							  <div class="form-group">
							    <p><a href="">Forgot Password?</a></p>
							  </div>
							  <div class="form-group text-center">
								  <button type="submit" class="btn admin-login-btn" name="loginSubmit">Login</button>
							  </div>
							</form>
	         			</div>
		      </section>
	      </div>
	    </div>
	  </div>
	  <!-- Login Page End -->

	  <!-- Script Start-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/js/jquery.menu-aim.js"></script>
	  <!-- Script End-->
	</body>
</html>