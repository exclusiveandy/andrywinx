
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
        <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Create Blog</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Title</label>
                <input type="text" id="title" class="form-control">
              </div>
              <br>
              <hr/>

              <div class="form-group text-center">
                <label for="inputEstimatedBudget">Details</label>
              </div>
              <button id="save" class="btn btn-primary float-right" onclick="save()" type="button">Preview</button>
              <button id="edit" class="btn btn-primary pull-left" onclick="edit()" type="button">Open</button>

              <div class="form-group"> 
                <div class="click2edit">
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
              <h3 class="card-title">Featured Blogs</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control" value="2300" step="1">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control" value="2000" step="1">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control" value="20" step="0.1">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List of Blogs</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Functional-requirements.docx</td>
                    <td>49.8005 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>UAT.pdf</td>
                    <td>28.4883 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Email-from-flatbal.mln</td>
                    <td>57.9003 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Logo.png</td>
                    <td>50.5190 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Contract-10_12_2014.docx</td>
                    <td>44.9715 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>

                </tbody>
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

  var edit = function() {
    $('.click2edit').summernote({
      focus: true,
      height: 1000,
    });
  };

  var save = function() {
    var markup = $('.click2edit').summernote('code');
    $('.click2edit').summernote('destroy');
  };


</script>  
