<?php 
require_once 'template-parts/header.php'; ?>
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
          <?php require_once('template-parts/sidebar.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Ends-->
            
            <div class="row">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <p class="card-description">You can add as many as category you want.</p>
                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Category Name">
                      </div>

                      <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" rows="5"></textarea>
                      </div>
      
                      <div class="form-group">
                        <label id="thumbnail">File upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="thumbnail" class="form-control file-upload-info">
                        </div>
                      </div>

                      <button type="submit" class="btn btn-success mr-2" name="add_category">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- content-wrapper ends -->
<?php 
require_once 'template-parts/footer.php'; ?>