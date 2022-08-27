<?php 
require_once __DIR__.'/vendor/autoload.php';

require_once 'template-parts/header.php'; ?>

    <div class="page-title" style="background-image: url(assets/images/page-title.png)">
        <h1>Blog</h1>
    </div>
    
    <section id="blog">
        <div class="blog container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                        <a href="#"><img class="img-responsive img-blog" src="assets/images/blog1.png" width="100%" alt="" /></a>
                        <div class="blog-content">
                            <a href="#" class="blog_cat">UI/UX DESIGN</a>
                            <h2><a href="blog-item.html">Consequat bibendum quam liquam viverra</a></h2>
                            <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                            <a class="readmore" href="blog-item.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/.blog-item-->

                    <div class="blog-item">
                        <a href="#"><img class="img-responsive img-blog" src="assets/images/blog2.png" width="100%" alt="" /></a>
                        <div class="blog-content">
                            <a href="#" class="blog_cat">UI/UX DESIGN</a>
                            <h2><a href="blog-item.html">Consequat bibendum quam liquam viverra</a></h2>
                            <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                            <a class="readmore" href="blog-item.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/.blog-item-->

                    <div class="blog-item">
                        <a href="#"><img class="img-responsive img-blog" src="assets/images/blog3.png" width="100%" alt="" /></a>
                        <div class="blog-content">
                            <a href="#" class="blog_cat">UI/UX DESIGN</a>
                            <h2><a href="blog-item.html">Consequat bibendum quam liquam viverra</a></h2>
                            <h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>
                            <a class="readmore" href="blog-item.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/.blog-item-->
                    
                </div>
                <!--/.col-md-8-->

                <?php require_once 'template-parts/sidebar.php'; ?>
            </div>
            <!--/.row-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                    <!--/.pagination-->
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->


<?php 
require_once 'template-parts/footer.php';