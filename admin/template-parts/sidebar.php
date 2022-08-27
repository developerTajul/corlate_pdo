<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">Allen Moreno</p>
          <p class="designation">Premium user</p>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- add new post -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#add_post" aria-expanded="false" aria-controls="add_post">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Posts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="add_post">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="posts.php">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_new_post.php">Add New Post</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- categories -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#add_cats" aria-expanded="false" aria-controls="add_cats">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Categories</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="add_cats">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="categories.php">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_new_category.php">Add New Category</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- posts -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#add_tags" aria-expanded="false" aria-controls="add_tags">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Tags</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="add_tags">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="tags.php">Tags</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_new_tag.php">Add New Tag</a>
          </li>
        </ul>
      </div>
    </li>




    <li class="nav-item">
      <a class="nav-link" href="pages/forms/basic_elements.html">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">Form elements</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/charts/chartjs.html">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/basic-table.html">
        <i class="menu-icon typcn typcn-bell"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/icons/font-awesome.html">
        <i class="menu-icon typcn typcn-user-outline"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login.html"> Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html"> Register </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>