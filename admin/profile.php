
  <?php include("navigation.php");

  ?>
  <title>Profile - AndrywinX</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
         <div class="card w-100">
     <!--      <div class="card-header">
            <h1 class="card-title">Update Profile</h1>
          </div>    -->       
          <div class="card-body">
          <span id="result"></span>



            <div class="row">
              <div class="col-lg-7">
                <div class="card">
                  <div class="card-header">
                    <h1 class="card-title">User's Profile</h1>
                  </div>  
                  <form role="form" id="user_profile_form">
                  <div class="card-body">
                  <?php 
                  session_check();
                  validate();
                  if(isset($_GET['id']))
                  {
                    $query = query("SELECT user_id, user_fname, user_mname, user_lname, user_contact, user_mailaddress, user_facebook, user_youtube, user_twitter, user_bio, user_email, user_password FROM user_profile WHERE user_id = '{$_GET['id']}'");
                    confirm($query);
                    while($row = fetch_assoc($query))
                    { 
                     
                  ?>
                    


              
                                    

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight:500;">Firstname</label>
                            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['user_fname']; ?>" placeholder="First Name">
                            <span id="error_fname" class="text-danger"></span>
                        </div>                               
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight:500;">Middlename</label>
                            <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $row['user_mname']; ?>" placeholder="Middle Name">
                            <span id="error_mname" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight:500;">Lastname</label>
                            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['user_lname']; ?>" placeholder="Last Name">
                            <span id="error_lname" class="text-danger"></span>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight:500;">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $row['user_contact']; ?>" placeholder="09********" onkeyup="this.value=this.value.replace(/[^0-9]/g, '')" maxlength="11">
                            <span id="error_contact" class="text-danger"></span>
                        </div>                              
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight:500;">Mailing Address</label>
                            <input type="text" class="form-control" id="maddress" name="maddress" value="<?php echo $row['user_mailaddress']; ?>" placeholder="Mailing Address">
                            <span id="error_mailaddress" class="text-danger"></span>
                        </div>
                      </div>
                      
                    </div>
                    <hr>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight:500;">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $row['user_facebook']; ?>" placeholder="Facebook Link">
                            <span id="error_fname" class="text-danger"></span>
                        </div>                               
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight:500;">Youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo $row['user_youtube']; ?>" placeholder="Youtube Link">
                            <span id="error_mname" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight:500;">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $row['user_twitter']; ?>" placeholder="Twitter Link">
                            <span id="error_lname" class="text-danger"></span>
                        </div>
                      </div>
                    </div>



                 
                    <div class="form-group">
                      <label for="exampleInputPassword1" style="font-weight:500;">Bio Statement</label>
                      <textarea class="form-control" rows="3" placeholder="..." name="bio" id="bio"><?php echo $row['user_bio']; ?></textarea>
                      <span id="error_biostatement" class="text-danger"></span>
                    </div>


                            
                              

                  </div>
                  <div class="card-footer">

                  <div id="loader" style="display: none; text-align: center;">                
                    <div class="spinner-border" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <p>Please wait...</p>
                  </div>
                  <button style="width: 100%;" type="submit" class="btn btn-primary" name="update_profile" id="update_profile">Update Info</button>

                  </div>
                </form>
                </div>
              </div>


              <div class="col-lg-5">
                  
                  <div class="card">
                     <div class="card-header">
                        <h3 class="card-title">Login Info</h3>
                     </div>
                     <!-- /.card-header -->
                     <!-- form start -->
                     <form role="form" id="user_login_form">
                        <div class="card-body">
                           <div class="form-group">
                              <label for="exampleInputPassword1" style="font-weight:500;">Email Address</label>
                              <input disabled type="email" class="form-control" id="email" name="email" value="<?php echo $row['user_email']; ?>" placeholder="Email Address">
                              <span id="error_email" class="text-danger"></span>
                           </div>
                           <hr>
                          
                           <div class="form-group">
                              <label for="exampleInputPassword1" style="font-weight:500;">Current Password</label>
                              <input type="password" class="form-control" id="currentpassword" name="currentpassword" placeholder="Password">
                              <span id="error_currentpassword" class="text-danger"></span>
                           </div>

                           <hr>

                           <div class="form-group">
                              <label for="exampleInputPassword1" style="font-weight:500;">New Password</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Confirm Password">
                              <span id="check"></span>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1" style="font-weight:500;">Confirm New Password</label>
                              <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password">
                              <span id="check"></span>
                           </div>
                        </div>                        <!-- /.card-body -->
                        <div class="card-footer">

                        <div id="loader2" style="display: none; text-align: center;">                
                          <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                          <p>Please wait...</p>
                        </div>
                        <button style="width: 100%;" type="submit" class="btn btn-primary" name="changepassword" id="changepassword">Change Password</button>

                        </div>
                      
                       
                     </form>
                   
                  </div>
               </div>

            </div>


        

          </div>

        

        </div>
          
        </div>
        <!-- /.row -->


      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!--  -->
  <?php include("footer.php");?>
  <!--  -->
  <script>

  $('#user_profile_form').validate({
    rules: {
      fname: {
        required: true,
      },
      lname: {
        required: true
      },
      contact: {
        required: true
      },
      maddress: {
        required: true,
        email: true,
      },
      bio: {
        required: true,
      },
    },
    messages: {
      fname: {
        required: "Please enter your firstname",
      },
      lname: {
        required: "Please enter your lastname"
      },
      contact: {
        required: "Please enter your contact number"
      },
      maddress: {
        required: "Please enter your mailling address",
        email: "Please enter a valid email",
      },
      bio: {
        required: "Type something on your bio",
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
     
      var fname = $("#fname").val();
      var mname = $("#mname").val();
      var lname = $("#lname").val();
      var maddress = $("#maddress").val();
      var facebook = $("#facebook").val();
      var youtube = $("#youtube").val();
      var twitter = $("#twitter").val();
      var bio = $("#bio").val();
      var contact = $("#contact").val();
      $.ajax({
        url: 'functions/profile_update.php',
        data: {
          fname:fname, 
          mname:mname, 
          lname:lname, 
          maddress:maddress, 
          facebook:facebook, 
          youtube:youtube, 
          twitter:twitter, 
          contact:contact, 
          bio:bio
        },
        type: 'POST',
        beforeSend:function()
        {
          $("#update_profile").attr("hidden", "true");
          $("#loader").show();
        }, 

        success: function(data){
          if(!data.error)
          {            
            $("#update").removeAttr("hidden", "true");
            $("#loader").hide();
 
            $("#result").html(data);
            Swal.fire({
              title: "Updated Succefully!", 
              text: "Profile was updated", 
              
              icon: "success"}).then(function(){ 
              location.href = 'dashboard';
              }
            );
          }
          else{
            
          }

        }
      })

    }

  });

  $('#user_login_form').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      currentpassword: {
        required: true,
      },
      password: {
        required: true,
      },
      cpass: {
        required: true,
        equalTo: "#password",
      },
    },
    messages: {
      email: {
        required: "Please enter your mailling address",
        email: "Please enter a valid email",
      },
      currentpassword: {
        required: "Enter your current password to change password",
      },
      password: {
        required: "Enter your new desired password"
      },
      cpass: {
        required: "Enter to confirm your desired password",
        equalTo: "Password does not match"
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

        var password = $("#currentpassword").val();
        var hash = '<?php echo $row['user_password'];?>';
        var cpass = $("#cpass").val();


        $.ajax({
          url: 'functions/profile_changepassword.php',
          data: {password:password, hash:hash, cpass:cpass},
          dataType: "json",
          type: 'POST', 
          beforeSend:function()
          {
            $("#changepassword").attr("hidden", "true");
            $("#loader2").show();
          }, 
          success: function(data){

            if(data.status == "Updated")
            {                              
              $("#changepassword").removeAttr("hidden", "true");
              $("#loader2").hide();

              Swal.fire({
                title: "Password Changed Succefully!", 
                text: "Profile was updated", 
                icon: "success"}).then(function(){ 

                  location.href = 'dashboard';
                }
              );
            }
            else if(data.status == "Incorrect")
            {
              $("#changepassword").removeAttr("hidden", "true");
              $("#loader2").hide();

              Swal.fire({
                title: "Incorrect Password!", 
                text: "Profile was not updated", 
                icon: "error"}).then(function(){ 
              
                }
              );

            }
            else{
              
              
            }

          },
   
              
        
        })

          

    }

  });

  



</script>


<?php       }

                    }
                   ?>
                             
