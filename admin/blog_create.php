
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
			  <li class="breadcrumb-item"><a href="blogs">Blogs</a></li>
			  <li class="breadcrumb-item active">Create Blog</li>
			</ol>
		  </div><!-- /.col -->
		</div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
	  <div class="container-fluid">
	  	<form role="form" id="create_blog_form">
		<div class="row">
		<div class="col-md-8">
		  <div class="card">
			<div class="card-header">
			  <h2 class="card-title">Create Blog</h2>     
			</div>
			
			<div class="card-body">
			  
		

			  <div class="form-group text-center">
				<label for="inputEstimatedBudget">Details</label>
			  </div>
			  
			  <button id="btnOpen" class="btn btn-primary w-100" type="button">Open Blog Details</button>
			  <button id="btnPreview" class="btn btn-primary w-100" type="button" hidden="true">Preview Blog Details</button>
			 
			  <div class="form-group"> 
				<div class="details" name="details">
				  <br><br>
				  
				  <h3 id="h-what-exactly-are-creator-coins">What Exactly Are Creator Coins?</h3>       
				  <p>Creator coins are a custom-branded form of digital currency. Effectively, this means you can create your own cryptocurrency and develop a virtual economy around your digital business.</p>
				  <p>Why would you want to do this? Well, for very good reasons that you may not immediately realize.&nbsp;</p> 
				  <p>Here are three main ways creator coins are used by those who make them:</p>
				  <ul><li><strong>Spend:</strong> Your audience members buy and transfer coins to you directly in the form of a tip or donation. Or your community uses your coins to purchase a product, service, or event ticket.</li><li><strong>Hold: </strong>Like other forms of cryptocurrency, people can hold your coins as a digital asset that has the intrinsic benefit of gaining them access to products, services, events, coaching, and consulting according to criteria you establish.</li><li><strong>Earn:</strong> Your audience members and fans can earn your coins in exchange for referrals and repeat purchases. You can also do coin giveaways to those who hold a certain amount of coin, or for any other reason you think is appropriate.</li></ul>

				  <p>At the most familiar level, a creator coin can be used as a reward for your audience and loyal customers, much like airline miles or credit card points. Combined with referral-tracking software like <a href="https://sparkloop.app/?via=brian">Sparkloop</a> (disclosure: I&#8217;m an investor), you can award coins to people who send you new email subscribers, and they, in turn, can use those coins for merchandise, access to special bonuses or events, and product discounts.</p>
				  <p class="text-center"><img alt="" class="aligncenter size-large w-75 h-25 text-center" src="https://c4.wallpaperflare.com/wallpaper/905/666/494/background-render-fon-bitcoin-bitcoin-hd-wallpaper-preview.jpg" width="1152"></p>
				  <p>A creator coin is also a way for your fans to simply support you for the free value you provide with content. And that’s where the “spend” option comes in as a tip or form of patronage where coins are purchased and sent back to you. Eventually, you can charge for all sorts of valuable stuff with your currency, which brings it back home to you without being sold to a third-party.</p>


				  <br><br>
				  <figure class="text-center">
					<blockquote class="blockquote">
					  <p>A well-known quote, contained in a blockquote element.</p>
					</blockquote>
					<figcaption class="blockquote-footer">
					  Someone famous in <cite title="Source Title">Source Title</cite>
					</figcaption>
				  </figure>
				</div>

			  </div>

			</div>
			
			<!-- /.card-body -->
			
			
		  
		  </div>
		  <!-- /.card -->
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
					<img id="output_image" class="w-75 h-50"/>
			 		</p>
			  	</div>


				<div class="form-group">
					<label for="inputEstimatedBudget">Title</label>
					<input type="text" id="title" name="title" class="form-control">
				</div>
		  	</div>
		 	<!-- /.card-body -->
		  	<div class="card-footer">
				<button type="submit" class="btn btn-primary w-100" id="create_blogs">Submit</button>
				<div id="loader" class="text-center">
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

	 $('#blog_table_id').DataTable({
	  "paging": true,
	  "lengthChange": false,
	  "searching": false,
	  "ordering": true,
	  "info": true,
	  "autoWidth": false,
	  "responsive": true,
	});



	// SHOW BLOG TABLE ONLOAD
	$("#loader").hide();


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
		url: 'functions/blog_delete.php',
		success: function(data) {
		  $("#blog_table").load("functions/blog_list.php",{

		  });



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

