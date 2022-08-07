<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AndrywinX - Lumikha at Maglaro</title>

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

			<h3 class="text-center">Featured Events</h3>
			<br>

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php 
			$image_carrousel = query("SELECT MIN(picture_id) as min, picture_name from res_picture");
			  $row_first = fetch_assoc($image_carrousel);
			  ?>

				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100 rounded" src="images/codtour.jpg" alt="First slide">
					</div>

					<?php
				 $all_image_query = query("SELECT picture_id, picture_name from res_picture where
				  picture_id <> (SELECT MIN(picture_id) as min from res_picture)");

				 while($row_image = fetch_assoc($all_image_query))
				 {
			  ?>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/codtour.jpg" alt="First slide">
						</div>
						<?php
			}

			?>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<br>
			<div class="row">
			</div>


			<div class="card">
			  <div class="card-body">
			    <h2 class="text-left">Upcoming Events</h2><br>
			    <p class="card-text">Palupit ng palupit ang pinapakita ng mga bawat koponan kung meron silang pinaglalaban! Kaya naman ginawa ang paligsahan na ito upang ipamalas ang galing ng bawat isa!</p>
			    <br>
    			<table class="table table-bordered">
            <thead>
              <tr>
                <th>Date Schedule</th>
                <th>Events</th>
                <th>Number of Teams</th>
                <th>Prize</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style ="word-break:break-word;">January 1, 2021</td>
                <td style ="word-break:break-word;"><a href="#">The Open League Tournament</a></td>
                <td style ="word-break:break-word;">098795465</td>   
              </tr>
            
            </tbody>
          </table>    			
	        
			  </div>
			</div>



			<h3 class="text-center">Featured Roster</h3><br>

			<div class="card">
			  <div class="card-body">
			    <h2 class="text-center">Angas Bagsik Season 1 Roster</h2>
			    <p class="card-text">asdasdasd</p>
			    <br>
			    <div class="card">
              <div class="card-header">
								<h3 class="card-title">Team Nigma</h3>
              </div>
              <div class="card-body">
              	<div class="row">
              		<div class="col-md-4 text-center">
              			<img src="images/nigma.png" class="img-fluid rounded-start w-100 " alt="...">
              			<br>
              		</div>
              		<div class="col-md-8">   
              			<table class="table table-bordered text-center">
	                  <thead>
	                    <tr>
	                      <th class="text">Position</th>
	                      <th>Names</th>
	                      <th>Game ID</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                    <tr>
	                      <td>Core</td>
	                      <td>Aldwin Maquinto</td>
	                      <td>098795465</td>   
	                    </tr>
	                    <tr>
	                      <td>Core</td>
	                      <td>Aldwin Maquinto</td>
	                      <td>098795465</td>   
	                    </tr>
	                    <tr>
	                      <td>Core</td>
	                      <td>Aldwin Maquinto</td>
	                      <td>098795465</td>   
	                    </tr>
	                    <tr>
	                      <td>Core</td>
	                      <td>Aldwin Maquinto</td>
	                      <td>098795465</td>   
	                    </tr>
	                    <tr>
	                      <td>Core</td>
	                      <td>Aldwin Maquinto</td>
	                      <td>098795465</td>   
	                    </tr>   
	                  </tbody>
	                </table>    			
              		</div>
              	</div>
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