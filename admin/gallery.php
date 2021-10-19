
  <?php include("navigation.php");

  ?>
  <title>Gallery - AndrywinX</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Gallery Blog</h2>     
            </div>

            <form>
                <div class="card-body">
           
                    
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">What is data type?</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label">Radio</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1" checked>
                      <label class="form-check-label">Radio checked</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio">
                      <label class="form-check-label">Radio disabled</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>


           
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

