
  <?php include("navigation.php");

  ?>
  <title>Blogs - AndrywinX</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-sm-6">
			<h1 class="m-0">Blogs</h1>
		  </div><!-- /.col -->
		  <div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
			  <li class="breadcrumb-item active">Blogs</li>
			</ol>
		  </div><!-- /.col -->
		</div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
	  <div class="container-fluid">

	  	<a type="button" href="blog_create" class="btn btn-secondary w-100">Create Blog</a>
		<div class="row">
		

		<div class="col-md-12">          
		  <!-- /.card -->
		  <div class="card">
			<div class="card-header text-center">
			 	<h3 class="card-title" style="text-align: center;">List of Blogs</h3>			  
			</div>
			<div class="card-body">
				<table id="blog_table_id" class="table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th style="width:400px;">Title</th>
							<th>Date Created</th>
							<th># of Views</th>
							<th>Featured</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					
				</table>
			</div>
			<!-- /.card-body -->
		  </div>
		  <!-- /.card -->
		</div>
	  </div>


	  
	  </div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!--  -->
  <?php include("footer.php");?>
  <!--  -->

<script>


var blogDataTable; // FOR DELETE FUNCTION

$( document ).ready(function() {

	blogDataTable = $('#blog_table_id').DataTable({
		'processing': false,
		'serverSide': false,
		'responsive': true,
		'serverMethod': 'post',
		'ajax': {
			'url':'functions/blog/blog_list.php',
		},
		'columns': [
			{ data: 'title' },
			{ data: 'date' },
			{ data: 'views' },
			{ data: 'is_featured' },
			{ data: 'action' },
		 ]
	  });

	// setInterval( function () {
	// 	blogDataTable.ajax.reload( null, false );
	// }, 1000 );


	// SHOW BLOG TABLE ONLOAD
	// $("#blog_table").load("functions/blog_list.php",{});



	// EDIT AND SAVE FUNCTION FOR EDITOR
	$("#btnOpen").click(function(){
		$('.details').summernote({
		  focus: true,
		  height: 1000,
		});

		$("#btnPreview").removeAttr("hidden", "true");
		$("#btnOpen").attr("hidden", "true");

	}); 
	$("#btnPreview").click(function(){
		var markup = $('.details').summernote('code');
		$('.details').summernote('destroy');

		$("#btnPreview").attr("hidden", "true");
		$("#btnOpen").removeAttr("hidden", "true");
	}); 



  });




  // DELETE FUNCTION

  function deleteFunction(id) {
  event.preventDefault();
  var blog_id = id;
  Swal.fire({
	title: 'Are you sure you want to delete this blog?',
	text: "You won't be able to revert this!",
	icon: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#d33',
	cancelButtonColor: '#3085d6',
	confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
	if (result.isConfirmed) {
	  $.ajax({
		method: 'POST',
		data: {'delete': true, 'blog_id' : blog_id },
		url: 'functions/blog/blog_delete.php',
		success: function(data) {
		  blogDataTable.ajax.reload( null, false );



		}
	  });
	
	  Swal.fire(
		'Deleted!',
		'Your blog has been deleted.',
		'success'
	  )


	}
  })

  }












 
	
	
  
</script>  

