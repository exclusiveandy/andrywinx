<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Blogs - Lumikha at Maglaro</title>

  <link rel="icon" href="images/andrywinxico.png">
  <link rel="stylesheet" href="css/adminlte.css">  
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

</head>

<body class="hold-transition layout-top-nav dark-mode">
<div class="wrapper">

<nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
	<div class="container">
	  <a href="index.php" class="navbar-brand" style="width: 50%;">
		<img src="images/andrywinxico.png" alt="andrywinxlogo" class="brand-image img-circle elevation-3"
			 style="opacity: .8">
		<span class="brand-text font-weight-bold" style="letter-spacing: 3px;">AndrywinX</span>
	  </a>

	  <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  
	  <div class="collapse navbar-collapse order-3" id="navbarCollapse">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
		 
		  <li class="nav-item">
				<a href="index" class="nav-link">Home</a>
		  </li>
		  <li class="nav-item">
				<a href="blogs" class="nav-link">Blogs</a>
		  </li>
		  <li class="nav-item">
				<a href="reviews" class="nav-link">Reviews</a>
		  </li>
		  <li class="nav-item">
				<a href="inquire" class="nav-link">Inquire</a>
		  </li>
		  <li class="nav-item">
				<a href="gallery" class="nav-link">Gallery</a>
		  </li>
		  <li class="nav-item">
				<a href="events" class="nav-link">Events</a>
		  </li>

		</ul>

		<!-- SEARCH FORM -->
		<form class="form-inline ml-0 ml-md-3">
		  <div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
			  <button class="btn btn-navbar" type="submit">
				<i class="fas fa-search"></i>
			  </button>
			</div>
		  </div>
		</form>
	  </div>

	</div>
  </nav>
  <!-- /.navbar -->

  
<?php include "function.php";?>
	

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		
	</div>

	<!-- Main content -->
	<div class="content">
		<div class="container">


			<div class="row">
				<div class="col-md-8">
				
						
					<h3>Featured Blogs</h3>
					
					<?php

					$query = query("SELECT blog_id, blog_title, SUBSTRING(blog_image, 4) as blog_image, blog_details
									FROM user_blog
									WHERE is_featured = 1");
					confirm($query);


					while($row = fetch_assoc($query))
					{ 
					?>

					<div class="card">
						<img src="<?php echo $row['blog_image']; ?>" class="card-img-top" alt="..." width="100%" height="200px">
						<div class="card-body">
							<h4><?php echo $row['blog_title']; ?></h4>
							<p class="card-text"></p>
							<a href="<?php echo $row['blog_id'];?>" class="btn btn-primary">Read</a>
						  </div>
					</div>

					<?php
					}
					?>


				</div>


				<!-- GAMING REVIEWS SECTION -->
				<div class="col-md-4">
				   
					<h3>Gaming Reviews</h3>

					<div class="card bg-dark text-white">
					  <img src="images/1.png" class="card-img" alt="...">
					  <div class="card-img-overlay">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a class="card-text" href="#">Last updated 3 mins ago</a>
					  </div>
					</div>
			   

	
						<div class="card">
							<div class="card-header">
								<h5 class="m-0 text-danger">F</h5>
							</div>
							<div class="card-body">
								<p class="card-text " style="overflow: hidden; white-space: normal; text-overflow: ellipsis; height: 115px;">
								   
								</p>
								<a href="pages/announcements.php" class="card-link">View</a>
							</div>
						</div>

						<div class="col-md-12" style="padding-bottom: 4%; padding-top: 4%;">
							<h1 class="m-0 text-dark " style="font-size: 20pt; font-style: italic;">  Follow us on </h1>
						</div>

						<div class="card">

							<div class="card-body">
								<ul>
									<
										<li>
											<a href="" target="_blank" style="font-style: italic;">
												<i class="fa fa-facebook"></i></a>
										</li>
										
								</ul>
							</div>

						</div>

				</div>

			</div>

		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /.content -->
	<br><br>
</div>
	
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
	<div class="p-3">
	  <h5>Title</h5>
	  <p>Sidebar content</p>
	</div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
	<!-- To the right -->
	<div class="float-right d-none d-sm-inline">
	  Version 1.0
	</div>
	<!-- Default to the left -->
	<strong>Copyright &copy; 2019-2020 <a href="https://pup.edu.ph">Polytechnic University of the Philippines</a>.</strong> All rights reserved.
  </footer>


   <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
</body>
</html>