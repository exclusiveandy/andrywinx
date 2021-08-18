<!DOCTYPE html>
<?php include "../function.php";?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - AndrywinX</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition layout-top-nav dark-mode">
<div class="wrapper">

<nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
	<div class="container">
	  <a href="index.php" class="navbar-brand" style="width: 50%;">
		<img src="../images/andrywinxico.png" alt="andrywinxlogo" class="brand-image img-circle elevation-3"
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
				<a href="../index" class="nav-link">Home</a>
		  </li>
		  <li class="nav-item">
				<a href="../blogs" class="nav-link">Blogs</a>
		  </li>
		  <li class="nav-item">
				<a href="../reviews" class="nav-link">Reviews</a>
		  </li>
		  <li class="nav-item">
				<a href="../inquire" class="nav-link">Inquire</a>
		  </li>
		  <li class="nav-item">
				<a href="../gallery" class="nav-link">Gallery</a>
		  </li>
		  <li class="nav-item">
				<a href="../events" class="nav-link">Events</a>
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



<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		
	</div>

	<!-- Main content -->
	<div class="content">
		<div class="container">
			<div class="row justify-content-center">

				<div class="login-box">
				  <div class="login-logo">
				    <a href="index"><b>Have a Good Day!!!</b></a>
				  </div>
				  <!-- /.login-logo -->
				  <div class="card">
				    <div class="card-body login-card-body">
				      <p class="login-box-msg">Login to create contents</p>
				       <?php user_login(); ?>
				      <form action="login" method="post">
				        <div class="input-group mb-3">
				          <input type="email" class="form-control" placeholder="Email" name="email" id="email">
				          <div class="input-group-append">
				            <div class="input-group-text">
				              <span class="fas fa-envelope"></span>
				            </div>
				          </div>
				        </div>
				        <div class="input-group mb-3">
				          <input type="password" class="form-control" placeholder="Password" name="password">
				          <div class="input-group-append">
				            <div class="input-group-text">
				              <span class="fas fa-lock"></span>
				            </div>
				          </div>
				        </div>
				        <div class="row">
				          <div class="col-8">
				            <div class="icheck-primary">
				              <input type="checkbox" id="remember">
				              <label for="remember">
				                Remember Me
				              </label>
				            </div>
				          </div>
				          <!-- /.col -->
				          <div class="col-4">
				            <button type="submit" class="btn btn-primary btn-block" name="login" id="login">Sign In</button>
				          </div>

				          <!-- /.col -->
				        </div>
				      </form>
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
</body>
</html>