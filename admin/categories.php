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
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                    <p class="card-description">Manage All Categories From Here</p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Profile</th>
                          <th>VatNo.</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $allCats = $cat->show_all();
                        $number = 1;
                        foreach($allCats as $cat ):
                        ?>
                        <tr>
                          <td><?php echo $number; ?></td>
                          <td><?php echo $cat['name']; ?></td>
                          <td><?php echo $cat['content']; ?></td>
                          <td><img src="../uploads/categories/<?php echo $cat['thumbnail']; ?>" alt="<?php echo $cat['name']; ?>"></td>
                          <td>
                            <?php 
                            if(  $cat['status'] == '0' ): ?>
                              <a class="btn btn-success" href="?cat_id=<?php echo $cat['id']; ?>&cat_status=<?php echo $cat['status']; ?>">Active</a>
                            <?php 
                            else: ?>
                              <a class="btn btn-danger" href="?cat_id=<?php echo $cat['id']; ?>&cat_status=<?php echo $cat['status']; ?>">Deactive</a>
                            <?php 
                            endif; ?>
                          </td>
                          <td>
                            <a href="edit_category.php?cat_id=<?php echo $cat['id']; ?>">Edit</a>
                            <a href="?cat_del_id=<?php echo $cat['id']; ?>">Delete</a>
                          </td>
                        </tr>
                         <?php 
                         $number++;
                         endforeach; ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


                </div>
            </div>
          <!-- content-wrapper ends -->
<?php 
require_once 'template-parts/footer.php'; ?>