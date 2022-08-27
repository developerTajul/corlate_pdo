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
            <?php 

              ?>
            <div class="col-md-6 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <p class="card-description">You can add as many as category you want.</p>
                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                        <label for="update_name">Name</label>
                        <input type="text" name="update_name" value="<?php echo $cat_post['name']; ?>" class="form-control" id="update_name" placeholder="Category Name">
                      </div>

                      <div class="form-group">
                        <label for="update_content">update_Content</label>
                        <textarea class="form-control" name="update_content" id="update_content" rows="5"><?php echo $cat_post['content']; ?></textarea>
                      </div>
      
                      <div class="form-group">
                        <label id="update_thumbnail">File upload dfd</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="update_thumbnail" class="form-control file-upload-info">
                        </div>
                        <img src="../uploads/categories/<?php echo $cat_post['thumbnail']; ?>" alt="<?php echo $cat_post['name']; ?>">
                      </div>

                      <button type="submit" class="btn btn-success mr-2" name="update_category">Update Category</button>
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