
  <?php include("navigation.php");?>

  <?php 

  if(isset($_GET['id']) && isset($_GET['blog_id']))
  {
	$query = query("SELECT blog_id, blog_title, blog_details, blog_image, create_date 
					FROM user_blog
					WHERE user_id = '{$_GET['id']}' and blog_id = '{$_GET['blog_id']}'");
	confirm($query);
	while($row = fetch_assoc($query))
	{ 
	 
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
			  <li class="breadcrumb-item active"><a href="blogs">Blogs</a></li>
			  <li class="breadcrumb-item"><?php echo $row['blog_title']; ?></li>
			</ol>
		  </div><!-- /.col -->
		</div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
	  <div class="container-fluid">
		<form role="form" id="update_blog_form">
		<div class="row">
		<div class="col-md-8">
		  <div class="card">
			<div class="card-header">
			  <h2 class="card-title">Blog Details</h2>     
			</div>
			
			<div class="card-body">



			  <button id="btnOpen" class="btn btn-primary w-100" type="button">Open Blog Details</button>
			  <button id="btnPreview" class="btn btn-primary w-100" type="button" hidden="true">Preview Blog Details</button>
			 

			  <div class="form-group"> 
				<div class="details" name="details">
					<?php echo $row['blog_details']; ?>
				</div>

			  </div>

			</div>
			
		  
		  </div>
		</div>



		<div class="col-md-4">
		  <div class="card">
			<div class="card-header">
			  <h3 class="card-title">Title and Main Image</h3>
			</div>
			<div class="card-body">
			  <div class="form-group">
				<label for="exampleInputFile">Main Image</label>
				<h6 style="color: grey;" for="exampleInputFile">Recommended to upload a 1120x630 resolution landscape style for a better view of the page </h6>
				<div class="input-group">
				  <div class="custom-file">
					<!-- <input type="file"  > -->
					<input type="file" class="custom-file-input" id="image_file" name="image_file" onchange="loadFile(event)">
					<label class="custom-file-label" for="input_file">Choose File</label>
				  </div>
				</div>
			  </div>

	
			  <div class="text=center justify-content-center">
				<p class="text-center">
				<img id="output_image" class="w-75 h-50" src="<?php echo $row['blog_image']; ?>"/>
			  </p>
			  </div>


			  <div class="form-group">
				<label for="inputEstimatedBudget">Title</label>
				<input type="text" id="title" name="title" class="form-control" value="<?php echo $row['blog_title']; ?>">
			  </div>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
			  <button type="submit" class="btn btn-primary w-100" id="create_blogs">Update</button>
			</div>
			<div id="loader" style="display: none; text-align: center;">
			  <br><br>
			  <div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			  </div>
			  <br><br>
			  <h5><i>Please wait for a moment! Your blogs is being created!</i></h5>
			  <br>
			</div> 
		  </div>



		</div>
	  </div>
	  </form>


	  
	  </div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!--  -->
  <?php include("footer.php");?>
  <!--  -->

<script>

  $( document ).ready(function() {

	// SHOW BLOG TABLE ONLOAD
	$("#blog_table").load("functions/blog_list.php",{});



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



  // TO DISPLAY IMAGE UPON UPLOAD
  var loadFile = function(event) {
	var output_image = document.getElementById('output_image');
	output_image.src = URL.createObjectURL(event.target.files[0]);
	output_image.onload = function() {
	  URL.revokeObjectURL(output_image.src) // free memory
	}
  };


  // TO SHOW FILE NAME OF THE UPLOADED IMAGE
  $('#image_file').on('change',function(){
	  //get the file name
	  var fileName = $(this).val();
	  var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
	  $(this).next('.custom-file-label').html(cleanFileName);
  })


  

  $('#create_blog_form').validate({
	rules: {
	  image_file: {
		required: true,
	  },
	  title: {
		required: true
	  },
	},
	messages: {
	  image_file: {
		required: "Please upload a main image",
	  },
	  title: {
		required: "Please enter blog title"
	  },
	},
	errorElement: 'span',
	errorPlacement: function (error, element) {
	  error.addClass('invalid-feedback');
	  element.closest('.form-group').append(error);
	},
	highlight: function (element, errorClass, validClass) {
	  $(element).addClass('is-invalid');
	},
	unhighlight: function (element, errorClass, validClass) {
	  $(element).removeClass('is-invalid');
	},

	  submitHandler: function () {

		event.preventDefault();
		var myFormData = new FormData();

		var title = $("#title").val();
		var details = $(".details").summernote("code");
		var image_file = $('#image_file').prop('files')[0];

		myFormData.append('title', title);
		myFormData.append('details', details);
		myFormData.append('image_file', image_file);
		
				$.ajax({
				  url: 'functions/blog_create.php',
				  data: myFormData,
				  processData: false, // important
				  contentType: false, // important
				  type: 'POST',  
				  beforeSend:function(data)
					{
					  $("#create_blogs").attr("hidden", "true")
					  
					  $("#loader").show();
					  
					},
				  success: function(data)
					{
					  if(data == "Success")
					  {
						Swal.fire({
						  title: "Blog is Created!", 
						  text: "It can now be seen in the list of your Blogs!", 
						  icon: "success"}).then(function(){ 
							$(window).attr('location', 'dashboard');                      
						  }
						);

						   
					  }
					   
					}




				})
	 
  


	}

  });



 
	
	
  
</script>  

<?php       }

					}
				   ?>
							 

